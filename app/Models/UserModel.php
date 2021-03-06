<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username','avatar','password','salt','created_by','updated_by','created_at','updated_at',
    ];
    protected $returnType = 'App\Entities\User';
    protected $useTimestamps = true;
}