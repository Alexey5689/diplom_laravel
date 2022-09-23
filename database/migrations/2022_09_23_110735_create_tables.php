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
                $table->string('UserEmail',250)->unique();
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
                $table->time('GeneralTimeVideo')->unsigned();
                $table->timestamps();
            }
        );
        Schema::create('Reaction', function(Blueprint $table)
            {
                $table->foreign('videoId')->references('id')->on('Videos');
                $table->foreign('userId')->references('id')->on('Users');
                $table->integer('reaction')->unsigned();
                $table->time('currentTime')->unsigned();
                $table->timestamps();
            }
       
        ); 
        Schema::create('Subscribers', function(Blueprint $table)
            {
                $table->foreign('Subscriber(userId)')->references('id')->on('Users');
                $table->foreign('Subscribers(userId)')->references('id')->on('Users');
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
