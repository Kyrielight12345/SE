<?php

namespace App\Models;

use CodeIgniter\Model;


class absen_guru extends Model
{
    protected $table = 'presensi';
    // protected $primaryKey = "id_absen";
    // protected $returnType = "object";
    // protected $useTimestamps = true;
    // protected $allowedFields = ['nis', 'HADIR', 'IJIN','ALPHA','total'.'presentase'];

    public function getAbsen()
    {
        return $this->db->table('presensi')
            ->join('siswa', 'siswa.nis = presensi.nis')
            ->get()->getResultArray();
    }

    public function updateabsen($data,$id)
    {
        # code...
        return $this->db->table($this->table)->update($data,['id_absen' => $id]);
    }
}
