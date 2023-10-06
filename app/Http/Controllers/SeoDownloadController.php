<?php

namespace App\Http\Controllers;

use App\Imports\SeoImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\SeoDownloadRequest;

class SeoDownloadController extends Controller
{
    public function postStore(SeoDownloadRequest $request){

        Excel::import(new SeoImport, $request->file);
        
        return redirect()->to(request()->input('_redirectBack'))->with('success_message', 'Запись успешно создана');
        
    }


}
