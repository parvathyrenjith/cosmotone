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
        if (!Schema::hasTable('otp_details')) {
            Schema::create('otp_details', function (Blueprint $table) {
                $table->bigInteger('otp_id')->autoIncrement();
                $table->enum('type', ['email', 'sms', 'whatsapp'])->default('sms');
                $table->bigInteger('otp');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('otp_details')) {
            Schema::dropIfExists('otp_details');
        }
    }
};
