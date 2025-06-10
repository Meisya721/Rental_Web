<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Product;


class HalamanController extends Controller
{
    public function welcome()
    {
        return view("frontend/welcome");
    }

    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view("frontend/home", compact('products'));
    }

    public function about()
    {
        return view("frontend/about");
    }

    // public function booking()
    // {
    //     $products = Product::all();

    //     return view("frontend/booking", compact('products'));
    // }

    public function booking()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('frontend/booking', compact('products'));
    }

    public function history()
    {
        return view("frontend/history");
    }

    public function sewa($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend/sewa', compact('product'));
    }

    public function testimonial()
    {
        return view("frontend/testimonial");
    }

    public function contact()
    {
        return view("frontend/contact");
    }

    public function detail(Product $product)
    {
        //$products = Product::all();
        
        return view("frontend/detail", compact('product'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminHome()
    {
        return view('dashboard');
    }

    public function contactStore(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Message::create($data);

        return redirect()->back()->with([
            'message' => 'pesan anda berhasil dikirim',
            'alert-type' => 'success',
        ]);
    }

    public function myprofile()
    {
        return view('frontend/profile-user');
    }
}
