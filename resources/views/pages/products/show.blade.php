@extends('layouts.applayout')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('View Product') }}</div>

        <div class="card-body">

            <a href="{{ route('pages.products.index') }}" class="btn btn-light">Back to List</a>

            <br/><br/>


            <table class="table table-borderless">

                <tr>
                    <th>ID</th>
                    <td>{{ $product->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <th>Speed</th>
                    <td>{{ $product->speed }} MPBS</td>
                </tr>
                <tr>
                    <th>Product Type</th>
                    <td>{{ $product->product_type->name }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{ $product->price }}</td>
                </tr>

            </table>


        </div>
    </div>

@endsection
