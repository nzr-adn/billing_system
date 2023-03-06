@extends('layouts.applayout')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('Product Type List') }}</div>

        <div class="card-body">
            @can('product_type_create')
                <a href="{{ route('pages.product_types.create') }}" class="btn btn-primary">Add New Product Type</a>
            @endcan

            <br/><br/>


            <table class="table table-borderless table-hover">
                <tr class="bg-info text-light">
                    <th class="text-center">ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
                @forelse ($product_types as $product_type)
                    <tr>
                        <td class="text-center">{{$product_type->id}}</td>
                        <td>{{$product_type->code}}</td>
                        <td>{{$product_type->name}}</td>
                        <td>
                            @can('product_type_show')
                                <a href="{{ route('pages.product_types.show', $product_type->id) }}"
                                   class="btn btn-sm btn-success">Show</a>
                            @endcan
                            @can('product_type_edit')
                                <a href="{{ route('pages.product_types.edit', $product_type->id) }}"
                                   class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                            @can('product_type_delete')
                                <form action="{{ route('pages.product_types.destroy', $product_type->id) }}"
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
                        <td colspan="100%" class="text-center text-muted py-3">No Product Type Found</td>
                    </tr>
                @endforelse
            </table>


            @if($product_types->total() > $product_types->perPage())
                <br><br>
                {{$product_types->links()}}
            @endif

        </div>
    </div>

@endsection
