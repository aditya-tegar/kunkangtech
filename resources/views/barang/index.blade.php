@extends('adminlte.layouts.app')

@section('title', 'Daftar Barang')

{{-- Custom CSS --}}
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Daftar Barang</h3>
		    </div>
		    <div class="card-body">
		    	{{-- @include('partial.alert') --}}
		    	<p>
		    		<a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Data Barang</a>
		    	</p>
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
		    				<th>Tanggal</th>
                            {{-- <th>ID Barang</th> --}}
                            <th>Kode Barang</th>
		    				<th>Nama Barang</th>
		    				<th>Jenis Barang</th>
		    				<th>Harga Barang</th>
		    				<th>Opsi</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($barang as $data)
		    			<tr>
		    				<td>{{ $data->created_at->toDateString() }}</td>
		    				{{-- <td>{{ $data->id }}</td> --}}
		    				<td>{{ $data->kode_barang }}</td>
		    				<td>{{ $data->nama_barang }}</td>
		    				<td>{{ $data->jenis_barang }}</td>
		    				<td>{{ $data->harga_barang }}</td>
		    				<td>
								<a class="btn btn-warning btn-sm" href="{{ route('barang.edit', $data->id) }}" data-toggle="tooltip" title="Edit">
									<i class="fas fa-pencil-alt"></i>
								</a>
								<a class="btn btn-danger btn-sm" href="#"
									onclick="event.preventDefault();document.getElementById('delete-form').submit();">
									<i class="fas fa-trash"></i>
								</a>

								<form id="delete-form" action="{{ route('barang.destroy', $data->id) }}" method="POST" style="display: none;">
									@csrf
									@method('DELETE')
								</form>
							</td>
		    			</tr>
		    			@endforeach
		    		</tbody>
		    	</table>
		    </div>
		</div>
	</div>
</div>
@endsection
@push('js')
<!-- DataTables -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "columnDefs": [
            { "width": "10%", "targets": -1 }
        ]
      });
    });
</script>
@endpush