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
        Schema::create('catalogs', function (Blueprint $table) {
            $table->id();
            $table->string('name_catalog');
            $table->longText('bk_for');
            //$table->timestamps();
        });

        DB::table('catalogs')->insert([
            [
                'name_catalog' => '000 - Karya Umum',
                'bk_for' => 'Buku tentang sistem, komputer, terbitan berseri, jurnalisme
                            naskah - naskah dan buku - buku langka'
            ],
            [
                'name_catalog' => '100 - Filsafat',
                'bk_for' => 'Buku psikologi, etika moral, filsafat jaman kuno, filsafat modern'
            ],
            [
                'name_catalog' => '200 - Agama',
                'bk_for' => 'Buku Agama Islam, agama alam, agama kristen, agama budha, agama hindu,
                            teologi, sejarah Islam'
            ],
            [
                'name_catalog' => '300 - Ilmu Sosial',
                'bk_for' => 'Buku sosiologi, ekonomi, ilmu politik, ilmu hukum, undang-undang'
            ],
            [
                'name_catalog' => '400 - Bahasa',
                'bk_for' => 'Kamus berbagai bahasa, buku bahasa berbagai negara,
                            buku bilingual, bahasa yunani kuno'
            ],
            [
                'name_catalog' => '500 - Ilmu Murni',
                'bk_for' => 'Buku kimia murni, biologi murni, astronomi, ilmu bumi, ilmu tumbuhan,
                            ilmu tanaman, ilmu binatang'
            ],
            [
                'name_catalog' => '600 - Ilmu Terapan',
                'bk_for' => 'Ilmu teknik, teknik bangunan, ilmu pertanian, farmasi'
            ],
            [
                'name_catalog' => '700 - Kesenian, Hiburan & Olahraga',
                'bk_for' => 'Teori kesenian, Arsitektur, Seni lukis, Seni pahat, Seni fotografi, olahraga'
            ],
            [
                'name_catalog' => '800 - Kesusastraan',
                'bk_for' => 'Teori kesusastraan, kesusastraan indonesia, kesusastraan inggris,
                            kesusastraan yunani kuno, puisi, pidato'
            ],
            [
                'name_catalog' => '900 - Searah dan Geografi',
                'bk_for' => 'Teori ilmu sejarah, geografi dan perjalanan, sejarah dunia'
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
        Schema::dropIfExists('catalogs');
    }
};
