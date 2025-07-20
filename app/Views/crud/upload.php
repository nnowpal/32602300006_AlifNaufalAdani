<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="title">
        <h1>Tambah Data Mahasiswa</h1>
    </div>
    <div class="form">
        <form action="" method="post">
            <div class="input">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim">
            </div>
            <div class="input">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="input">
                <label for="prodi">Prodi</label>
                <input type="text" name="prodi" id="prodi">
            </div>
            <div class="input">
                <label for="univ">Universitas</label>
                <input type="text" name="universitas" id="univ">
            </div>
            <div class="input">
                <label for="no_hp">Nomor Handphone</label>
                <input type="text" name="nomor_handphone" id="no_hp">
            </div>
            <div class="button">
                <button type="submit" value="submit">Submit</button>
            </div>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>