@extends('products.layout')

@section('contant')
<h2 style="text-align: center;">CRUD APPLICATION</h2>
<div class="container-index" style="background: #4fc3f7; margin-top: 50px; border-radius: 4px; padding:25px;">

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Crud Example</h2>
        </div>
        <div class="pull-right" style="float: right;  margin-top: -45px; margin-bottom: 15px">
            <a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>

@endif

<table class="table table-bordered">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->detail }}</td>
        <td>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-warning">Show</a>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>

            </form>
        </td>
    </tr>

    @endforeach

</table>
{{ $products->links() }}
</div>
@endsection
