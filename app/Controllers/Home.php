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
            $dataLogin =  $this->pegawai->where('email', $email)->first();
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
                // if ($dataLogin['status_login'] == '0') {
                //     $dataupdate = array(
                //         'id' => $dataLogin['id'],
                //         'status_login' => '1',
                //     );
                //     $this->pegawai->save($dataupdate);
                    $dataSesiPegawai = [
                        'id' => $dataLogin['id'],
                        'nama' => $dataLogin['nama'],
                        'email' => $dataLogin['email'],
                        'role' => $dataLogin['role'],
                    ];
                    $session->set($dataSesiPegawai);
                    return redirect()->to('/datapegawai');
                // }
            }
        }
        return view('login_view', [
            'title' => 'Login Pegawai'
        ]);
    }
}
