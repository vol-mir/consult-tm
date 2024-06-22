<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->longText('bank_details')->nullable();
            $table->string('registration_number')->nullable();
            $table->longText('description')->nullable();

            $table->timestamps();
        });

        DB::table('settings')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'slug' => 'main',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
