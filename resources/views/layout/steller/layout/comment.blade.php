@extends('layout.layout')

@section('title', 'homepage')

@section('content')
    <div>
            <h1> Tabel Pesan </h1>
    </div>    
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($comment as $row) :?>
                        <tr>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['pesan'] ?></td>
                            <td><?= $row['aksi'] ?></td>
                            <td>
                            <button type="submit" class="btn btn-secondary">Delete</button>
                                <form action="/comment/delete/ <?= $row['id'] ?>" method="POST">
                            <input type="hidden" name="_token" value="<?= csrf_token() ?>" />
                            </form>
                        </td>
                    </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
            <body>
                @endsection