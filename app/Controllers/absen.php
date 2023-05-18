<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\absen_guru;

class Absen extends BaseController
{
    protected $helpers = [];
    protected $absen_guru;
    public function __construct()
    {
        helper('form');
        $this->absen_guru = new absen_guru();
    }
    public function index()
    {

        # code...
        $model = new absen_guru();
        $data['presensi'] = $model->getAbsen();
        echo view('guru_view/absen/index', $data);
    }

    // public function update()
    // {
    //     $absen = new absen_guru();
    //     $nis = $this->request->getVar('nis');
    //     $hadir = $this->request->getVar('absen');
    //     $presensihadir = $absen->where([
    //         $hadir => "hadir",
    //     ]);
    //     if ($presensihadir) {
    //         $db = db_connect();
    //         $db->query('update presensi set hadir=hadir+1');
    //     }else{
    //         $db = db_connect();
    //         $db->query('update presensi set hadir=hadir-10');
    //     }


    //     $data['presensi'] = $absen->getAbsen();
    //     // $db = db_connect();
    //     // $db->query('update presensi set total = total+1');
    //     echo view('guru_view/absen/index', $data);
    // }
    public function update()
    {
        # code...
        $id = $this->request->getvar('id_absen');
        $db = db_connect();
        $h = $db->query('update presensi set hadir=hadir+1');

        $data = array(
            'hadir'     => $this->request->getPost($h),
        );
            $model = new absen_guru();
            $ubah = $model->updateabsen($data,$id);
            if($ubah)
            {
                session()->setFlashdata('info', 'Updated Category');
                return redirect()->to(base_url('absen')); 
            }
        
    }
}
