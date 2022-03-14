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
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to('/');
    }
    public function index()
    {
        $session = \Config\Services::session();
        $login = $this->request->getVar('login');
        if ($login) {
            $email = $this->request->getVar('inputEmail');
            $password = $this->request->getVar('inputPassword');
            $dataLogin =  $this->pegawai->where(['email' => $email, 'role' => 'Admin'])->first();
            if ($dataLogin == null) {
                $error = "Email Tidak Tersedia";
                $session->setFlashdata('error', $error);
                return redirect()->to('/');
            } elseif ($dataLogin['password'] !== md5($password)) {
                $error = "Password Tidak Sesuai";
                $session->setFlashdata('email', $email);
                $session->setFlashdata('error', $error);
                return redirect()->to('/');
            } else {
                $session->set($dataLogin);
                return redirect()->to('datapegawai/');
            }
        }
        return view('login_view', [
            'title' => 'Login Pegawai'
        ]);
    }
}
