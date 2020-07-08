<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('profile_id');
            $table->string('firstname');
            $table->string('middlename')->nullable()->change();
            $table->string('lastname');
            $table->string('extensionname')->nullable();
            $table->string('artist_type');
            $table->date('birthdate')->nullable()->change();
            $table->foreignId('fk_gender_type')->nullable()->change();
            $table->string('mobile_no')->nullable();
            $table->string('email')->unique();
            $table->bigInteger('table_status_id');
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
        Schema::dropIfExists('profiles');
    }
}
