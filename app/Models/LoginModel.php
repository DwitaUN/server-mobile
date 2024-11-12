<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    Protected $table = 'admin'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'username', 'password', 'nama', 'email', 'level', 'created_at'];


    public function getData($username, $password)
    {    
        return $this->where('username', $username)
                    ->where('password', $password)
                    ->first();
    }
}