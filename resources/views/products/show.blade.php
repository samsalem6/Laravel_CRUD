@extends('products.layout')


@section('contant')

{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Product</h2>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $product->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {{ $product->detail }}
        </div>
    </div>
    <div class="pull-right">
        <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
    </div>
</div> --}}


<div class="card">
    <div class="card-header">
        Show Product
    </div>
    <div class="card-body">
      <h5 class="card-title"> <strong>Name:</strong> {{ $product->name }} </h5>
      <p class="card-text"><strong>Details:</strong> {{ $product->detail }}</p>
      <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
    </div>
  </div>
@endsection
