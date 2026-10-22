@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-dark text-white fw-bold">Edit Unit Porsche</div>
            <div class="card-body">
                <form action="{{ route('porsche.update', $porsche->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Nama Model</label>
                        <input type="text" name="nama_model" value="{{ $porsche->nama_model }}" class="form-control bg-dark text-white border-secondary" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="kategori" class="form-select bg-dark text-white border-secondary" required>
                            <option value="Coupe" {{ $porsche->kategori == 'Coupe' ? 'selected' : '' }}>Coupe / Sports</option>
                            <option value="SUV" {{ $porsche->kategori == 'SUV' ? 'selected' : '' }}>SUV (Macan / Cayenne)</option>
                            <option value="Electric" {{ $porsche->kategori == 'Electric' ? 'selected' : '' }}>Electric (Taycan)</option>
                            <option value="Sedan" {{ $porsche->kategori == 'Sedan' ? 'selected' : '' }}>Sedan (Panamera)</option>
                        </select>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Harga (IDR)</label>
                            <input type="number" name="harga" value="{{ $porsche->harga }}" class="form-control bg-dark text-white border-secondary" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Stok</label>
                            <input type="number" name="stok" value="{{ $porsche->stok }}" class="form-control bg-dark text-white border-secondary" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">URL Gambar</label>
                        <input type="url" name="gambar" value="{{ $porsche->gambar }}" class="form-control bg-dark text-white border-secondary">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Singkat</label>
                        <textarea name="deskripsi" class="form-control bg-dark text-white border-secondary" rows="3">{{ $porsche->deskripsi }}</textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('porsche.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-warning">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection