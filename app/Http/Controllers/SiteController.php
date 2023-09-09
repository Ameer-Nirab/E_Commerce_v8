<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller{

    public function index()
    {
        $products_slider = Product::orderByDesc('id')->take(3)->get();
        $categories = Category::orderByDesc('id')->take(3)->get();
        $products_latest = Product::orderByDesc('id')->take(9)->offset(3)->get();
        return view('site.index', compact('products_slider' , 'categories' , 'products_latest'));
    }

    function about() {
        return view('site.about');
    }

    function shop() {
        $products = product::orderByDesc('id')->paginate(5);
        return view('site.shop' , compact('products'));
    }

    public function category($id){
        $category = Category::findOrFail($id);
        $products = $category->products()->orderByDesc('id')->paginate(5);
        return view('site.shop', compact('products', 'category'));
    }

    public function contact(){
        return view('site.contact');
    }

    public function search(Request $request){
        $products = Product::orderByDesc('id')->where('name', 'like', '%'.$request->q.'%')->paginate(5);
        return view('site.search', compact('products'));
    }

    function product($slug) {
        $product = Product::where('slug', $slug)->first();
        if (!$product) {
            abort(404);
        }
        $next = product::where('id' , '>' , $product->id)->first();
        $prev = product::where('id' , '<' , $product->id)->orderByDesc('id')->first();
        $related = product::where('category_id' , $product->category_id)->where('id' , '!=' , $product->id)->get();
        // return view('site.product' , compact('product' , 'next' , 'prev' , 'related'));
        // dd($slug);
        return view('site.product' , compact('product' , 'next' , 'prev' , 'related'));
    }

    function product_review(Request $request) {
        reviews::create([
            'comment' => $request->comment,
            'star' => $request->rating,
            'product_id' => $request->product_id,
            'user_id' => Auth::id()
        ]);
        return redirect()->back();
    }
}
