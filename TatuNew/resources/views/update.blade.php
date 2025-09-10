@extends('layout.utama')
@section('content')
<div class="login-form-bg h-50">
    <div class="container h-50">
        <div class="row justify-content-center h-100">
            <div class="col-xl-5">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center" href="#"><h4>Update Log Aktivitas</h4></a>
                            <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('kabid.update', ['id' => $log->id]) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-4">
                                    <label for="log_date" class="mb-2">Tanggal Log</label>
                                    <input type="hidden" id="log_date" class="form-control" name="log_date" value="{{ $log->log_date }}" required readonly>
                                    @error('log_date')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="name" class="mb-2">Nama</label>
                                    <input type="text" id="name" class="form-control" name="name" value="{{ $log->name }}" placeholder="Nama" required readonly>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="description" class="mb-2">Deskripsi</label>
                                    <textarea id="description" class="form-control" name="description" placeholder="Deskripsi aktivitas" required readonly>{{ $log->description }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="status" class="mb-2">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="pending" {{ $log->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="approved" {{ $log->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                        <option value="rejected" {{ $log->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                    </select>
                                    @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="note" class="mb-2">Catatan</label>
                                    <textarea id="note" class="form-control" name="note" placeholder="Catatan tambahan" required>{{ $log->note }}</textarea>
                                    @error('note')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn login-form__btn submit w-100">Update</button>
                            </form>
                        </div>
@endsection