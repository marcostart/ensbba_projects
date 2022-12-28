<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Condition;
use App\Models\Mission;
use App\Models\Partner;
use App\Models\Slider;
use App\Models\Training;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->take(3)->get();
        $slider = Slider::latest()->first();
        $trainings = Training::all();
        $partners = Partner::all();
        $conditions = Condition::latest()->take(2)->get();
        $mission = Mission::latest()->first();
        return view('home', compact('articles','slider','trainings','partners','conditions','mission'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function search(Request $request, $q=null)
    {

        if ($request->ajax() && $q) {
            $teachers = [
                "Thibeau",
                "Joe",
                "William",
                "Meldu",
                "Krager",
                "Bounce"
            ];

            return $teachers;
        }

        if (!$request->ajax()) {
            return view('search');
        }
    }

    public function teacher(Request $request, $q)
    {
        return view('teacher');
    }

    public function directriceWelcome()
    {
        return view("directrice-welcome");
    }
}
