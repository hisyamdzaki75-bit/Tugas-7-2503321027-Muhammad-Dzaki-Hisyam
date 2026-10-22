@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-dark text-white fw-bold">Tambah Unit Porsche</div>
            <div class="card-body">
                <form action="{{ route('porsche.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Model</label>
                        <input type="text" name="nama_model" class="form-control bg-dark text-white border-secondary" placeholder="Contoh: Porsche 911 GT3 RS" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="kategori" class="form-select bg-dark text-white border-secondary" required>
                            <option value="Coupe">Coupe / Sports</option>
                            <option value="SUV">SUV (Macan / Cayenne)</option>
                            <option value="Electric">Electric (Taycan)</option>
                            <option value="Sedan">Sedan (Panamera)</option>
                        </select>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Harga (IDR)</label>
                            <input type="number" name="harga" class="form-control bg-dark text-white border-secondary" placeholder="4500000000" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Stok</label>
                            <input type="number" name="stok" class="form-control bg-dark text-white border-secondary" placeholder="2" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">URL Gambar (Opsional)</label>
                        <input type="url" name="gambar" class="form-control bg-dark text-white border-secondary" placeholder="https://...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Singkat</label>
                        <textarea name="deskripsi" class="form-control bg-dark text-white border-secondary" rows="3"></textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('porsche.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-danger">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection