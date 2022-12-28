<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class PartnerController extends AdminController
{
    public function all(){
        $partners = Partner::all();
        return view('admin.partners.index',compact('partners')); //compact('partners')
    }

    public function get(Request $request, $id){
        return view('admin.partners.create');
    }

    public function form(){
        return view('admin.partners.create');
    }

    public function editForm($id){
        $partner = Partner::findOrFail($id);
        return view('admin.partners.update', compact('partner'));
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'logo' => 'mimes:jpeg,png,jpg,gif',
        ]);

        $partner = Partner::create([
            'name' => $request->name,
            'logo' => '',
        ]);

        if($request->file('logo')){
            $file= $request->file('logo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> storeAs('images/partners/', $filename);
            $partner['logo']= $filename;
        }
        $partner->save();

        if($partner){
            Alert::toast($partner->name.' a été ajouté comme partenaire!', 'success');
            return redirect()->route('partners.index');
        }
        return redirect()->back()->with('error','Une erreur est survenue');
    }

    public function update(Request $request, $id){
        $partner = Partner::find($id);
        if ($partner){
            $request->validate([
                'name' => ['required'],
                'logo' => 'mimes:jpeg,png,jpg,gif',
            ]);

            $partner->update([
                'name' => $request->name,
            ]);

            if($request->file('logo')){
                $image_path = 'images/partners/'.$partner->logo;
                if (Storage::exists($image_path)) {
                    Storage::delete($image_path);
                }

                $file= $request->file('logo');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> storeAs('images/partners/', $filename);
                $partner['logo']= $filename;
            }
            $partner->save();

            Alert::success('Allright','Partenaire mis à jour!');
            return redirect()->route('partners.index');
            
        }
        Alert::toast('Impossible de modifier le partenaire!', 'error');
    }

    public function delete(Request $request, $id){
        $partner = Partner::findOrFail($id);
        $image_path = 'images/partners/'.$partner->logo;
        if (Storage::exists($image_path)) {
            Storage::delete($image_path);
        }
        $partner->delete();
        Alert::toast('Partenaire supprimé!', 'success');
        return redirect()->route('partners.index');
    }
}
