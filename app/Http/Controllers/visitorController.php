<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class visitorController extends Controller
{
    public function index(Request $request)
    {
        $cats = Category::all();



            if(!$request->category) {
                $cat1 = "الصفحه الرئيسيه";
                $meals = Meal::all();
                return view('VisitorPage', compact('cats', 'meals', 'cat1'));
            }else{
                $cat1 = $request->category;
                $meals=Meal::where('category', $request->category)->get();
                return view('VisitorPage', compact('cats', 'meals', 'cat1'));

            }
       
        return view('VisitorPage');
    }

   
}
