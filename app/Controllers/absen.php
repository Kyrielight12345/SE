<?php
namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\absen_guru;

class Absen extends BaseController
{
    
    public function index()
    {
        # code...
        $model = new absen_guru();
        $data['presensi'] = $model->getAbsen();
        echo view('guru_view/absen/index', $data);
    }   
 }
