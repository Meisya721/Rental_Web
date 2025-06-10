<?php  

namespace App\Http\Controllers;  

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller 
{      
    public function index()
    {
        return view('frontend/contact');
    }
      
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
          
        // Menggunakan model Message untuk menyimpan data
        Message::create([
            'nama' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'pesan' => $request->message
        ]);
          
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
    
    // Method untuk admin melihat pesan
    public function contact()
    {
        $messages = Message::all();
        return view('contact', compact('messages'));
    }
}