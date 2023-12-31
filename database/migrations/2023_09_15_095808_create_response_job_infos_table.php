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
        Schema::create('response_job_infos', function (Blueprint $table) {
           // This line creates the idResponse column as primary key
            $table->unsignedBigInteger('idUser');
            $table->id('idResponse');
            $table->unsignedBigInteger('idJobInfo');
            $table->string('answer',1);
            $table->string('resume')->comment('pathResume');
            $table->tinyInteger('notification')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('idUser')->references('idUser')->on('users');
            $table->foreign('idJobInfo')->references('idJobInfo')->on('job_infos');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('response_job_infos');
    }
};
