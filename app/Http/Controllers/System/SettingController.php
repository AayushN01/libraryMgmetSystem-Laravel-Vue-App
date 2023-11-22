<?php

namespace App\Http\Controllers\System;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index()
    {   
        $setting = Setting::find(1);
        return view('backend.setting.index',compact('setting'));
    }

    public function saveSettings(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'website_name' => 'required|max:255',
            'logo' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErorrs($validator);
        }

        $setting = Setting::where('id','1')->first();
        if($setting){
            $setting->website_name = $request->website_name;
            $setting->description = $request->description;
            $setting->contact_1 = $request->contact_1;
            $setting->contact_2 = $request->contact_2;
            $setting->email = $request->email;
            $setting->po_box = $request->po_box;
            $setting->url = $request->url;
            $setting->facebook = $request->facebook;
            $setting->instagram = $request->instagram;
            $setting->twitter = $request->twitter;
            $setting->linkedin = $request->linkedin;
            $setting->google_plus = $request->google_plus;
            $setting->youtube = $request->youtube;
            $setting->tiktok = $request->tiktok;
            $setting->google_map = $request->google_map;
            if($request->hasFile('logo')){
                $destination = 'uploads/settings/logo/'.$setting->logo;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('logo');
                $filename = time(). '.' . $file->getClientOriginalExtension();
                $file->move('uploads/settings/logo/',$filename);
                $setting->logo = $filename;
            }
            if($request->hasFile('favicon')){
                $destination = 'uploads/settings/favicon/'.$setting->favicon;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('favicon');
                $filename = time(). '.' . $file->getClientOriginalExtension();
                $file->move('uploads/settings/favicon/',$filename);
                $setting->favicon = $filename;
            }

            $setting->save();

            return redirect()->back()->with('message','Settings updated');
        }else{
            $setting = new Setting();
            $setting->website_name = $request->website_name;
            $setting->description = $request->description;
            $setting->contact_1 = $request->contact_1;
            $setting->contact_2 = $request->contact_2;
            $setting->email = $request->email;
            $setting->po_box = $request->po_box;
            $setting->url = $request->url;
            $setting->facebook = $request->facebook;
            $setting->instagram = $request->instagram;
            $setting->twitter = $request->twitter;
            $setting->linkedin = $request->linkedin;
            $setting->google_plus = $request->google_plus;
            $setting->youtube = $request->youtube;
            $setting->tiktok = $request->tiktok;
            $setting->google_map = $request->google_map;
            if($request->hasFile('logo')){
                $file = $request->file('logo');
                $filename = time(). '.' . $file->getClientOriginalExtension();
                $file->move('uploads/settings/logo/',$filename);
                $setting->logo = $filename;
            }
            if($request->hasFile('favicon')){
                $file = $request->file('favicon');
                $filename = time(). '.' . $file->getClientOriginalExtension();
                $file->move('uploads/settings/favicon/',$filename);
                $setting->favicon = $filename;
            }

            $setting->save();

            return redirect()->back()->with('message','Settings added');
        }
    }
}
