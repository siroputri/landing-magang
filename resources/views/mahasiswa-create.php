<!DOCTYPE html>
<html>

<head>
    <title>Create Mahasiswa</title>
</head>

<body>
    <h1> Buat Baru Mahasiswa</h1>
    <form action="/mahasiswa/create" method="POST">
        <label for="nama">Nama</label>
        <br>
        <input type="text" id="nama" name="nama" value="" required />
        <br>
        <label for="nim">NIM</label>
        <br>
        <input type="text" id="nim" name="nim" value="" required />
        <br>
        <label for="angkatan">Angkatan</label>
        <br>
        <input type="text" id="angkatan" name="angkatan" value="" required />
        <br>
        <label for="domisili">Domisili</label>
        <br>
        <input type="text" id="domisili" name="domisili" value="" required />
        <br>
        <br>
        <input type="hidden" name="_token" value="<?= csrf_token() ?>" />
        <input type="submit" value="Submit" />
    </form>