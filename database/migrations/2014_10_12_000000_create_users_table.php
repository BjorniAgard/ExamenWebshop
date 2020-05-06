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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('telephone')->unique();
            $table->string('address');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('user_role_id')->default(2);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
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
