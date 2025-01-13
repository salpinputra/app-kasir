@extends('layouts.main', ['title'=> 'Pelanggan'])
@section('title-content')
    <i class="fas fa-user mr-2"></i> Pelanggan
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <form method="POST" action="{{route('pelanggan.update',['pelanggan'=> $pelanggan->id,])}}" class="card card-orange card-outline">
                <div class="card-header">
                    <h3 class="card-title">Ubah Pelanggan</h3>
                </div>
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="from-group">
                        <label>Nama Lengkap</label>
                        <x-input name="nama" type="text" :value="$pelanggan->nama" />
                    </div>
                    <div class="from-group">
                        <label>Alamat</label>
                        <x-textarea name="alamat" :value="$pelanggan->alamat" />
                    </div>
                    <div class="from-group">
                        <label>Nomor Telepon/HP</label>
                        <x-input name="nomor_tlp" type="text" :value="$pelanggan->nomor_tlp" />
                    </div>
                </div>
                <div class="card-footer form-inline">
                    <button type="submit"  class="btn btn-primary">Update Pelanggan</button>
                    <a href="{{route('pelanggan.index')}}" class="btn btn-secondary ml-auto">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection