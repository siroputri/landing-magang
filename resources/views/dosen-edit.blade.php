<!DOCTYPE html>
<html>

<head>
    <title>Edit Mahasiswa</title>
</head>

<body>
    <div> 
        <a href="/dosen">Kembali</a>
    </div>
    <h1>Ubah Data Dosen</h1>
    <form action="/dosen/edit/<?= $dosen['id'] ?>" method="POST">
        <label for="nama">Nama</label>
        <br>
        <input type="text" id="nama" name="nama" value="<?= $dosen['nama'] ?>" required />
        <br>
        <label for="matkul">Matkul</label>
        <br>
        <input type="text" id="matkul" name="matkul" value="<?= $dosen['matkul'] ?>" required />
        <br>
        <label for="nim">NIM</label>
        <br>
        <input type="text" id="nim" name="nim" value="<?= $dosen['nim'] ?>" required />
        <br>
        <label for="kampus">Kampus</label>
        <br>
        <input type="text" id="kampus" name="kampus" value="<?= $dosen['dosen'] ?>" required />
        <br>
        <br>
        <input type="hidden" name="_token" value="<?= csrf_token() ?>" />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>