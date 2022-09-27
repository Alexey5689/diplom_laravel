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
        
        Schema::create('User', function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('UserName',100);
                $table->string('UserLogin',100);
                $table->string('UserPass',100);
                $table->string('UserEmail',250);
                $table->timestamps();
               
            }
        );
        Schema::create('Videos', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('UserId')->unsigned();
                $table->foreign('UserId')->references('id')->on('user');
                $table->string('videoPath',255);
                $table->string('nameVideo',100);
                $table->float('sizeVideo')->unsigned();
                $table->string('formatVideo',100);
                $table->time('GenTimeVi');
                $table->timestamps();
            }
        );
        Schema::create('Reaction', function(Blueprint $table)
            {
                $table->integer('videoId')->unsigned();
                $table->foreign('videoId')->references('id')->on('Videos');
                $table->integer('UserId')->unsigned();
                $table->foreign('userId')->references('id')->on('User');
                $table->integer('reaction')->unsigned();
                $table->time('currentTime');
                $table->timestamps();
            }
       
        ); 
        Schema::create('Subscribers', function(Blueprint $table)
            {
               $table->integer('Subscriber(userId)')->unsigned();
                $table->foreign('Subscriber(userId)')->references('id')->on('User');
                $table->integer('Subscribers(userId)')->unsigned();
                $table->foreign('Subscribers(userId)')->references('id')->on('User');
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
