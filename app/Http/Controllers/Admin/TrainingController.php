<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class TrainingController extends AdminController
{
    public function all(){
        $trainings = Training::all();
        return view('admin.trainings.index',compact('trainings')); //compact('trainings')
    }

    public function get(Request $request, $id){
        return view('admin.trainings.create');
    }

    public function form(){
        return view('admin.trainings.create');
    }

    public function editForm($id){
        $training = Training::findOrFail($id);
        return view('admin.trainings.update', compact('training'));
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
        ]);

        $training = Training::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => '',
        ]);

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> storeAs('images/trainings/', $filename);
            $training['image']= $filename;
        }
        $training->save();

        if($training){
            Alert::toast('Cette formation a été ajoutée!', 'success');
            return redirect()->route('trainings.index');
        }
        return redirect()->back()->with('error','Une erreur est survenue');
    }

    public function update(Request $request, $id){
        $training = Training::find($id);
        if ($training){
            $request->validate([
                'name' => ['required'],
                'description' => 'required',
                'image' => 'mimes:jpeg,png,jpg,gif',
            ]);
    
            $training->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);


            if($request->file('image')){

                $image_path = 'images/sliders/'.$training->image;
                if (Storage::exists($image_path)) {
                    Storage::delete($image_path);
                }

                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> storeAs('images/trainings/', $filename);
                $training['image']= $filename;
            }
            $training->save();

            Alert::success('Allright','Formation mise à jour!');
            return redirect()->route('trainings.index');
            
        }
        Alert::toast('Impossible de modifier la formation!', 'error');
    }

    public function delete(Request $request, $id){
        $training = Training::findOrFail($id);
        $image_path = 'images/trainings/'.$training->image;
        if (Storage::exists($image_path)) {
            Storage::delete($image_path);
        }
        $training->delete();
        Alert::toast('Formation supprimée!', 'success');
        return redirect()->route('trainings.index');
    }
}
