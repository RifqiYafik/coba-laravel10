@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header text-center pt-3">
                    <h5>Foto Profil Siswa</h5>
                </div>
                <div class="card-body">
                    <img src="{{asset('image')}}/{{$siswa->image}}" class="img-fluid" width="230">
                </div>
            </div>
        </div>
        <div class="col-md-10">
          <div class="card">
            <div class="card-header pt-3">
                <h5>Data Siswa</h5>
            </div>


            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-2">Nama Siswa</dt>
                    <dd class="col-sm-9">: {{$siswa->nama_siswa}}</dd>

                    <dt class="col-sm-2">NISN</dt>
                    <dd class="col-sm-9">: {{$siswa->id_siswa}}</dd>

                    <dt class="col-sm-2">Tempat Lahir</dt>
                    <dd class="col-sm-9">: {{$siswa->tmpt_lahir}}</dd>

                    <dt class="col-sm-2">Tanggal Lahir</dt>
                    <dd class="col-sm-9">: {{$siswa->tgl_lahir}}</dd>

                    <dt class="col-sm-2">Jenis Kelamin</dt>
                    <dd class="col-sm-9">: {{$siswa->jenis_kelamin}}</dd>

                    <dt class="col-sm-2">Alamat Siswa</dt>
                    <dd class="col-sm-9">: {{$siswa->alamat}}</dd>

                    <dt class="col-sm-2">Asal Sekolah</dt>
                    <dd class="col-sm-9">: {{$siswa->asal_sekolah->nama_sekolah  ?? 'None'}}</dd>

                    <dt class="col-sm-2">No Telepon</dt>
                    <dd class="col-sm-9">: 0{{$siswa->no_hp}}</dd>
                </dl>
            </div>

          </div>
          <div class="form-group my-3">
                <a href="{{url('/')}}" class="btn btn-outline-secondary">Kembali</a>
              </div>
       </div>

    </div>
</div>
@endsection
