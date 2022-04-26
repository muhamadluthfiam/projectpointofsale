<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'akun';
    protected $primaryKey = 'id';
    protected $allowedFields = ['role_id', 'username', 'password'];

    public function getUser()
    {
        $this->select('akun.*');
        $this->join('roles', 'roles.id = akun.role_id');
        $query = $this->get();
        return $query->getRow();
    }

    public function login($username, $password)
    {
        $this->select('akun.*, roles.nama_role');
        $this->join('roles', 'roles.id = akun.role_id');
        $this->where([
            'username' => $username,
            'password' => $password
        ]);
        $query = $this->get();
        return $query->getRow();
    }
}
