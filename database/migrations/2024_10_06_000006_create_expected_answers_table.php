<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("expected_answers", function (Blueprint $table) {
            $table->id();
            $table->text("expected_answer");
            $table
                ->foreignId("question_id")
                ->constrained("questions")
                ->onDelete("cascade");

            // Columnas para almacenar distintos tipos de respuestas esperadas
            $table->text("expected_answer_text")->nullable(); // Respuesta esperada en formato texto
            $table
                ->enum("expected_answer_enum", [
                    "Sí",
                    "No",
                    "Bueno",
                    "Regular",
                    "Malo",
                ])
                ->nullable(); // Respuesta esperada en formato predefinido
            $table->decimal("expected_answer_numeric", 10, 2)->nullable(); // Respuesta esperada numérica
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("expected_answers");
    }
};