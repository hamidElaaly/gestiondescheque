<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToCheckInfos extends Migration
{
    public function up()
    {
        Schema::table('check_infos', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->default(0);        });
    }

    public function down()
    {
        Schema::table('check_infos', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}