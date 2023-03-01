<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Domain\Setting\Models\Setting;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\SaveSettingsRequest;

class SettingController extends Controller
{
    public function contactIndex()
    {
        return view('page.contact');
    }

    public function save(SaveSettingsRequest $request)
    {
        Setting::truncate();
        $data=[];
        foreach($request->input() as $k => $v){
            if(empty($v)){
                continue;
            }
            $data[]=[
                'key' => $k,
                'value'=>$v
            ];
        }

        Cache::forget('setting.contacts');
        Cache::forget('setting.policy');
        Cache::forget('setting.cookie-text');

        Setting::insert($data);

        return redirect()->back()->with('success_message', "Настройки успешно обновлены");
    }

    public function policyIndex()
    {
        $policy = Cache::rememberForever('setting.policy', function (){
            return Setting::where('key','policy')
                ->select('value')
                ->first();
        });
        return view('page.policy', compact('policy') );
    }
}
