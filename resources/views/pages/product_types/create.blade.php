@extends('layouts.applayout')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('Add New Product Type') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('pages.product_types.store') }}">
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
