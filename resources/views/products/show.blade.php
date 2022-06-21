@extends('products.layout')

@section('content')
<div class="container-fliud">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="wrapper row">
        <div class="preview col-md-6">
            <div class="preview-pic tab-content">
                <div class="tab-pane active" id="pic-1"><img src="/images/{{ $product->image }}" width="500px"></div>
            </div>
        </div>
        <div class="details col-md-6">
            <hr>
            <h3 class="product-title">{{ $product->name }}</h3>
            <div class="rating">
                <div class="stars">
                    <span class='bi bi-star checked' style='color: #f3da35'></span>
                    <span class='bi bi-star' style='color: #f3da35'></span>
                    <span class='bi bi-star' style='color: #f3da35'></span>
                    <span class='bi bi-star' style='color: #f3da35'></span>
                    <span class='bi bi-star' style='color: #f3da35'></span>
                </div>
            </div>
            <p class="product-description">{{ $product->detail }}</p>
            <h4 class="price">Price: <span>${{ $product->price }}</span></h4>
            <h5 class="sizes">Sizes: {{ $product->size }}</h5>
            <h5 class="gender">Gender: {{ $product->gender }}</h5>
            <h5 class="gender">Created at: {{ $product->created_at }}</h5>
            <h5 class="gender">Updated at: {{ $product->updated_at }}</h5>
            <hr>
        </div>
    </div>
</div>
@endsection