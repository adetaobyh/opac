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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('level_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('username');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('nisn')->uniqid();
            $table->string('password');
            $table->bigInteger('phone_number');
            $table->string('status')->default('not active');
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
                'level_id' => 1,
                'username' => 'Admin',
                'name' => 'Saefullah',
                'email' => 'admin@admin.com',
                'nisn' => mt_rand(100000000000, 999999999999),
                'password' => bcrypt('admin'),
                'phone_number' => '08963424332',
                'status' => 'active'
            ],
            [
                'level_id' => 2,
                'username' => 'Guru',
                'name' => 'Heru Sri Wuryanto',
                'email' => 'guru@guru.com',
                'nisn' => mt_rand(100000000000, 999999999999),
                'password' => bcrypt('guru'),
                'phone_number' => '08963414338',
                'status' => 'active'
            ],
            [
                'level_id' => 3,
                'username' => 'Siswa',
                'name' => 'Ade Taoby Hidayat',
                'email' => 'siswa@siswa.com',
                'nisn' => mt_rand(100000000000, 999999999999),
                'password' => bcrypt('siswa'),
                'phone_number' => '08963624335',
                'status' => 'active'
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
        Schema::dropIfExists('users');
    }
};
