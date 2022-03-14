<?php

namespace App\Controllers;

use App\Models\ModelPegawai;
use CodeIgniter\Exceptions\AlertError;
use PhpParser\Node\Stmt\Echo_;

class Pegawai extends BaseController
{

    public function __construct()
    {
        $this->pegawai = new ModelPegawai();
        session()->start();
    }
    public function hapus($id)
    {
        $this->pegawai->delete($id);
        return redirect()->to(base_url());
    }
    public function edit($id)
    {
        return json_encode($this->pegawai->find($id));
    }
    public function simpan()
    {
        $validation = \Config\Services::validation();
        $aturan = [
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required|min_length[5]|max_length[50]',
                'errors' => [
                    'required' => 'Kolom {field} Harus Di isi',
                    'min_length' => 'Minimal karakter yang di isikan di Kolom {field} adalah 5',
                    'max_length' => 'Maximal karakter yang di isikan di Kolom {field} adalah 50',
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'valid_email|min_length[5]|max_length[50]|is_unique[pegawai.email]',
                'errors' => [
                    'valid_email' => 'Kolom {field} Harus Format Email',
                    'min_length' => 'Minimal karakter yang di isikan di Kolom {field} adalah 5',
                    'max_length' => 'Maximal karakter yang di isikan di Kolom {field} adalah 50',
                    'is_unique' => '{field} Sudah Terdaftar Mohon Cek Kembali'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[5]|max_length[50]',
                'errors' => [
                    'required' => 'Kolom {field} Harus Di isi',
                    'min_length' => 'Minimal karakter yang di isikan di Kolom {field} adalah 5',
                    'max_length' => 'Maximal karakter yang di isikan di Kolom {field} adalah 50'
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required|min_length[5]|max_length[50]',
                'errors' => [
                    'required' => 'Kolom {field} Harus Di isi',
                    'min_length' => 'Minimal karakter yang di isikan di Kolom {field} adalah 5',
                    'max_length' => 'Maximal karakter yang di isikan di Kolom {field} adalah 50',
                ]
            ]
        ];
        $validation->setRules($aturan);

        if ($validation->withRequest($this->request)->run()) {

            $datacheck = $this->pegawai->where('id', $this->request->getPost('id'))->first();
            if (empty($datacheck)) {
                $password = md5($this->request->getPost('password'));
            } else {
                if ($datacheck['password'] == $this->request->getPost('password')) {
                    $password = $this->request->getPost('password');
                } else {
                    $password = md5($this->request->getPost('password'));
                }
            }
            $data = [
                'id' => $this->request->getPost('id'),
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'password' => $password,
                'bidang' => $this->request->getPost('bidang'),
                'alamat' => $this->request->getPost('alamat'),
                'role' => $this->request->getPost('role'),
                'status_login' => '0'
            ];
            $this->pegawai->save($data);
            $hasil['status'] = true;
            $hasil['pesan'] = 'Data Berhasil Ditambahkan';
        } else {
            $hasil['status'] = false;
            $hasil['pesan'] = $validation->listErrors();
        }
        return json_encode($hasil);
    }
    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        if ($keyword) {
            $carian = $this->pegawai->cari($keyword);
        } else {
            $carian = $this->pegawai;
        }
        $data = [
            'title' => 'Data Pegawai',
            'data' => $carian->orderBy('id', 'desc')->paginate(3),
            'pager' => $this->pegawai->pager
        ];
        return view('pegawai_view', $data);
    }
}
