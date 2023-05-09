<?php

namespace App\Models;

use CodeIgniter\Model;


class siswa_model extends Model
{
    protected $table = 'siswa';


    public function getSiswa()
    {
        return $this->db->table('siswa')
            ->join('kelas', 'siswa.id_kelas = kelas.id_kelas')
            ->get()->getResultArray();
    }
    
    public function insertSiswa($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
