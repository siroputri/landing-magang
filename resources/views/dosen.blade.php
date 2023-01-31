@extends('layout.layout')

@section('title', 'homepage')

@section('content')
<div>
    <a href="/dosen/create" class="badge badge-primary">Buat Data Baru</a>
    <div>
        <h1> Daftar Dosen </h1>
        <!-- 
<h1>judul</h1>
<p>Halo mahasiswa</p>

<!-- <form action="/dosen" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value=""><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value=""><br><br>
            <input type="submit" value="Submit">
        </form> -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Matkul</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Kampus</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dosen as $row) : ?>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['matkul'] ?></td>
                    <td><?= $row['nim'] ?></td>
                    <td><?= $row['kampus'] ?></td>
                    <td><a href="/dosen/edit/<?= $row['id'] ?>">Edit</a>
                        <form action="/dosen/delete/<?= $row['id'] ?>" method="POST">
                            <input type="hidden" name="_token" value="<?= csrf_token() ?>" />
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        @endsection