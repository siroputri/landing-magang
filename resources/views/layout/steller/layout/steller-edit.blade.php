<!DOCTYPE html>
<html>

<head>
    <title>daftar pesan</title>
</head>

<body>
    <div>
            <h1> Daftar Mahasiswa </h1>
            <table class="thead-light">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($steller as $row) : ?>
                        <tr>
                            <td><?= $row['nama'] ?></tr>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['pesan'] ?></td>
                            <td><?= $row['aksi'] ?></td>
                            <form action="/comment/delete/<?= $row['id'] ?>" method="POST">
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