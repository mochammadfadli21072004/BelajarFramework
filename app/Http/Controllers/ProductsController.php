<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
{
    $data = [
        'name' => $request->product_name,
        'stock' => $request->stock,
        'brand' => $request->brand,
        // TAMBAHKAN field discount_status
        'discount_status' => $request->discount_status,
        'buy_price' => $request->buy_price,
        'sale_price' => $request->sale_price,
        'comment' => $request->comment,
    ];
    $proses = Products::create($data);

    if($proses){
        // Lebih baik menggunakan session flash untuk notifikasi
        return redirect()->back()->with('success', 'Data produk berhasil disimpan!');
    } else {
        return redirect()->back()->with('error', 'Data produk gagal disimpan!');
    }

    // Ganti return redirect('/'); agar kembali ke halaman sebelumnya atau halaman produk
    return redirect('/products/create');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
