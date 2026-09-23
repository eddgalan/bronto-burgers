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
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname', 50)->after('name');
            $table->boolean('is_admin')->after('lastname')->default(false);
            $table->boolean('is_active')->after('is_admin')->default(true);
            $table->string('phone_number', 12)->after('is_active')->default(null)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('lastname');
            $table->dropColumn('is_admin');
            $table->dropColumn('is_active');
            $table->dropColumn('phone_number');
        });
    }
};
