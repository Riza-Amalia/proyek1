@extends('layout.master')

@section('header')
    @parent
@endsection

@section('content')

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="{{ url('css/util.css') }}">
    
	<link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">

	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
                    
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Nama Obat</th>
									<th class="cell100 column1">Harga</th>
									<th class="cell100 column1">Action</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
							@foreach($obat as $obt)
								<tr class="row100 body">
									<td class="cell100 column1">{{ $obt->nama }}</td>
									<td class="cell100 column1">{{ $obt->harga }}</td>
									<td class="cell100 column1">
									<a href="{{ route('obat.edit', $obt->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a> &emsp;
									<form action="{{ route('obat.destroy', $obt->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</a>
                                    </form>
                                    </td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
                
			</div>
            <a class="btn btn-success column5" href="{{ route('kesehatan.index') }}">Kembali</a> &emsp;
            <a class="btn btn-success column5" href="{{ route('obat.create') }}">Input Data</a>
		</div>
	</div>
@endsection
