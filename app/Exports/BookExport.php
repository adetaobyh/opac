<?php

namespace App\Exports;

use App\Models\Book;
use App\Models\Catalog;

use Maatwebsite\Excel\Concerns\FromCollection;

class BookExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Book::all();
        return Book::join('catalogs', 'catalogs.id', '=', 'books.catalogs_id')
                    ->select('catalogs.nm_catalog','bk_title','bk_date'
                    ,'bk_writer','synopsis','publisher','status')
                    ->get();
    }
}
