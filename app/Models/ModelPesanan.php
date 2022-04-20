<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPesanan extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pesanan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'barang', 'jumlah','dimensi', 'tanggalmasuk', 'status', 'tanggalselesai'];

    public function statusMasuk()
    {
        return $this->table("pesanan")->where("status", "masuk")->orderBy('id','ASC')->findAll();
    }
    
    public function statusProses()
    {
        return $this->table("pesanan")->where("status", "proses")->orderBy('id','ASC')->findAll();
    }
    public function statusSelesai()
    {
        return $this->table("pesanan")->where("status", "selesai")->orderBy('id','ASC')->findAll();
    }
}
