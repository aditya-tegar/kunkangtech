@extends('adminlte.layouts.app')

@section('title', 'Edit Data Pelanggan')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-6">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Edit Data Pelanggan</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('customer.update', $customer->id) }}" method="POST">
                    {{ method_field('PUT') }}
		    		@csrf
                    <div class="form-group row">
                        <label for="nama_customer" class="col-md-3 col-form-label text-md-right">{{ __('Nama Pelanggan') }}</label>

                        <div class="col-md-7">
                            <input id="name" type="text" name="nama_customer" class="form-control @error('nama_customer') is-invalid @enderror" name="nama_customer" value="{{ $customer->nama_customer }}" required autocomplete="nama_customer" autofocus>

                            @error('nama_customer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_telepon" class="col-md-3 col-form-label text-md-right">{{ __('Nomor Telepon') }}</label>

                        <div class="col-md-7">
                            <input id="no_telepon" type="number" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ $customer->no_telepon }}" required autocomplete="no_telepon" autofocus>

                            @error('no_telepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-md-3 col-form-label text-md-right">{{ __('Alamat') }}</label>

                        <div class="col-md-7">
                            <input id="alamat" type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $customer->alamat }}" required autocomplete="alamat" autofocus>

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Email') }}</label>

                        <div class="col-md-7">
                            <input id="email" type="text" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $customer->email }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Ubah') }}
                            </button>
                        </div>
                    </div>
		    	</form>
		    </div>
		</div>
	</div>
</div>
@endsection
@push('js')
@endpush