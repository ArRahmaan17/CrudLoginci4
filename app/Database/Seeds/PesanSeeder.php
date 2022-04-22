<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PesanSeeder extends Seeder
{
    public function run()
    {
        // use the factory to create a Faker\Generator instance
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 50; $i++) { 
            $data = [
                'nama' => $faker->name($gender = 'male'|'female'),
                'barang'    => $faker->randomElement(['Merah', 'Coklat', 'Hitam', 'Aromatik', 'Susu', 'Ketan']),
                'jumlah' => $faker->randomNumber(4, true),
                'dimensi' => $faker->randomElement(['Lt','Kg','Pcs']),
                'tanggalmasuk' => $faker->date(),
                'status' => $faker->randomElement(['masuk','proses','selesai']),
            ];
            // $this->db->query("INSERT INTO pesanan (nama, barang, jumlah, tanggalmasuk, status) VALUES(:nama:, :barang:, :jumlah:, :tanggalmasuk:, :status:)", $data);
            // Using Query Builder
            $this->db->table('pesanan')->insert($data);
        }
    }
}
