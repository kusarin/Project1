<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Homestead extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 创建用户表
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_email',32)->default('')->comment('用户登录名：企业邮箱');
            $table->string('user_password',32)->default('')->comment('用户密码，初始值为企业邮箱');
            $table->ipAddress('user_ip')->default('')->comment('用户最后一次登录ip');
            $table->integer('user_login_cnt')->default(0)->comment('用户登录次数');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
