<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class SliderController extends AdminController
{
    public function all(){
        $sliders = Slider::all();
        return view('admin.sliders.index',compact('sliders')); //compact('sliders')
    }

    public function get(Request $request, $id){
        return view('admin.sliders.create');
    }

    public function form(){
        return view('admin.sliders.create');
    }

    public function editForm($id){
        $slider = Slider::findOrFail($id);
        return view('admin.sliders.update',compact('slider'));
    }

    public function create(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
        ]);

        $slider = Slider::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => '',
        ]);

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> storeAs('images/sliders/', $filename);
            $slider['image']= $filename;
        }
        $slider->save();

        if($slider){
            Alert::toast('Votre slider a été publié!', 'success');
            return redirect()->route('sliders.index');
        }
        return redirect()->back()->with('error','Une erreur est survenue');
    }

    public function update(Request $request, $id){
        $slider = Slider::findOrFail($id);
        if ($slider){
            $request->validate([
                'title' => ['required'],
                'content' => 'required',
                'image' => 'mimes:jpeg,png,jpg,gif',
            ]);
    
            $slider->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);

            if($request->file('image')){
                $image_path = 'images/sliders/'.$slider->image;
                if (Storage::exists($image_path)) {
                    Storage::delete($image_path);
                }
                
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> storeAs('images/sliders/', $filename);
                $slider['image']= $filename;
            }
            $slider->save();

            Alert::success('Allright','Slider mis à jour!');
            return redirect()->route('sliders.index');
        }
        Alert::toast('Impossible de modifier le slider!', 'error');
    }

    public function delete(Request $request, $id){
        $slider = Slider::findOrFail($id);
        $image_path = 'images/sliders/'.$slider->image;
        if (Storage::exists($image_path)) {
            Storage::delete($image_path);
        }
        $slider->delete();
        Alert::toast('Slider supprimé!', 'success');
        return redirect()->route('sliders.index');
    }
}
