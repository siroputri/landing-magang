@extends('layout.layout')
@section('title', 'homepage')
@section('content')
<body>
    <h1> Buat Baru Dosen</h1>
    <form action="/dosen/create" method="POST">
        <label for="nama">Nama</label>
        <br>
        <input type="text" id="nama" name="nama" value="" required />
        <br>
        <label for="matkul">Matkul</label>
        <br>
        <input type="text" id="matkul" name="matkul" value="" required />
        <br>
        <label for="nim">NIM</label>
        <br>
        <input type="text" id="nim" name="nim" value="" required />
        <br>
        <label for="Kampus">Kampus</label>
        <br>
        <input type="text" id="kampus" name="kampus" value="" required />
        <br>
        <br>
        <input type="hidden" name="_token" value="<?= csrf_token() ?>" />
        <input type="submit" value="Submit" />
    </form>
@endsection