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
    protected $allowedFields    = ['id_pegawai', 'id_pelanggan', 'id_barang', 'jumlah', 'dimensi', 'fotoproses', 'fotoselesai', 'tanggalmasuk', 'status', 'tanggalselesai'];

    public function cariId($id)
    {
        return $this->table("pesanan")->join('pegawai', 'pegawai.id_pegawai = pesanan.id_pegawai')->join('barang','barang.id_barang = pesanan.id_barang')->join('pelanggan','pelanggan.id_pelanggan = pesanan.id_pelanggan')->where("id_pesanan", $id)->first();
    }
    public function belumproses($id)
    {
        return $this->table("pesanan")->join('pegawai', 'pegawai.id_pegawai = pesanan.id_pegawai')->join('barang','barang.id_barang = pesanan.id_barang')->join('pelanggan','pelanggan.id_pelanggan = pesanan.id_pelanggan')->where(["id_pesanan" => $id, 'fotoproses ' => null])->first();
    }
    public function sudahproses($id)
    {
        return $this->table("pesanan")->join('pegawai', 'pegawai.id_pegawai = pesanan.id_pegawai')->join('barang','barang.id_barang = pesanan.id_barang')->join('pelanggan','pelanggan.id_pelanggan = pesanan.id_pelanggan')->where(["id_pesanan" => $id, 'fotoproses !=' => null])->first();
    }
    public function statusMasuk()
    {
        return $this->table("pesanan")->join('pegawai', 'pegawai.id_pegawai = pesanan.id_pegawai')->join('barang','barang.id_barang = pesanan.id_barang')->join('pelanggan','pelanggan.id_pelanggan = pesanan.id_pelanggan')->where("status", "masuk");
    }
    public function statusProses()
    {
        return $this->table("pesanan")->join('pegawai', 'pegawai.id_pegawai = pesanan.id_pegawai')->join('barang','barang.id_barang = pesanan.id_barang')->join('pelanggan','pelanggan.id_pelanggan = pesanan.id_pelanggan')->where("status", "proses");
    }
    public function statusSelesai()
    {
        return $this->table("pesanan")->join('pegawai', 'pegawai.id_pegawai = pesanan.id_pegawai')->join('barang','barang.id_barang = pesanan.id_barang')->join('pelanggan','pelanggan.id_pelanggan = pesanan.id_pelanggan')->where("status", "selesai");
    }
}
