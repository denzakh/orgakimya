<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;

class SettingAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.settings.index', ['settings' => Setting::findOrFail(1)->toArray()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $service->update($request);

        return redirect()->route('settings.index')->with('success', 'services updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
