@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a product</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('products.update', $product->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">First Name:</label>
                <input type="text" class="form-control" name="name" value={{ $product->name }} />
            </div>

            <div class="form-group">
                <label for="sku">Last Name:</label>
                <input type="text" class="form-control" name="sku" value={{ $product->sku }} />
            </div>

            <div class="form-group">
                <label for="descripcion">Email:</label>
                <input type="text" class="form-control" name="descripcion" value={{ $product->descripcion }} />
            </div>
           
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection