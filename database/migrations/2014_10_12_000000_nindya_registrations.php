<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NindyaRegistrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nindyaRegistrations', function (Blueprint $table) {
            $table->increments('registrationID');
            $table->string('name',200);
            $table->string('email',100);
            $table->string('password');
            $table->string("nim",20);
            $table->integer("generationID");
            $table->char("gender",1);
            $table->integer("majorID");
            $table->integer("cityID");
            $table->date("birthdate");
            $table->string("phonenumber",20);
            $table->string("lineID",30);
            $table->string("lastGPA",10);
            $table->string("address",100);
            $table->string("organizationalExperience",4000);
            $table->string("achievment",4000);
            $table->string("phase",100);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

        });
        


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nindyaRegistrations');
    }
}
