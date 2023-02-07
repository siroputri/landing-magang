<!DOCTYPE html>
<html>

<head>
    <title>Pesan</title>
</head>

<body>
    <div>
            <h1> Tabel Pesan </h1>
    </div>    
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
                    <?php foreach ($comment as $row) : ?>
                        <tr>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['pesan'] ?></td>
                            <td><?= $row['aksi'] ?></td>
                            <td>
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