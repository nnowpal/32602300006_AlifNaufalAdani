<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="title">
    <h1>Data Mahasiswa</h1>
    <a href="<?= base_url('crud/tambah'); ?>"><button>Tambah Data</button></a>
</div>
<table class="table" border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Universitas</th>
        <th>No HP</th>
        <th>Action</th>
    </tr>
    <?php if(empty($mahasiswa)): ?>
    <tr>
        <td colspan="7" style="text-align: center;">Tidak ada data.</td>
    </tr>
    <?php else: ?>
    <?php $no = 1; foreach($mahasiswa as $m): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $m['nim']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['prodi']; ?></td>
        <td><?= $m['universitas']; ?></td>
        <td><?= $m['nomor_handphone']; ?></td>
        <td class="action">
            <a href="<?= base_url('crud/edit/'.$m['nim']); ?>"><button class="btn-update">Update</button></a>
            <a href="<?= base_url('crud/hapus/'.$m['nim']); ?>" onclick="return confirm('Yakin ingin hapus data?');"><button class="btn-delete">Delete</button></a>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>

<?= $this->endSection(); ?>