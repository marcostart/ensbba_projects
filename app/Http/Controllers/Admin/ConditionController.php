<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Condition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class ConditionController extends AdminController
{
    public function all(){
        $conditions = Condition::all();
        return view('admin.conditions.index',compact('conditions')); //compact('conditions')
    }

    public function get(Request $request, $id){
        return view('admin.conditions.create');
    }

    public function form(){
        return view('admin.conditions.create');
    }

    public function editForm($id){
        $condition = Condition::findOrFail($id);
        return view('admin.conditions.update', compact('condition'));
    }

    public function create(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required|max:200',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
        ]);

        $condition = Condition::create([
            'title' => $request->title,
            'content' => $request->description,
            'image' => '',
        ]);

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> storeAs('images/conditions/', $filename);
            $condition['image']= $filename;
        }
        $condition->save();

        if($condition){
            Alert::toast('Cette condition a été ajoutée!', 'success');
            return redirect()->route('conditions.index');
        }
        return redirect()->back()->with('error','Une erreur est survenue');
    }

    public function update(Request $request, $id){
        $condition = Condition::findOrFail($id);
        if ($condition){
            $request->validate([
                'title' => ['required'],
                'description' => 'required',
                'image' => 'mimes:jpeg,png,jpg,gif',
            ]);
    
            $condition->update([
                'title' => $request->title,
                'content' => $request->description,
            ]);

            if($request->file('image')){
                $image_path = 'images/conditions/'.$condition->image;
                if (Storage::exists($image_path)) {
                    Storage::delete($image_path);
                }

                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> storeAs('images/conditions/', $filename);
                $condition['image']= $filename;
            }
            $condition->save();

            Alert::success('Allright','Condition mise à jour!');
            return redirect()->route('conditions.index');
            
        }
        Alert::toast('Impossible de modifier la condition d\'admission!', 'error');
    }

    public function delete(Request $request, $id){
        $condition = Condition::findOrFail($id);
        $image_path = 'images/conditions/'.$condition->image;
        if (Storage::exists($image_path)) {
            Storage::delete($image_path);
        }
        $condition->delete();
        Alert::toast('Condition d\'admission supprimée!', 'success');
        return redirect()->route('conditions.index');
    }
}
