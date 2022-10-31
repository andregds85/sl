<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalTable extends Migration
{
     public function up()
    {
        Schema::create('hospital', function (Blueprint $table) {
          
            $table->id();
            $table->string('nome',200)->nullable();
            $table->string('cnes',200)->nullable();
            $table->string('municipio',200)->nullable();
            $table->string('macro',200)->nullable();
            $table->timestamps();  
        });
        
    }

        public function down()
        {
    
            Schema::dropIfExists('hospital');
       
        }
    }


   