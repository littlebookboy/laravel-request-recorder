<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AlterResponseContentLongText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            ALTER TABLE `request_records`
            CHANGE `response_content` `response_content` longtext 
            COLLATE 'utf8mb4_unicode_ci' NULL COMMENT '對應請求所回應的內容' AFTER `response_code`;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("
            ALTER TABLE `request_records`
            CHANGE `response_content` `response_content` text 
            COLLATE 'utf8mb4_unicode_ci' NULL COMMENT '對應請求所回應的內容' AFTER `response_code`;
        ");
    }
}
