@extends('admin.utama')

@section('content')
<div class="col-lg-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Products</h4>
            {{-- Perbaiki URL pada Form::open. Sesuaikan dengan route yang benar (misalnya 'products.store') --}}
            {{-- dan pastikan metode adalah 'post' --}}
            {{-- Hapus bagian 'resources\views\admin\products.blade.php=>' yang salah pada 'url' --}}
            {!! Form::open(array('route' => 'products.store', 'method' => 'post', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) !!}
            <p class="card-description">
                Input data
            </p>
            <div class="row">
                {{-- Product Name & Stock --}}
                <div class="col-md-6">
                    <div class="form-group row">
                       {!! Form::label('product_name', 'Product Name', array ('class' => 'col-sm-3 col-form-label')) !!}
                    <div class="col-sm-9">
                        <input type="text" name="product_name" class="form-control" />
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Stock</label>
                        <div class="col-sm-9">
                            <input type="text" name="stock" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- Brand (Ganti menjadi <select> seperti pada gambar) --}}
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Brand</label>
                        <div class="col-sm-9">
                            {{-- Menggunakan Form::select untuk dropdown, dengan nilai 'Indofood' sebagai default placeholder --}}
                            {!! Form::select('brand', ['1' => 'Indofood', '2' => 'Wings', '3' => 'Orang tua', '4' => 'Other'], null, ['class' => 'form-control', 'placeholder' => 'Indofood']) !!}
                        </div>
                    </div>
                </div>
                {{-- Discount Status (Perbaiki penempatan radio button agar sejajar dengan label) --}}
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Discount Status</label>
                        {{-- Hapus col-sm-4 dan col-sm-5 di sini untuk merapikan radio button agar sejajar --}}
                        <div class="col-sm-9 d-flex align-items-center"> {{-- Tambahkan d-flex untuk mensejajarkan item --}}
                            <div class="form-check form-check-inline mr-3"> {{-- Gunakan form-check-inline dan mr-3 --}}
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="discount_status" id="discount_statYes" value="1" checked>
                                    Yes
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="discount_status" id="discount_statNo" value="0"> {{-- Ganti value menjadi 0 atau sesuai kebutuhan database --}}
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- Buy Price & Sale Price --}}
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Buy Price</label>
                        <div class="col-sm-9">
                            <input type="text" name="buy_price" class="form-control" /> {{-- Perbaiki name: 'buy price' menjadi 'buy_price' --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Sale Price</label>
                        <div class="col-sm-9">
                            <input type="text" name="sale_price" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- Comment (Ganti tipe input dari file menjadi text) --}}
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Comment</label>
                        <div class="col-sm-9">
                            <input type="text" name="comment" class="form-control" /> {{-- Ganti type="file" menjadi type="text" --}}
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection