<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('email', 100)->unique()->nullable();
            $table->string('code', 100)->unique();
            $table->string('username', 100)->nullable()->unique();
            $table->string('gender')->nullable();
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('role_id');

            $table->datetime('last_login_at')->nullable();
            $table->datetime('last_logout_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->dateTime('deleted_at')->nullable();

            $table->integer('deleted_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
