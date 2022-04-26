<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index()
    {
        session();
        return view('Auth/Auth');
    }

    public function ceklogin()
    {
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username harus diisi.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi.'
                ]
            ]
        ])) {
            $json = [
                'status' => 'salah',
                'errors' => [
                    'username' => $validation->getError('username'),
                    'password' => $validation->getError('password')
                ]
            ];
            return json_encode($json);
        }

        // INI SESSION AUTHENTICATION

        $AkunModel = new UserModel();

        $UserName = $this->request->getPost('username');
        $Password = $this->request->getPost('password');
        $logincek = $AkunModel->login($UserName, $Password);
        if ($logincek) {
            $json = [
                'status' => 'berhasil',
                'data' => $logincek->nama_role
            ];
            $sesi = [
                'id' => $logincek->id,
                'username' => $logincek->username,
                'roles' => $logincek->nama_role
            ];
            session()->set($sesi);


            return json_encode($json);
        }

        $json = [
            'status' => 'gagallogin',
            'data' => 'username atau password salah'
        ];
        return json_encode($json);
    }
    public function logout()
    {
        $logout_cek = ['id', 'username', 'roles'];
        session()->remove($logout_cek);
        return redirect()->to('/');
    }
    public function dashboard()
    {
        return view('page/Dashboard');
    }
}
