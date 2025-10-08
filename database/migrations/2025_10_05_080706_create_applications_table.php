<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('class');
            $table->string('father_name')->nullable();
            $table->string('father_number')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_number')->nullable();
            $table->text('temp_address')->nullable();
            $table->text('perm_address')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
