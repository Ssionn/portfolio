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
        Schema::table('projects', function (Blueprint $table) {
            $table->integer('star_count')->after('description')->default(0);
            $table->integer('fork_count')->after('star_count')->default(0);
            $table->integer('commit_count')->after('description')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('star_count');
            $table->dropColumn('fork_count');
            $table->dropColumn('commit_count');
        });
    }
};
