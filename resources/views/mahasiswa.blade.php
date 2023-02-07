<!DOCTYPE html>
<html>

<head>
    <title>mahasiswa</title>
</head>

<body>
    <div>
        <a href="/mahasiswa/create">Buat Data Baru</a>
        <div>
            <h1> Daftar Mahasiswa </h1>
            <!-- 
<h1>judul</h1>
<p>Halo mahasiswa</p>

<form action="/mahasiswa" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value=""><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value=""><br><br>
            <input type="submit" value="Submit">
        </form> -->
            <table class="thead-light">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Angkatan</th>
                        <th>Domisili</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mahasiswa as $row) : ?>
                        <tr>
                            <td><?= $row['nama'] ?></tr>
                            <td><?= $row['nim'] ?></td>
                            <td><?= $row['angkatan'] ?></td>
                            <td><?= $row['domisili'] ?></td>
                            <td><?= $row['aksi'] ?></td>
                            <td><a href="/mahasiswa/edit/<?= $row['id'] ?>">Edit</a>
                            <form action="/mahasiswa/delete/<?= $row['id'] ?>" method="POST">
                            <input type="hidden" name="_token" value="<?= csrf_token() ?>" />
                                <button type="submit">Delete</button>
                            </form>
                            </td>
                    </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
            <body>
                <html>