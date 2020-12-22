<?php

namespace App\Database\Seeds;

class MahasiswaSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'nim'           => '17030043',
            'nama'          => 'Kiki Agustin',
            'prodi'         => 'Komputerarisasi Akuntansi',
            'jenis_kelamin' => 'Laki-laki',
            'alamat'        => 'Jl. Salamungkal No.23'
        ];

        // Simple Queries
        // $this->db->query(
        //     "INSERT INTO users (username, email) VALUES(:username:, :email:)",
        //     $data
        // );

        // Using Query Builder
        $this->db->table('mahasiswa')->insert($data);
    }
}
