<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nm_kelas');
            //$table->timestamps();
        });

        DB::table('kelas')->insert([
            [
                'nm_kelas' => 'Kelas X'
            ],
            [
                'nm_kelas' => 'Kelas XI'
            ],
            [
                'nm_kelas' => 'Kelas XII'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
};
