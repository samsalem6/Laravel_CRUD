@extends('products.layout')


@section('contant')
<h2 style="text-align: center;">CRUD APPLICATION</h2>

<div class="container-create" style="background-color: #4fc3f7; border-radius: 4px; margin-top: 50px; padding-right: 20px; padding-left: 20px; padding-top: 20px">

<div class="row">
    <div class="col-lg margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right" style="float: right; margin-top: -40px;">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>


 @if ($errors->any())

 <div class="alert alert-denger">
     <strong>Whoops!</strong> There were some proplems with your input. <br><br>
     <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>

         @endforeach
     </ul>
 </div>
 @endif

<form action="{{ route('products.store') }}" method="POST">
@csrf

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Detail:</strong>
            <textarea name="detail" class="form-control" style="height: 150px" placeholder="Detail"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary" style="margin-top: 15px; margin-bottom: 15px;">Submit</button>
    </div>


</div>



</form>
</div>

@endsection
