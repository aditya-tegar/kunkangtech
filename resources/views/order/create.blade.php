@extends('adminlte.layouts.app')

@section('title', 'Create Order')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-8">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Create Order</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('order.store') }}" method="POST">
		    		@csrf
                    <div class="form-group row">
                        <label for="nama_customer" class="col-md-3 col-form-label text-md-right">{{ __('Nama Customer') }}</label>

                        <div class="col-md-7">
                            <select class="form-control selec2bs4 @error('nama_customer') is-invalid @enderror"
                                style="width: 100%" name="customer" required>
                                <option disabled selected>Pilih</option>
                                @foreach ($customer as $data)
                                    <option value="{{ $data->id }}">
                                        {{$data->nama_customer}}
                                    </option>         
                                @endforeach
                            </select>

                            @error('nama_customer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_po" class="col-md-3 col-form-label text-md-right">{{ __('No PO') }}</label>
                        <div class="col-md-7">
                            <input id="no_po" type="text" name="no_po" class="form-control @error('no_po') is-invalid @enderror" name="no_po" value="{{ old('no_po') }}" required autocomplete="no_po" autofocus>

                            @error('no_po')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggal_masuk" class="col-md-3 col-form-label text-md-right">{{ __('Tanggal Masuk') }}</label>

                        <div class="col-md-7">
                            <input id="tanggal_masuk" type="date" name="tanggal_masuk" class="form-control @error('tanggal_masuk') is-invalid @enderror" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}" required autocomplete="tanggal_masuk" autofocus>

                            @error('tanggal_masuk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="etd_date" class="col-md-3 col-form-label text-md-right">{{ __('ETD Date') }}</label>

                        <div class="col-md-7">
                            <input id="etd_date" type="date" name="etd_date" class="form-control @error('etd_date') is-invalid @enderror" name="etd_date" value="{{ old('etd_date') }}" required autocomplete="etd_date" autofocus>

                            @error('etd_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="barang" class="col-md-3 col-form-label text-md-right">{{ __('Barang') }}</label>

                        <div class="col-md-7">
                            <select class="form-control selec2bs4 @error('barang') is-invalid @enderror"
                                style="width: 100%" name="barang" required>
                                <option disabled selected>Pilih</option>
                                @foreach ($barang as $data)
                                    <option value="{{ $data->id }}">
                                        {{$data->kode_barang . " - " . $data->nama_barang}}
                                    </option>         
                                @endforeach
                            </select>

                            @error('barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="qty_barang" class="col-md-3 col-form-label text-md-right">{{ __('Qty Barang') }}</label>

                        <div class="col-md-7">
                            <input id="qty_barang" type="number" name="qty_barang" class="form-control @error('qty_barang') is-invalid @enderror" name="qty_barang" value="{{ old('qty_barang') }}" required autocomplete="qty_barang" autofocus>

                            @error('qty_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- <div class="form-group row">
                        <label for="harga_barang" class="col-md-3 col-form-label text-md-right">{{ __('Harga Barang') }}</label>

                        <div class="col-md-7">
                            <input id="harga_barang" type="text" class="form-control" name="harga_barang" value="{{ old('harga_barang') }}" required autocomplete="harga_barang" autofocus>

                            @error('harga_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}

                    <div class="form-group row">
                        <label for="unit_barang" class="col-md-3 col-form-label text-md-right">{{ __('Unit Barang') }}</label>
                        <div class="col-md-7">
                            <select class="form-control selec2bs4" name="unit_barang" id="unit_barang">
                                <option value="Pilih">Pilih</option>
                                <option value="Kg">Kg</option>
                                <option value="Pcs">Pcs</option>
                                <option value="Prs">Prs</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Save') }}
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
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.select2bs4').select2({
            theme: 'bootstrap4',
            
        });

        bsCustomFileInput.init();
    });
</script>
@endpush

