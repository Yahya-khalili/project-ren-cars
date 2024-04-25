<?php

use App\Models\Client;
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
        Schema::create('booking-user', function (Blueprint $table) {
            $table->id();
            $table->date('pick_up_date');
            $table->date('return_date');
            $table->string('pick_up_and_return_location');
            $table->string('status')->default('on hold');
            $table->foreignIdFor(Client::class)->nullable()->constrained()->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
