<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPegawai extends Model
{
    protected $table            = 'pegawai';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama', 'email', 'password', 'bidang', 'alamat', 'jeniskelamin', 'role', 'status_login'];


    public function cari($katakunci)
    {
        $builder = $this->table("pegawai");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orLike("nama", $arr_katakunci[$x]);
            $builder->orLike("alamat", $arr_katakunci[$x]);
            $builder->orLike("bidang", $arr_katakunci[$x]);
        }
        return $builder;
    }

    public function cariId($id)
    {
        return $this->table("pegawai")->where("id", $id)->first();
    }
}
