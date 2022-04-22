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
    protected $allowedFields    = ['id_pegawai', 'nama', 'barang', 'jumlah', 'dimensi', 'fotoproses', 'fotoselesai', 'tanggalmasuk', 'status', 'tanggalselesai'];

    public function cariId($id)
    {
        return $this->table("pesanan")->where("id", $id)->first();
    }
    public function statusMasuk()
    {
        return $this->table("pesanan")->where("status", "masuk");
    }
    
    public function statusProses()
    {
        return $this->table("pesanan")->where("status", "proses");
    }
    public function statusSelesai()
    {
        return $this->table("pesanan")->where("status", "selesai");
    }
}
