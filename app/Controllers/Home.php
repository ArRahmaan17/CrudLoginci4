<?php

namespace App\Controllers;

use App\Models\ModelPegawai;
use DateTime;

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
        return redirect()->to('/');
    }
    public function index()
    {
        $db = db_connect();
        $session = \Config\Services::session();
        $login = $this->request->getVar('login');
        if ($login) {
            $email = $this->request->getVar('inputEmail');
            $password = $this->request->getVar('inputPassword');
            $dataLogin =  $this->pegawai->where(['email' => $email, 'role' => 'Admin', 'status_login' => '0'])->first();
            if ($dataLogin == null) {
                $error = "User Tidak Tersedia";
                $session->setFlashdata('email', $email);
                $session->setFlashdata('error', $error);
                return redirect()->to('/');
            } elseif ($dataLogin['password'] !== md5($password)) {
                $error = "Password Tidak Sesuai";
                $session->setFlashdata('email', $email);
                $session->setFlashdata('error', $error);
                return redirect()->to('/');
            } else {
                $date = getdate();
                $session->set('jam', $date['hours']);
                $db->query("UPDATE pegawai set status_login = '1' WHERE id = " . $dataLogin['id']);
                $session->set($dataLogin);
                return redirect()->to('datapegawai/');
            }
        }
        return view('login_view', [
            'title' => 'Login Pegawai'
        ]);
    }
}
