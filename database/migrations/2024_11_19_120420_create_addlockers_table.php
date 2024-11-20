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
        Schema::create('addlockers', function (Blueprint $table) {
            $table->id();
            $table->string('locker_number')->unique();
            $table->string('status');
            $table->string('student_last_name');
            $table->string('student_first_name');
            $table->string('student_middle_name')->nullable();
            $table->string('student_id');
            $table->string('course');
            $table->string('year');
            $table->string('set');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addlockers');
    }
};
