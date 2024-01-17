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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->text('sexe');
            $table->text('ref_qrcode');
            $table->text('ref_rfid');
            $table->text('imagepath');
            $table->text('datedenaissance');
            $table->text('lieudenaissance');
            $table->text('anneedetude');
            $table->unsignedBigInteger('parcoure_id');
            $table->foreign('parcoure_id')->references('id')->on('parcoures')->onDelete('cascade');
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
