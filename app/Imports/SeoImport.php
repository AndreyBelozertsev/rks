<?php

namespace App\Imports;


use Domain\Seo\Models\Seo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithUpserts;

class SeoImport implements ToModel, WithUpserts
{
    /**
     * @param array $row
     *
     * @return Seo|null
     */
    public function model(array $row)
    {
        return new Seo([
           'url'     => $row[0],
           'title'    => $row[1],
           'description' => $row[2],
        ]);
    }

       /**
     * @return string|array
     */
    public function uniqueBy()
    {
        return 'url';
    }
}