<?php   
namespace App\Http\Controllers;   

use Illuminate\Http\Request; 
use App\Models\Sewa; 
use App\Models\Product; 
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;  

class SewaController extends Controller {     
    // Tampilkan form berdasarkan product yang dipilih     
    public function create($id)     
    {         
        $product = product::findOrFail($id);         
        return view('frontend/sewa', compact('product'));     
    }      
    
    // Simpan data sewa ke database     
    public function store(Request $request)     
    {         
        $request->validate([             
            'product_id' => 'required|exists:products,id',             
            'nama_penyewa' => 'required',             
            'tanggal_sewa' => 'required|date',             
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_sewa',             
            'payment_method' => 'required',             
            'total_price' => 'required|integer',             
            'jumlah_bayar' => 'required|integer',         
        ]);          
        
        // Hitung jumlah hari sewa         
        $tanggalSewa = Carbon::parse($request->tanggal_sewa);         
        $tanggalKembali = Carbon::parse($request->tanggal_kembali);         
        $days = $tanggalSewa->diffInDays($tanggalKembali);          
        
        // Ambil harga produk dari database         
        $product = Product::findOrFail($request->product_id);         
        $totalPrice = $product->harga_sewa * $days;          
        
        // Tentukan status berdasarkan jumlah bayar         
        if ($request->jumlah_bayar >= $totalPrice) {
            $status = 'Lunas';
        } elseif ($request->jumlah_bayar >= ($totalPrice / 2)) {
            $status = 'DP';
        } else {
            $status = 'Pending'; // Menambahkan nilai default untuk status
        }      
        
        // Simpan ke database         
        Sewa::create([             
            'product_id' => $request->product_id,             
            'user_id' => Auth::id(), // tambah user_id            
            'nama_penyewa' => $request->nama_penyewa,             
            'tanggal_sewa' => $request->tanggal_sewa,             
            'tanggal_kembali' => $request->tanggal_kembali,             
            'total_price' => $totalPrice,             
            'payment_method' => $request->payment_method,             
            'jumlah_bayar' => $request->jumlah_bayar,             
            'status' => $status,
            'status_barang' => 'dipinjam', // Default status barang         
        ]);         
        return redirect()->route('booking')->with('success', 'Pemesanan berhasil!');     
    }     
    
    // Tampilkan data sewa di admin     
    public function index()     
    {         
        $dataSewa = Sewa::with('product')->orderBy('created_at', 'desc')->get();         
        return view('sewa.index', compact('dataSewa'));     
    }      
    
    public function pembayaran(Request $request)     
    {         
        $product = Product::find($request->product_id);         
        return view('frontend/pembayaran', [             
            'product' => $product,             
            'nama_penyewa' => $request->nama_penyewa,             
            'tanggal_sewa' => $request->tanggal_sewa,             
            'tanggal_kembali' => $request->tanggal_kembali,             
            'payment_method' => $request->payment_method,             
            'total_price' => $request->total_price,             
            'jumlah_bayar' => $request->jumlah_bayar,         
        ]);     
    }
    
    // Tampilkan history sewa berdasarkan user yang login
    public function history()
    {
        $rentals = Sewa::with('product')
                        ->where('user_id', Auth::id())
                        ->orderBy('created_at', 'desc')
                        ->get();
                        
        return view('frontend/history', compact('rentals'));
    }
    
    // Update status barang (untuk admin)
    public function updateStatusBarang(Request $request, $id)
    {
        $sewa = Sewa::findOrFail($id);
        $sewa->status_barang = $request->status_barang;
        $sewa->save();
        
        return redirect()->back()->with('success', 'Status barang berhasil diubah!');
    }
}