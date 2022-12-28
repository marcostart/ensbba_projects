<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends AdminController
{
    public function all(){
        $articles = Article::all();
        return view('admin.articles.index', compact('articles')); //compact('articles')
    }

    public function get(Request $request, $id){
        return view('admin.articles.create');
    }

    public function form(){
        return view('admin.articles.create');
    }

    public function editForm($id){
        $article = Article::findOrFail($id);
        return view('admin.articles.update', compact('article'));
    }

    public function create(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
        ]);

        $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => '',
            'publisher_id' => auth()->user()->id,
        ]);

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> storeAs('images/articles/', $filename);
            $article['image']= $filename;
        }
        $article->save();

        if($article){
            Alert::toast('Votre article a été publié!', 'success');
            return redirect()->route('articles.index');
        }
        return redirect()->back()->with('error','Une erreur est survenue');
    }

    public function update(Request $request, $id){
        $article = Article::findOrFail($id);
        if ($article){
            $request->validate([
                'title' => ['required'],
                'content' => 'required',
                'image' => 'mimes:jpeg,png,jpg,gif',
            ]);
    
            $article->update([
                'title' => $request->title,
                'content' => $request->content,
                //'publisher_id' => auth()->user()->id,
            ]);



            if($request->file('image')){
                $image_path = 'images/articles/'.$article->image;
                if (Storage::exists($image_path)) {
                    Storage::delete($image_path);
                }

                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> storeAs('images/articles/', $filename);
                $article['image']= $filename;
            }
            $article->save();

            Alert::success('Allright','Article mis à jour!');
            return redirect()->route('articles.index');
            
        }
        Alert::toast('Impossible de modifier l\'article!', 'error');
    }

    public function delete(Request $request, $id){
        $article = Article::findOrFail($id);
        $image_path = 'images/articles/'.$article->image;
        if (Storage::exists($image_path)) {
            Storage::delete($image_path);
        }
        $article->delete();
        Alert::toast('Article supprimé!', 'success');
        return redirect()->route('articles.index');
    }
}
