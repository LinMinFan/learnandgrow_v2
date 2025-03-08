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
        Schema::create('admin_site', function (Blueprint $table) {
            $table->id();
            $table->string('key')->comment('欄位名稱');
            $table->longText('value')->nullable()->comment('設定值');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `admin_site` comment '網站設定'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_site');
    }
};
