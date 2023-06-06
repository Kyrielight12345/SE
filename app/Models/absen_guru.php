<?php

namespace App\Models;

use CodeIgniter\Model;


class absen_guru extends Model
{
    protected $table = 'presensi';
    protected $table1 = 'presensi_total';
    public function getAbsen()
    {
        return $this->db->table('presensi')
            ->join('siswa', 'siswa.nis = presensi.nis')
            ->join('presensi_total', 'presensi_total.nis = presensi.nis')
            ->get()->getResultArray();
    }
}
