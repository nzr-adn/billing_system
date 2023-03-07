@extends('layouts.applayout')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('View Product Type') }}</div>

        <div class="card-body">

            <a href="{{ route('pages.product_types.index') }}" class="btn btn-light">Back to List</a>

            <br/><br/>


            <table class="table table-borderless">

                <tr>
                    <th>ID</th>
                    <td>{{ $product_type->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $product_type->name }}</td>
                </tr>

            </table>


        </div>
    </div>

@endsection
