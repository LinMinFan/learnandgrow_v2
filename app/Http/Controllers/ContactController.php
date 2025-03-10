<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;
use App\Enums\ContactFormEnum;
use App\Http\Requests\ContactRequest;
use App\Models\ContactForm;
use Exception;

class ContactController extends Controller
{
    // index
    public function getContact(Request $request): View
    {
        $columnData = [];
        $formMap = ContactFormEnum::getFormMap();

        foreach ($formMap as $columnName) {
            if (!empty(Redis::get($columnName))) {
                $columnData[$columnName] = Redis::get($columnName);
            }
        }

        return view('form.contact_form', $columnData);
    }

    // 暫存欄位
    /**
     * @param name
     * @param email
     * @param subject
     * @param message
     */
    public function temporary(Request $request)
    {
        $result =[
            'success' => false,
        ];

        $isDataStored = false;

        $formMap = ContactFormEnum::getFormMap();

        foreach ($formMap as $inputName) {
            if ($request->has($inputName) && !empty($request->get($inputName))) {
                Redis::setex($inputName, 1800, $request->get($inputName));
                $isDataStored = true;
            }
        }

        if ($isDataStored) {
            $result['success'] = true;
        }

        return response()->json($result, 200);
    }

    public function save(ContactRequest $request)
    {
        $msg = 'OK';
        $validatedData = $request->validated();
        $formMap = ContactFormEnum::getFormMap();

        try {
            ContactForm::create($validatedData);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $msg = $e->getMessage();
        }

        if ($msg == 'OK') {
            foreach ($formMap as $columnName) {
                Redis::del($columnName);
            }
        }

        return response()->json($msg, 200);
    }
}
