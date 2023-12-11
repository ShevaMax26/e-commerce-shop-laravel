<?php

use Fureev\Trees\Migrate;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            Migrate::columns($table, (new \App\Models\Category())->getTreeConfig());
            $table->jsonb('name');
            $table->string('image', 100)->nullable();
            $table->string('slug', 70);
            $table->integer('order')->default(1);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
