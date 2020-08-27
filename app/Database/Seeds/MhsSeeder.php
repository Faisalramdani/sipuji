<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class MhsSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'mhs_name' => 'Muhamad Faisal Ramdani',
                'mhs_nim'    => '12191180',
                'mhs_majors'    => 'Fakultas Ilmu Komputer',
                'mhs_thesis'    => 'Tata Cara Broadcasting',
                'mhs_thesis_registered'    => '1',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now(),
                'mhs_slug'    => 'Tata-Cara-Broad-Casting.html'
            ],
            [
                'mhs_name' => 'Rafel Nuansa',
                'mhs_nim'    => '12191190',
                'mhs_majors'    => 'Fakultas Pertanian',
                'mhs_thesis'    => 'Penanggu langan Bencana Alam',
                'mhs_thesis_registered'    => '1',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now(),
                'mhs_slug'    => 'Penanggu-langan-Bencana-Alam.html'
            ],
            [
                'mhs_name' => 'Ahmad Hasan Bashori',
                'mhs_nim'    => '12191190',
                'mhs_majors'    => 'Fakultas Ilmu Komputer',
                'mhs_thesis'    => 'Pengelolaan Sistem Basis Data',
                'mhs_thesis_registered'    => '1',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now(),
                'mhs_slug'    => 'Pengelolaan-Sistem-Basis-Data.html'
            ],
            [
                'mhs_name' => 'Syukri',
                'mhs_nim'    => '12191100',
                'mhs_majors'    => 'Fakultas Ilmu Pangan Halal',
                'mhs_thesis'    => 'Mutu Dan Gizi',
                'mhs_thesis_registered'    => '1',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now(),
                'mhs_slug'    => 'Mutu-Dan-Gizi.html'
            ],
        ];

        // Simple Queries
        // $this->db->query(
        //     "INSERT INTO tbl_mhs (mhs_name, mhs_nim,mhs_majors,mhs_thesis,mhs_thesis_registered,created_at,updated_at,mhs_slug) VALUES(:mhs_name:, :mhs_nim:,:mhs_majors:,:mhs_thesis:,:mhs_thesis_registered:,:created_at:,:updated_at:,:mhs_slug:)",
        //     $data
        // );

        // Using Query Builder
        // $this->db->table('tbl_mhs')->insert($data);
        $this->db->table('tbl_mhs')->insertBatch($data);
    }
}
