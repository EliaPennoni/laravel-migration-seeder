<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            // azienda
            $table->string('company', 64);
            // stazione di partenza
            $table->string('dep_station', 64);
            // stazione di arrivo
            $table->string('arr_station', 64);
            // orario di partenza
            $table->time('departure', 0);
            // orario di arrivo
            $table->time('arrival', 0);
            // numero carrozze
            $table->tinyInteger('wagons_number', )->nullable()->unsigned();
            // in orario
            $table->boolean('on_time')->default(true);
            // cancellato
            $table->boolean('cancelled')->default(false);
            // codice treno
            $table->string('train_code', 16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
