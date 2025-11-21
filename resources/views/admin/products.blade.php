@extends('admin.utama')

@section('content')
<div class="col-lg-12 grid-margin\">    
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Products</h4>
            {!! Form::open(array('url' => ('products.store'), 'method' => 'post', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) !!}
            <p class="card-description">
                input data
            </p>
            <div class="row">
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
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Brand</label>
                        <div class="col-sm-9">
                            <input type="text" name="brand" class="form-control" />
                            <option value="1">Indofood</option>
                            <option value="2">Wings</option>
                            <option value="3">Orang tua</option>
                            <option value="4">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Discount Status</label>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="discount_status" id="optionsRadios2" value="1" checked> 
                                    Yes
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="discount_status" id="discount_statNo" value="option2"> 
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Buy Price</label>
                        <div class="col-sm-9">
                            <input type="text" name="buy price" class="form-control" />
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
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Comment</label>
                        <div class="col-sm-9">
                            <input type="file" name="comment" class="form-control" />
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
