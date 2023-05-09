<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login_view');
    }

    public function process()
    {
        $users = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        $dataPass = $users->where([
            'password' => $password,
        ])->first();
        if ($dataUser) {
            if ($dataPass) {
                session()->set([
                    'username' => $dataUser->username,
                    'nama' => $dataUser->nama,
                    'logged_in' => TRUE,
                    'akses' => $dataUser->akses
                ]);
                if ($dataUser->akses == "admin") {
                    return redirect()->to(base_url('home/index_admin'));
                } else if($dataUser->akses == "guru"){
                    return redirect()->to(base_url('home/index_guru'));
                }else{
                    return redirect()->to(base_url('home/index_kepsek'));
                }
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah ');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}


