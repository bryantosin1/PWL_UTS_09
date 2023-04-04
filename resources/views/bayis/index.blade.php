@extends('layouts.content')

@section('title', 'Data Bayi')

@section('content')
<div class="content-wrapper">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DATA POSYANDU BAYI</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('bayis.create') }}"> Input Data Bayi</a>
            </div>
            <form method="get" action="{{ route('bayis.index') }}" class="col-7 d-flex justify-content-start">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" value="{{ request('search') }}" id="search" placeholder="Keyword Pencarian" aria-label="Keyword Pencarian" aria-describedby="button">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="button"> Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No Urut</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>BB Lahir</th>
            <th>TB Lahir</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bayis as $bayi)
        <tr>
            <td>{{ $bayi->no_urut }}</td>
            <td>{{ $bayi->nama }}</td>
            <td>{{ $bayi->alamat }}</td>
            <td>{{ $bayi->tanggal_lahir }}</td>
            <td>{{ $bayi->bb_lahir }}</td>
            <td>{{ $bayi->tb_lahir }}</td>
            <td>
                <form action="{{ route('bayis.destroy', $bayi->no_urut) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('bayis.show', $bayi->no_urut) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('bayis.edit', $bayi->no_urut) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $bayis->links() }}
</div>

@endsection
