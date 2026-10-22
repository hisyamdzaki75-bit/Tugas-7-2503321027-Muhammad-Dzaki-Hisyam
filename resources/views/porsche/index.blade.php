@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="bi bi-speedometer2 text-danger"></i> Daftar Stok Mobil Porsche</h2>
    <a href="{{ route('porsche.create') }}" class="btn btn-danger"><i class="bi bi-plus-lg"></i> Tambah Mobil</a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-dark table-hover mb-0 align-middle">
                <thead>
                    <tr>
                        <th class="ps-3">Gambar</th>
                        <th>Model</th>
                        <th>Kategori</th>
                        <th>Harga (IDR)</th>
                        <th>Stok</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($cars as $car)
                    <tr>
                        <td class="ps-3">
                            <img src="{{ $car->gambar ?? 'https://via.placeholder.com/100x60?text=Porsche' }}" alt="{{ $car->nama_model }}" width="90" class="rounded">
                        </td>
                        <td class="fw-bold">{{ $car->nama_model }}</td>
                        <td><span class="badge bg-secondary">{{ $car->kategori }}</span></td>
                        <td class="text-warning">Rp {{ number_format($car->harga, 0, ',', '.') }}</td>
                        <td>{{ $car->stok }} Unit</td>
                        <td class="text-center">
                            <form action="{{ route('porsche.destroy', $car->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus mobil ini?')">
                                <a href="{{ route('porsche.edit', $car->id) }}" class="btn btn-sm btn-outline-warning me-1">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-muted">Belum ada data mobil Porsche. Klik tombol Tambah Mobil di atas.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection