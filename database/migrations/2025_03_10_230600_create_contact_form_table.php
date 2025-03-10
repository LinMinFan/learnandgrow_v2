<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact_form', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('姓名');
            $table->string('email')->comment('Email');
            $table->string('subject')->comment('主旨');
            $table->longText('message')->comment('訊息');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `contact_form` comment '聯絡我表單'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_form');
    }
};
