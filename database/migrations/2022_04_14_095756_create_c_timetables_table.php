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
        Schema::create('c_timetables', function (Blueprint $table) {
            $table->id();
            $table->String('Subject');
            $table->String('Topic');
            $table->String('StartDate');
            $table->String('Level');
            $table->String('StartTime');
            $table->String('EndDate');
            $table->String('EndTime');
            $table->String('Link');
            $table->String('Description');
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
        Schema::dropIfExists('c_timetables');
    }
};
