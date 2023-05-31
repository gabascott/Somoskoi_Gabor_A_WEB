<?php

use App\Models\Teszt;
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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id('id');
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4')->default('v1');
            $table->string('helyes');
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->timestamps();
        });
        
        Teszt::create(['kerdes' => 'A papírt miyen színű szelektív kukába gyűjtjük?', 'v1' => 'kék', 'v2' => 'piros', 'v3' => 'szürke', 'v4' => 'sárga', 'helyes' => 'kék', 'kategoriaId' => 1]);
        Teszt::create(['kerdes' => 'Melyek komposztálhatóak?', 'v1' => 'zöldség - gyümölcs maradék, tojáshéj', 'v2' => 'nagy ágak, fatörzsek, diófalevél', 'v3' => 'fém, műanyag, vegyszeres dolgok', 'v4' => 'ruhanemű, egyéb textíliák', 'helyes' => 'zöldség - gyümölcs maradék, tojáshéj', 'kategoriaId' => 1]);
        Teszt::create(['kerdes' => 'Mely tápanyag segít az izomrostok fejlődésében?', 'v1' => 'fehérje', 'v2' => 'zsír', 'v3' => 'szénhidrát', 'v4' => 'cukor', 'helyes' => 'fehérje', 'kategoriaId' => 2]);
        Teszt::create(['kerdes' => '', 'v1' => '', 'v2' => '', 'v3' => '', 'v4' => '', 'helyes' => '', 'kategoriaId' => 2]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
