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
                    <div class="col-12">
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
        <a href="{{ route('kabid.edit', ['id' => $log->id]) }}" class="btn btn-primary">
    <i class="fas fa-pen"></i>Update Status
</a>
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