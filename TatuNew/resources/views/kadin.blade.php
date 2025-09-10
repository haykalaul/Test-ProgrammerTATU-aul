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
                <!-- Visualisasi Daily Log -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title">Visualisasi Daily Log</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="logChart" height="100"></canvas>
                    </div>
                </div>
                <!-- Tabel Staff dan Log -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Staff & Log Aktivitas</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Staff</th>
                                        <th>Tanggal Log</th>
                                        <th>Status</th>
                                        <th>Deskripsi</th>
                                        <th>Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($logs as $log)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $log->name }}</td>
                                        <td>{{ $log->log_date }}</td>
                                        <td>
                                            <span class="badge badge-{{ $log->status == 'approved' ? 'success' : ($log->status == 'rejected' ? 'danger' : 'warning') }}">
                                                {{ ucfirst($log->status) }}
                                            </span>
                                        </td>
                                        <td>{{ $log->description }}</td>
                                        <td>{{ $log->note }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Tabel -->
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Data untuk chart (ambil dari backend jika perlu)
    const logData = @json($logs->groupBy('status')->map->count());
    const ctx = document.getElementById('logChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: Object.keys(logData),
            datasets: [{
                label: 'Jumlah Log',
                data: Object.values(logData),
                backgroundColor: [
                    'rgba(255, 206, 86, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(255, 99, 132, 0.7)'
                ],
                borderColor: [
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
@endsection