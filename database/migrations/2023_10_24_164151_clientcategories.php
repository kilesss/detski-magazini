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
        Schema::create('client_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->string('title');
            $table->integer('client_master_id');
            $table->integer('master_id');
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
