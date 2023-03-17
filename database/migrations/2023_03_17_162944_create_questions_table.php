<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::disableForeignKeyConstraints();
    Schema::create('Questions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('quizzes_id')
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');   
        $table->string('text');
        $table->text('indication');
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
        Schema::dropIfExists('questions');
    }
}
