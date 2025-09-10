@extends('layout.utama')
@section('content')
 <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10">
                        <a href="{{ route('staff.tambah') }}" class="btn btn-primary">Tambah Data</a>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daily Log</h4>
                                <div class="col-lg-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Log Activities</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Log Date</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Note</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
    @foreach ($logs as $log)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $log->log_date }}</td>
        <td>{{ $log->name }}</td>
        <td><span class="badge badge-primary px-2">{{ $log->status }}</span></td>
        <td>{{ $log->note }}</td>
        <td>{{ $log->description }}</td>
        <td>
            <!-- Tombol Hapus -->
            <a class="btn btn-danger" data-toggle="modal" data-target="#modalHapus{{ $log->id }}">
                <i class="fas fa-trash-alt"></i> Hapus
            </a>
            <!-- Modal Konfirmasi Hapus -->
            <div class="modal fade" id="modalHapus{{ $log->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel{{ $log->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modalLabel{{ $log->id }}">Konfirmasi Hapus Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah anda yakin menghapus data? <b>{{ $log->name }}</b> pada tanggal <b>{{ $log->log_date }}</b></p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <form action="{{ route('staff.delete', ['id'=> $log->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Aku yakin menghapus data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
    @endforeach
</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
@endsection