<?php

namespace App\Http\Controllers;


use App\Exports\SeoExport;
use Maatwebsite\Excel\Facades\Excel;
use SleepingOwl\Admin\Http\Controllers\AdminController;
use SleepingOwl\Admin\Contracts\ModelConfigurationInterface;


class SeoController extends AdminController
{        
    public function export(){
        return Excel::download(new SeoExport, 'seo.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }

}
