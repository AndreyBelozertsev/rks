<?php

namespace App\Exports;


use Domain\Seo\Models\Seo;
use Maatwebsite\Excel\Concerns\FromCollection;

class SeoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Seo::select(['url', 'title', 'description'])->get();
    }
}
