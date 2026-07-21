<?php
use App\Models\Advertise;
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
        Schema::create('advertise_images', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->boolean('featured');
            $table ->foreignIdFor(Advertise::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertise_images');
    }
};
