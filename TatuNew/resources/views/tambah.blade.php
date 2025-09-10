@extends('layout.utama')
@section('content')
<div class="login-form-bg h-50">
        <div class="container h-50">
            <div class="row justify-content-center h-100">
                <div class="col-xl-5">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="#"> <h4>Silahkan Login</h4></a>
    <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('staff.store') }}">
    @csrf
    <div class="form-group mb-4">
        <label for="log_date" class="mb-2">Tanggal Log</label>
        <input type="date" id="log_date" class="form-control" name="log_date" required>
    @error('log_date')
        <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    <div class="form-group mb-4">
        <label for="name" class="mb-2">Nama</label>
        <input type="text" id="name" class="form-control" name="name" placeholder="Nama" required>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group mb-4">
    <label for="description" class="mb-2">Deskripsi</label>
    <textarea id="description" class="form-control" name="description" placeholder="Deskripsi aktivitas" required></textarea>
        @error('description')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group mb-4">
    <label for="status" class="mb-2">Status</label>
    <select class="form-control" id="status" name="status" required>
    <option value="pending">Pending</option>
    <option value="approved" disabled>Approved</option>
    <option value="rejected" disabled>Rejected</option>
    </select>
    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    <div class="form-group mb-4">
    <label for="note" class="mb-2">Catatan</label>
    <textarea id="note" class="form-control" name="note" placeholder="Catatan tambahan"></textarea>
        @error('note')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn login-form__btn submit w-100">Tambah</button>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection