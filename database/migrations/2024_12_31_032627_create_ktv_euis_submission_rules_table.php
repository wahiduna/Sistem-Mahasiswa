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
        Schema::create('ktv_euis_submission_rules', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('HSCode');
            $table->string('IsSupplierEuCountry');
            $table->string('IsBussinesEuCountry');
            $table->boolean('IsEori');
            $table->boolean('ComplianceCheck');
        });

        Schema::dropIfExists('ktv_dds_submission_rules');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ktv_dds_submission_rules');
        Schema::dropIfExists('ktv_euis_submission_rules');
    }
};
