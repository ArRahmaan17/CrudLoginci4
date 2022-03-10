<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPegawai extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pegawai';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'email', 'bidang', 'alamat','password'];

    public function cari($keyword)
    {
        $builder = $this->table('pegawai');
        $arr_keyword = explode(" ", $keyword);
        for($x = 0; $x< count($arr_keyword); $x++){
            $builder->orLike('nama', $arr_keyword[$x]);
            $builder->orLike('alamat', $arr_keyword[$x]);
            $builder->orLike('email', $arr_keyword[$x]);
            $builder->orLike('bidang', $arr_keyword[$x]);
        }
        return $builder;
    }
}
