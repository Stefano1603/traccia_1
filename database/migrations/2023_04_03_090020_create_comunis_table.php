<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comunis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('img');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id') 
            ->references('id')
            ->on('users');

            // ho prima assegnato il vincolo alla colonna user_id,questa colonna
            //  fa riferimento alla colonna con nome id nella tabella users

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunis');
    }
};
