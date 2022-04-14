<?php

namespace App\Controllers;

use App\Models\ModelPegawai;

class Home extends BaseController
{
    public function __construct()
    {
        $this->pegawai = new ModelPegawai();
    }
    public function logout()
    {
        $db = db_connect();
        $dataLogin =  $this->pegawai->where(['email' => session()->get('email'), 'role' => 'Admin', 'status_login' => '1'])->first();
        $online = $this->pegawai->where(['role' => 'Admin', 'status_login' => '1'])->findAll();
        if (count($online) > 1) {
            $db->query("UPDATE pegawai set status_login = '0' WHERE id = " . $dataLogin['id']);
        } else {
            $db->query("UPDATE pegawai set status_login = '0'");
        }
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to(base_url());
    }
    public function index()
    {
        $db = db_connect();
        $session = \Config\Services::session();
        $login = $this->request->getVar('login');
        if ($login) {
            $email = $this->request->getVar('inputEmail');
            $password = $this->request->getVar('inputPassword');
            $dataLogin =  $this->pegawai->where(['email' => $email, 'status_login' => '0'])->first();
            if ($dataLogin == null) {
                $error = "User Tidak Tersedia";
                $session->setFlashdata('email', $email);
                $session->setFlashdata('error', $error);
                return redirect()->to(base_url());
            } elseif ($dataLogin['password'] !== md5($password)) {
                $error = "Password Tidak Sesuai";
                $session->setFlashdata('email', $email);
                $session->setFlashdata('error', $error);
                return redirect()->to(base_url());
            } elseif ($dataLogin['role'] == 'Admin') {
                $db->query("UPDATE pegawai set status_login = '1' WHERE id = " . $dataLogin['id']);
                $dataLogin =  $this->pegawai->where(['id' => $dataLogin['id'], 'nama' => $dataLogin['nama'], 'status_login' => '1'])->first();
                $session->set($dataLogin);
                return redirect()->to(base_url('/admindashboard'));
            } else {
               $db->query("UPDATE pegawai set status_login = '1' WHERE id = " . $dataLogin['id']);
                $dataLogin =  $this->pegawai->where(['id' => $dataLogin['id'], 'nama' => $dataLogin['nama'], 'status_login' => '1'])->first();
                $session->set($dataLogin);
                return redirect()->to(base_url('/dashboard'));  
            }
        }
        return view('allin/login_view', [
            'title' => 'Login Pegawai',
        ]);
    }
}
