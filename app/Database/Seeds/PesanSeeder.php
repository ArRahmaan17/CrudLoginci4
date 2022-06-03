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
                'nama' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7]),
                'barang'    => $faker->randomElement([1, 2, 3, 4, 5, 6, 7]),
                'jumlah' => $faker->randomNumber(4, true),
                'dimensi' => $faker->randomElement(['Lt','Kg','Pcs']),
                'fotoproses'=> $faker->imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg'),
                'fotoselesai'=> $faker->imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg'),
                'tanggalmasuk' => $faker->date(),
                'status' => $faker->randomElement(['masuk','proses','selesai']),
                'tanggalselesai' => $faker->date(),
            ];
            // $this->db->query("INSERT INTO pesanan (nama, barang, jumlah, tanggalmasuk, status) VALUES(:nama:, :barang:, :jumlah:, :tanggalmasuk:, :status:)", $data);
            // Using Query Builder
            $this->db->table('pesanan')->insert($data);
        }
    }
}
