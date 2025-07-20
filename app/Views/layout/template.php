<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'CRUD Mahasiswa' ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/crud.css') ?>">
</head>
<body>
    <!-- Tambahin header identitas di sini -->
    <div style="background-color:tomato;padding:16px;color:black;font-size:20px;font-weight:600;">
        Nama : Alif Naufal Adani / Teknik Informatika A / Praktikum WEB Programming A<br>
        NIM  : 32602300006
    </div>
    <header>
        <h2>CRUD Mahasiswa</h2>
    </header>
    <main>
        <?= $this->renderSection('content'); ?>
    </main>
</body>
</html>