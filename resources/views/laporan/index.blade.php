@extends('adminlte.layouts.app')

@section('title', 'Laporan')

{{-- Custom CSS --}}
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush


@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Laporan</h3>
		    </div>
		    <div class="card-body">
		    	{{-- @include('partial.alert') --}}
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
		    				<th>Tanggal</th>
                            {{-- <th>ID Order</th> --}}
                            <th>Nama Customer</th>
		    				<th>No PO</th>
		    				<th>Tanggal Masuk</th>
                            <th>ETD Date</th>
							<th>Kode Barang</th>
							<th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Harga Barang</th>
							<th>Unit Barang</th>
							@if (Auth::user()->role_id == 1)
							<th>Opsi</th>
							@endif
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($order as $data)
		    			<tr>
		    				<td>{{ $data->created_at->toDateString() }}</td>
		    				{{-- <td>{{ $data->id }}</td> --}}
		    				<td>{{ $data->customer->nama_customer }}</td>
		    				<td>{{ $data->no_po }}</td>
		    				<td>{{ $data->tanggal_masuk }}</td>
                            <td>{{ $data->etd_date }}</td>
							<td>{{ $data->barang->kode_barang }}</td>
							<td>{{ $data->barang->nama_barang }}</td>
                            <td>{{ $data->qty_barang }}</td>
                            <td>{{ $data->barang->harga_barang }}</td>
                            <td>{{ $data->unit_barang }}</td>
		    				<td>
								<a class="btn btn-warning btn-sm" href="{{ route('order.edit', $data->id) }}" data-toggle="tooltip" title="Edit">
									<i class="fas fa-pencil-alt"></i>
								</a>
								<a class="btn btn-danger btn-sm" href="#"
									onclick="event.preventDefault();document.getElementById('delete-form').submit();">
									<i class="fas fa-trash"></i>
								</a>

								<form id="delete-form" action="{{ route('order.destroy', $data->id) }}" method="POST" style="display: none;">
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

<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>

<script>
    $(function () {
      $("#example1").DataTable({
      	dom: 'Bfrtip',
        buttons: [
             'excel', 'pdf', 'print'
        ],
        "columnDefs": [
            { "width": "10%", "targets": -1 }
        ],
      });
    });
</script>
@endpush