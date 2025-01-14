@extends('layouts.main', ['title' => 'Kategori'])
@section('title-content')
    <i class="fas fa-list mr-2"></i> Kategori
@endsection

@section('content')
    @if (session('store') == 'success')
    <x-alert type="success">
        <strong>Berhasil Dibuat!</strong> Kategori berhasil dibuat.
    </x-alert>
@endif

@if (session ('update') == 'success')
    <x-alert type="success">
        <strong>Berhasil diupdate!</strong> Kategori berhasil dibuat.
    </x-alert>
@endif

@if (session('destroy') == 'success')
    <x-alert type="success">
        <strong>Berhasil dihapus!</strong> Kategori berhasil dihapus.
    </x-alert>
@endif

<div class="card caard-orange card-outline">
    <div class="card-header form-inline">
        <a href="{{route('kategori.create')}}" class="btn btn-primary">
            <i class="fas fa-plus mr-2"></i> Tambah
        </a>
        <form action="?" menthod="get" class="ml-auto">
            <div class="form-group">
                <input type="text" class="form-control" name="search" value="<?= request()->search ?>" placeholder="Nama Kategori">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoris as $key = $kategori)
                <tr>
                    <td>{{ $kategoris->fristItem() + $key}}</td>
                    <td>{{ $kategoris->nama_kategori}}</td>
                    <td class="text-right">
                        <a href="{{route('kategori.edit', ['kategori' => $kategori->id,])}}" class="btn btn-xs text-succes p-0 mr-1">
                            <i class="btn btn-xs tect-success p-0 mr-1"></i>
                        </a>
                    </td>
                </tr> 
            </tbody>
        </table>
    </div>
</div>