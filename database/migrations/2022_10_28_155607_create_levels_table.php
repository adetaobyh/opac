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
        Schema::create('levels', function (Blueprint $table) {
            $table->id();
            $table->string('kd_level');
            $table->string('nm_level');
            $table->timestamps();
        });

        DB::table('levels')->insert([
            [
                'kd_level' => 'L001',
                'nm_level' => 'Admin'
            ],
            [
                'kd_level' => 'L002',
                'nm_level' => 'Guru'
            ],
            [
                'kd_level' => 'L003',
                'nm_level' => 'Siswa'
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
        Schema::dropIfExists('levels');
    }
};
