<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function indexCategory()
    {
        $categories = Category::all(); // Ambil semua data category dari database
        return view('homepage', compact('categories'));
    }
}
