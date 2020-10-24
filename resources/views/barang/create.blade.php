@extends('adminlte.layouts.app')

@section('title', 'Buat Data Barang')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-10">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Buat Data Barang</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('barang.store') }}" method="POST">
		    		@csrf
                    <div class="form-group row">
                        <label for="kode_barang" class="col-md-3 col-form-label text-md-right">{{ __('Kode Barang') }}</label>

                        <div class="col-md-7">
                            <input id="kode_barang" name="kode_barang" type="text" class="form-control @error('kode_barang') is-invalid @enderror" name="kode_barang" value="{{ old('kode_barang') }}" required autocomplete="kode_barang" autofocus>

                            @error('kode_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_barang" class="col-md-3 col-form-label text-md-right">{{ __('Nama Barang') }}</label>

                        <div class="col-md-7">
                            <input id="nama_barang" type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang') }}" required autocomplete="nama_barang" autofocus>

                            @error('nama_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jenis_barang" class="col-md-3 col-form-label text-md-right">{{ __('Jenis Barang') }}</label>

                        <div class="col-md-7">
                            <input id="jenis_barang" type="text" name="jenis_barang" class="form-control @error('jenis_barang') is-invalid @enderror" name="jenis_barang" value="{{ old('jenis_barang') }}" required autocomplete="jenis_barang" autofocus>

                            @error('jenis_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <label for="harga_barang"  class="col-md-3 col-form-label text-md-right">{{ __('Harga Barang') }}</label>

                        <div class="col-md-7">
                            <input id="harga_barang" type="number" name="harga_barang" class="form-control @error('harga_barang') is-invalid @enderror" name="harga_barang" value="{{ old('harga_barang') }}" required autocomplete="harga_barang" autofocus>

                            @error('harga_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="keterangan"  class="col-md-3 col-form-label text-md-right">{{ __('Keterangan') }}</label>

                        <div class="col-md-7">
                            <input id="keterangan" type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autocomplete="keterangan" autofocus>

                            @error('keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Simpan') }}
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