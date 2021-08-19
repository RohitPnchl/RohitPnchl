@extends('layouts.main')

@section('content')
<section class="breadcrumb-area" style="background-image: url(images/login-bg.png);">
    <div class="container-fluid text-center">
        <h1>PRODUCTS</h1>
    </div>
</section>

<!--Start contact v1 area-->
<section class="contact-v2-area products-title">
    <div class="container">
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
            @forelse($products as $key => $product)
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="contact-info single-service-item">
                        @if (Session::has('user'))
                            <a href="{{ route('delete.image', ['id' => $product->id]) }}" class="text-danger"><i class="fa fa-trash"></i></a>
                        @endif
                        <div class="image-border img-holder" data-toggle="modal" data-target="#myModal">
                            <a href="#myGallery" data-slide-to="{{ $key }}">
                                <img src="{{ asset('storage'.$product->path) }}" class="product-image img-thumbnail">
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    No Products found
                </div>
            @endforelse
        </div>
    </div>
</section>
<!--End contact v1 area-->
@include('steel-works.image-view')
@endsection