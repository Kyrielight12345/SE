<?php
namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\siswa_model;

class siswa extends BaseController
{
    
    public function index()
    {
        # code...
        $model = new siswa_model();
        $data['siswa'] = $model->getSiswa();
        echo view('admin_view/siswa/index', $data);
    }

    public function create()
    {
         # code...
         $model = new siswa_model();
         $data['siswa'] = $model->getSiswa();
        return view('admin_view/siswa/create', $data);
    }
    
 }
