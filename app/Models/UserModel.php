<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['username','password_hash','email',];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    public function getUsersByRole($role)
    {
        return $this->where('role', $role)->findAll();
    }
    public function getIdUser($id){

        return $this->select('users.*' )
        ->find($id);
    }
    public function updateProfile($data, $id){
        return $this->update($id, $data);
    }

    public function getUserBookingStatus($id){
        return $this->db->table('booking')
        ->join('service', 'booking.id_service = service.id', 'inner')
        ->select('booking.*, service.nama_service')
        ->where('booking.id_user', $id)
        ->get()->getResultArray();
    }

}   



