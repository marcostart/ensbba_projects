<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class MissionController extends AdminController
{
    public function index()
    {
        $missions = Mission::all()->first();
        if($missions){
            return view('admin.missions.update', compact('missions'));
        }
        return view('admin.missions.create');
    }

    public function editForm($id){
        $missions = Mission::all()->first();
        return view('admin.missions.update',compact('missions'));
    }

    public function create(Request $request){
        $request->validate([
            'content' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
            'video' => 'required|mimes:mp4,avi',
        ]);

        $missions = Mission::create([
            'content' => $request->content,
            'image' => '',
            'video' => '',
        ]);

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> storeAs('images/missions/', $filename);
            $missions['image']= $filename;
        }

        if($request->file('video')){
            $file= $request->file('video');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> storeAs('images/missions/videos/', $filename);
            $missions['video']= $filename;
        }

        $missions->save();

        if($missions){
            Alert::toast('Les missions et vision ont été mises à jour!', 'success');
            return redirect()->route('missions.index');
        }
        return redirect()->back()->with('error','Une erreur est survenue');
    }

    public function update(Request $request){
        $missions = Mission::all()->first();
        $request->validate([
            'content' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif',
            'video' => 'mimes:mp4,avi',
        ]);

        $missions->update([
            'content' => $request->content,
        ]);

        if($request->file('image')){
            $image_path = 'images/missions/'.$missions->logo;
            if (Storage::exists($image_path)) {
                Storage::delete($image_path);
            }

            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> storeAs('images/missions/', $filename);
            $missions['image']= $filename;
        }

        if($request->file('video')){
            $video_path = 'images/missions/videos/'.$missions->logo;
            if (Storage::exists($video_path)) {
                Storage::delete($video_path);
            }

            $file= $request->file('video');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> storeAs('images/missions/videos/', $filename);
            $missions['video']= $filename;
        }

        $missions->save();

        if($missions){
            Alert::toast('Les missions et vision ont été mises à jour!', 'success');
            return redirect()->route('missions.index');
        }
        return redirect()->back()->with('error','Une erreur est survenue');
    }
}
