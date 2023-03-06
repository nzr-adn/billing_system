@extends('layouts.applayout')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('Product List') }}</div>

        <div class="card-body">
            @can('product_create')
                <a href="{{ route('pages.products.create') }}" class="btn btn-primary">Add New Product</a>
            @endcan

            <br/><br/>


            <table class="table table-borderless table-hover">
                <tr class="bg-info text-light">
                    <th class="text-center">ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Speed</th>
                    <th>Product Type</th>
                    <th>Price</th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
                @forelse ($products as $product)
                    <tr>
                        <td class="text-center">{{$product->id}}</td>
                        <td>{{$product->code}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->speed}} MBPS</td>
                        <td>{{$product->product_type->name ?? ""}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            @can('product_show')
                                <a href="{{ route('pages.products.show', $product->id) }}"
                                   class="btn btn-sm btn-success">Show</a>
                            @endcan
                            @can('product_edit')
                                <a href="{{ route('pages.products.edit', $product->id) }}"
                                   class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                            @can('product_delete')
                                <form action="{{ route('pages.products.destroy', $product->id) }}"
                                      class="d-inline-block" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                            class="btn btn-sm btn-danger">Delete
                                    </button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100%" class="text-center text-muted py-3">No Product Found</td>
                    </tr>
                @endforelse
            </table>


            @if($products->total() > $products->perPage())
                <br><br>
                {{$products->links()}}
            @endif

        </div>
    </div>

@endsection
