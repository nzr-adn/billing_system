@extends('layouts.applayout')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('Add New Product') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('pages.products.store') }}">
                @csrf

                <div class="form-group row">
                    <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Code') }}</label>

                    <div class="col-md-6">
                        <input id="code" type="text" class="form-control @error('code') is-invalid @enderror"
                               name="code" value="{{ old('code') }}" autocomplete="code">

                        @error('code')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="required col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required autocomplete="name">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="speed" class="col-md-4 col-form-label text-md-right">{{ __('Speed') }}</label>

                    <div class="col-md-6">
                        <input id="speed" type="text" class="form-control @error('speed') is-invalid @enderror"
                               name="speed" value="{{ old('speed') }}" autocomplete="speed">

                        @error('speed')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="product_type" class="col-md-4 col-form-label text-md-right">{{ __('Product Type') }}</label>

                    <div class="col-md-6">
                        <select id="product_type_id" type="text" class="form-control @error('product_type_id') is-invalid @enderror" name="product_type_id" required autocomplete="product_type_id" autofocus>
                            <option value=""  selected hidden>Please Select</option>

                            @foreach ($product_types as $product_type)
                                <option value="{{$product_type->id}}" {{ (old('product_type_id', '') == $product_type->id ) ? 'selected' : '' }}>{{$product_type->name}}</option>
                            @endforeach
                        </select>

                        @error('product_type')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                    <div class="col-md-6">
                        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror"
                               name="price" value="{{ old('price') }}" autocomplete="price">

                        @error('price')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Create') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
