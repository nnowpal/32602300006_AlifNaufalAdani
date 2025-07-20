<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = new MahasiswaModel();
    }

    // Tampilkan semua data (Read)
    public function index()
    {
        $all = $this->db->findAll();
        $data = [
            'mahasiswa' => $all
        ];
        return view('crud/view', $data);
    }

    // Tampilkan form tambah data & proses tambah (Create)
    public function tambah()
    {
        if (isset($_POST['nim'])) {
            $upload = [
                'nim' => $_POST['nim'],
                'nama' => $_POST['nama'],
                'prodi' => $_POST['prodi'],
                'universitas' => $_POST['universitas'],
                'nomor_handphone' => $_POST['nomor_handphone'],
            ];
            $this->db->insert($upload);
            return redirect()->to(base_url('crud'));
        }
        return view('crud/upload');
    }

    // Tampilkan form edit (Update)
    public function edit($id)
    {
        $nim = $id;
        $edit = $this->db->find($nim);

        // Jika data tidak ditemukan, tampilkan halaman 404
        if (!$edit) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data mahasiswa dengan NIM ' . $nim . ' tidak ditemukan');
        }

        $data = [
            'edit' => $edit
        ];
        return view('crud/edit', $data);
    }

    // Proses update data
    public function editan()
    {
        $nim = $_POST['nim'];
        $update = [
            'nim' => $_POST['new_nim'],
            'nama' => $_POST['nama'],
            'prodi' => $_POST['prodi'],
            'universitas' => $_POST['universitas'],
            'nomor_handphone' => $_POST['nomor_handphone'],
        ];
        $this->db->where('nim', $nim)->set($update)->update();
        return redirect()->to(base_url('crud'));
    }

    // Hapus data
    public function hapus($id)
    {
        $nim = $id;
        $this->db->delete($nim);
        return redirect()->to(base_url('crud'));
    }
}