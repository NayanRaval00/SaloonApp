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
        Schema::table('barbers', function (Blueprint $table) {
            $table->string('bank_name')->nullable();
            $table->bigInteger('bank_account_number')->unique()->nullable();
            $table->string('bank_account_holder_name')->nullable();
            $table->string('bank_address')->nullable();
            $table->string('bank_ifsc_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('barbers', function (Blueprint $table) {
            $table->dropColumn('bank_name');
            $table->dropColumn('bank_account_number');
            $table->dropColumn('bank_account_holder_name');
            $table->dropColumn('bank_address');
            $table->dropColumn('bank_ifsc_code');
        });
    }
};
