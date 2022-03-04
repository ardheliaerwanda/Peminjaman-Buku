<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('account_id');
            $table->enum('gender_id',['1','2']);
            $table->integer('role_id');
            $table->string('first_name',25);
            $table->string('middle_name',25)->nullable();
            $table->string('last_name',25);
            $table->string('email',50);
            $table->string('password',255);
            $table->string('display_picture_link', 255)->nullable();
            $table->integer('delete_flag')->nullable();
            $table->timestamps();
            $table->rememberToken();
            $table->string('modified_by', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
