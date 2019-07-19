<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableConstraintToUserDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->string('no_ktp')->nullable()->change();
            $table->text('alamat')->nullable()->change();
            $table->text('pendidikan')->nullable()->change();
            $table->text('skill')->nullable()->change();
            $table->text('hobi')->nullable()->change();
            $table->string('no_hp')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->string('no_ktp')->nullable(false)->change();
            $table->text('alamat')->nullable(false)->change();
            $table->text('pendidikan')->nullable(false)->change();
            $table->text('skill')->nullable(false)->change();
            $table->text('hobi')->nullable(false)->change();
            $table->string('no_hp')->nullable(false)->change();
        });
    }
}
