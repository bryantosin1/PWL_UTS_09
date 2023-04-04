@extends('layouts.content')

@section('title', 'Tambah Data Bayi')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Data Bayi
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('bayis.store') }}" enctype="multipart/form-data" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="no_urut">No Urut</label>
                            <input type="text" name="no_urut" class="form-control" id="no_urut" aria-describedby="no_urut">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" ariadescribedby="nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" ariadescribedby="alamat">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir (yyyy-mm-dd) </label>
                            <input type="text" name="tanggal_lahir" class="form-control" id="tanggal_lahir" ariadescribedby="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label for="bb_lahir">BB Lahir</label>
                            <input type="text" name="bb_lahir" class="form-control" id="bb_lahir" ariadescribedby="bb_lahir">
                        </div>
                        <div class="form-group">
                            <label for="tb_lahir">TB Lahir</label>
                            <input type="text" name="tb_lahir" class="form-control" id="tb_lahir" ariadescribedby="tb_lahir">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
