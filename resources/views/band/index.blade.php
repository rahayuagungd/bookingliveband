@extends('layouts.app')
@section('title', 'band')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Band</h1>
<p class="mb-4">Berikut adalah data Band Indramayu</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('band.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Band</th>
                        <th>Genre</th>
                        <th>Email</th>
                        <th>No Telp</th>
                        <th>Ac\tion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($band as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->band }}</td>
                            <td>{{ $row->genre }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->no_telp }}</td>
                            <td>
                                <a href="{{ route('band.edit') }}"class=btn btn-warning btn-sm><i class="fas fa-edit"></i>edit</a>
                            </td>
                        </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection