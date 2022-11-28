<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Books;
use App\Models\BookCategory;
use App\Models\Publishers;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $books = Books::all();
        
        return view('home', compact(['categories','books']));
    }

    public function detail($id)
    {
        $categories = Categories::all();
        $data = Books::findOrFail($id);
        
        return view('detail', compact(['categories','data']));
    }

    public function category($id)
    {
        $categories = Categories::all();
        $categoryDetail = Categories::findOrFail($id);
        $data = BookCategory::where('category_id', $id)->get();
        
        return view('category', compact(['categories','data','categoryDetail']));
    }

    public function publisher()
    {
        $categories = Categories::all();
        $publishers = Publishers::all();
        
        return view('publisher', compact(['categories','publishers']));
    }

    public function contact()
    {
        $categories = Categories::all();
        
        return view('contact', compact(['categories']));
    }
}
