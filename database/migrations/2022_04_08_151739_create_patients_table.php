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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table-> string('name');
            $table-> string('email') -> unique();
            $table-> string('cell') -> unique() ->  nullable();
            $table-> string('photo') -> nullable();
            $table-> string('password');
            $table-> string('address') -> nullable();
            $table-> integer('age') -> nullable();
            $table-> string('dob') -> nullable();
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
        Schema::dropIfExists('patients');
    }
};
