<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Promosi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.homeadmin');
    }

    public function show($id)
    {
        $beritas = Berita::orderBy('id','DESC')->get();
        return view('pages.adminberita',compact('beritas'));

    }

    public function adminberita()
    {
        $beritas = Berita::orderBy('id','DESC')->get();
        return view('pages.adminberita',compact('beritas'));
    }

    public function adminpromo()
    {
        $promos = Promosi::orderBy('id','DESC')->get();
        return view('pages.adminpromo',compact('promos'));
    }

    public function create()
    {
        return view('pages.createberita');
    }
    public function createpromo()
    {
        return view('pages.createpromo');
    }
    public function store(Request $request)
    {
        
        
        if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
        $berita = new Berita;
        $berita->judul = $request->input('judul');
        $berita->konten = $request->input('konten');
        $berita->gambar = $fileNameToStore;
        $berita->save();

        return redirect('/internal/berita');
    }

    public function storepromo(Request $request)
    {
        
        
        if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
        $promo = new Promosi;
        $promo->promosi = $request->input('promosi');
        $promo->gambar = $fileNameToStore;
        $promo->save();

        return redirect('/internal/promo');
    }
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('pages.editberita',compact('berita'));
    }

    public function editpromo($id)
    {
        $promo = Promosi::find($id);
        return view('pages.editpromo',compact('promo'));
    }

    public function update(Request $request, $id)
    
    {
        if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        $berita = Berita::find($id);
        $berita->judul = $request->input('promosi');
        $berita->konten = $request->input('konten');
        if($request->hasFile('cover_image')){
            $berita->gambar = $fileNameToStore;
        }
        $berita->save();

        return redirect('/internal/berita');
    }

    public function updatepromo(Request $request, $id)
    
    {
        if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        $promo = Promosi::find($id);
        $promo->promosi = $request->input('promosi');
        
        if($request->hasFile('cover_image')){
            $promo->gambar = $fileNameToStore;
        }
        $promo->save();

        return redirect('/internal/promo');
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('/internal/berita');
    }

    public function destroypromo($id)
    {
        $promo = Promosi::find($id);
        $promo->delete();
        return redirect('/internal/promo');
    }

    
}
