<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('Users', function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('UserName',100)->unique();
                $table->string('UserLogin',100)->unique();
                $table->string('UserPass',100)->unique();
                $table->timestamps();
            }
        );
        Schema::create('Videos', function(Blueprint $table)
            {
                $table->increments('id');
                $table->foreign('OwnerId')->references('id')->on('Users');
                $table->string('videoPath',255);
                $table->string('nameVideo',100);
                $table->float('sizeVideo')->unsigned();
                $table->string('formatVideo',100);
                $table->float('GeneralTimeVideo')->unsigned();
                $table->timestamps();
            }
        );

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
