<?php

namespace App\Exports;

use App\Models\Book;
use App\Models\Catalog;
use App\Models\Kelas;

use Maatwebsite\Excel\Concerns\FromCollection;

class BookExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Book::all();
        return Book::join('catalogs', 'catalogs.id', '=', 'books.catalog_id')
                    ->join('kelas', 'kelas.id', '=', 'books.kelas_id')
                    ->select('catalogs.name_catalog','kelas.nm_kelas','bk_title',
                    'bk_writer','publisher','bk_qty','bk_location','status')
                    ->get();
    }
}
