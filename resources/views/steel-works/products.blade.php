@extends('layouts.main')

@section('content')
<!--Start contact v1 area-->
<section class="contact-v2-area products-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2><strong>PRODUCTS</strong></h2>
            </div>
        </div><br>
        @if (Session::has('user'))
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="{{ route('save.image') }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="col-lg-2">
                            <label class="control-label">Upload photo</label>
                        </div>
                        <div class="col-lg-5">
                            <input type="file" name="product" class="form-control" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" name="button" class="btn btn-success ">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><br>
        @endif
        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="contact-info">
                        <div class="image-border">
                            <a href="javascript:void(0)"><img src="{{ asset('storage'.$product->path) }}" class="product-image"></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--End contact v1 area-->
@endsection