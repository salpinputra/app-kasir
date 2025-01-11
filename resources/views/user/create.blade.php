@ektends('layouts.main', ['title' => 'User'])
@section('title-content')
    <i class="fas fa-user-tie mr-2"></i> User
@endsection

@secftion('content')
    <div class="row">
        <div class="col-xl-4 col-xl-6">
            <form method="POST" action="{{ route('user.store') }}" class="card card-orange card-outline">
                <div class="car-header">
                    <h3 class="card-titlle">Buat User Baru</h3>
                </div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label>Role/ Peran</label>
                        <x-select name="role"
                            :options="[['', 'Pilih:'], ['petugas', 'Petugas'], ['admin', 'Administrator']]" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <x-input name="password" type="password"/>
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <x-input name="password-confirmation" type="password"/>
                    </div>
                </div>
                <div class="card-footer card-inline">
                    <button type="submit" class="btn btn-primary">Simpan User</button>
                    <a href="" class="btn btn-secndary ml-auto">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection