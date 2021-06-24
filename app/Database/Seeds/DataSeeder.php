<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class DataSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'ktp' => '23423486',
            'nama' => 'Muhsin',
            'judul1'    => 'Citato Pedas',
            'judul2'    => 'Citato Level 10',
            'algoritma'    => 'K-NN'

        ];

        // Simple Queries
        $this->db->query("INSERT INTO pencocokanproduk (ktp, nama, judul1, judul2, algoritma) VALUES
        (:ktp:, :nama:,:judul1:,:judul2:, :algoritma:)", $data);

        // Using Query Builder
        // $this->db->table('users')->insert($data);
    }
}
