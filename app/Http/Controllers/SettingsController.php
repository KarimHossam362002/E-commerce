<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::select("id", "name", "description", "address", "phone", "email", "logo", "facebook", "twitter", "instagram", "youtube")
        ->paginate(5);
        return view('admin.settings.index' , compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SettingRequest $request)
    {
        
        $ext = $request->logo->extension();
        $fileName = 'Setting'.time() . rand(0,mt_getrandmax()) . '.' . $ext;
        $request->logo->move(public_path('assets/images/settings'), $fileName);
        Setting::create([
            "name" => $request->name,
            "description" => $request->description,
            "address" => $request->address,
            "phone" => $request->phone,
            "email" => $request->email,
            "logo" => $fileName,
            "facebook" => $request->facebook,
            "twitter" => $request->twitter,
            "instagram" => $request->instagram,
            "youtube" => $request->youtube,
        ]);
        return back()->with('success', "Data created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        return view('admin.settings.update', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingRequest $request, Setting $setting)
    {
        $defaultSetting = asset('assets/images/settings/defaultSetting.png');
        if($request->hasFile('logo')){
            $request->validate(['logo' => 'sometimes']);
            $ext = $request->logo->extention();
            $fileName = 'Setting'.time() . rand(0,mt_getrandmax()) . '.' . $ext;
            $request->logo->move(public_path('assets/images/settings'), $fileName);
        }
            $setting->update([
                "name" => $request->name,
                "description" => $request->description,
                "address" => $request->address,
                "phone" => $request->phone,
                "email" => $request->email,
                "logo" => $fileName ?? $defaultSetting,
                "facebook" => $request->facebook,
                "twitter" => $request->twitter,
                "instagram" => $request->instagram,
                "youtube" => $request->youtube,
            ]);
            return redirect()->route('settings.index')->with('updated', "Data updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Setting::where('id',$id)->delete();
        return redirect()->route('settings.index')->with('success', "Data deleted successfully");
    }
}
