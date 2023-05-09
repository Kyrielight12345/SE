<?php

namespace App\Models;

use CodeIgniter\Model;


class absen_guru extends Model
{
    protected $table = 'presensi';


    public function getAbsen()
    {
        return $this->db->table('presensi')
            ->join('siswa', 'siswa.nis = presensi.nis')
            ->get()->getResultArray();
    }
}
