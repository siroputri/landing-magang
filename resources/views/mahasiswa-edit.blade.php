<!DOCTYPE html>
<html>

<head>
    <title>Edit Mahasiswa</title>
</head>

<body>
    <div> 
        <a href="/mahasiswa">Kembali</a>
    </div>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="/mahasiswa/edit/<?= $mahasiswa['id'] ?>" method="POST">
        <label for="nama">Nama</label>
        <br>
        <input type="text" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>" required />
        <br>
        <label for="nim">NIM</label>
        <br>
        <input type="text" id="nim" name="nim" value="<?= $mahasiswa['nim'] ?>" required />
        <br>
        <label for="angkatan">Angkatan</label>
        <br>
        <input type="text" id="angkatan" name="angkatan" value="<?= $mahasiswa['angkatan'] ?>" required />
        <br>
        <label for="domisili">Domisili</label>
        <br>
        <input type="text" id="domisili" name="domisili" value="<?= $mahasiswa['domisili'] ?>" required />
        <br>
        <br>
        <input type="hidden" name="_token" value="<?= csrf_token() ?>" />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>