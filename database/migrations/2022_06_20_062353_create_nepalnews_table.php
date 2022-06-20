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
        Schema::create('nepalnews', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('address');
            $table->String('email');
            $table->String('contact');
            $table->String('logo');
            $table->String('registration');
            $table->String('pan');
            $table->String('doib');
            $table->String('facebook')->nullable();
            $table->String('instagram')->nullable();
            $table->String('tiktok')->nullable();
            $table->String('निर्देशक')->nullable();
            $table->String('सम्पादक')->nullable();
            $table->String('संवाददाता')->nullable();

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
        Schema::dropIfExists('nepalnews');
    }
};
