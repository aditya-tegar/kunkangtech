@extends('adminlte.layouts.app')

@section('title', 'Edit Order')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-6">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Edit Order</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('order.update', $order->id) }}" method="POST">
                    {{ method_field('PUT') }}
		    		@csrf
                    <div class="form-group row">
                        <label for="no_po" class="col-md-3 col-form-label text-md-right">{{ __('No PO') }}</label>

                        <div class="col-md-7">
                            <input id="no_po" type="text" name="no_po" class="form-control @error('no_po') is-invalid @enderror" name="no_po" value="{{ $order->no_po }}" required autocomplete="no_po" autofocus>

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
                            <input id="tanggal_masuk" type="text" name="tanggal_masuk" class="form-control @error('tanggal_masuk') is-invalid @enderror" name="tanggal_masuk" value="{{ $order->tanggal_masuk }}" required autocomplete="tanggal_masuk" autofocus>

                            @error('tanggal_masuk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="etd_date" class="col-md-3 col-form-label text-md-right">{{ __('Etd Date') }}</label>

                        <div class="col-md-7">
                            <input id="etd_date" type="text" name="etd_date" class="form-control @error('etd_date') is-invalid @enderror" name="etd_date" value="{{ $order->etd_date }}" required autocomplete="etd_date" autofocus>

                            @error('etd_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="qty_barang" class="col-md-3 col-form-label text-md-right">{{ __('Qty Barang') }}</label>

                        <div class="col-md-7">
                            <input id="qty_barang" type="number" name="qty_barang" class="form-control @error('qty_barang') is-invalid @enderror" name="qty_barang" value="{{ $order->qty_barang }}" required autocomplete="qty_barang" autofocus>

                            @error('qty_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

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

                            @error('unit_barang')
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