<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="title">
        <h1>Edit Data Mahasiswa</h1>
    </div>
    <div class="form">
        <form action="<?= base_url('crud/editan'); ?>" method="post">
            <!-- Hidden/readonly untuk NIM lama (tidak bisa diubah) -->
            <div class="input">
                <label for="nim">NIM (Tidak dapat diubah)</label>
                <input type="text" name="nim" id="nim" value="<?= $edit['nim']; ?>" readonly>
            </div>
            <!-- Tambahkan input NIM baru -->
            <div class="input">
                <label for="new_nim">NIM Baru</label>
                <input type="text" name="new_nim" id="new_nim" value="<?= $edit['nim']; ?>">
            </div>
            <div class="input">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $edit['nama']; ?>">
            </div>
            <div class="input">
                <label for="prodi">Prodi</label>
                <input type="text" name="prodi" id="prodi" value="<?= $edit['prodi']; ?>">
            </div>
            <div class="input">
                <label for="univ">Universitas</label>
                <input type="text" name="universitas" id="univ" value="<?= $edit['universitas']; ?>">
            </div>
            <div class="input">
                <label for="nomor_handphone">Nomor Handphone</label>
                <input type="text" name="nomor_handphone" id="nomor_handphone" value="<?= $edit['nomor_handphone']; ?>">
            </div>
            <div class="button">
                <button type="submit" value="submit">Update</button>
            </div>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>