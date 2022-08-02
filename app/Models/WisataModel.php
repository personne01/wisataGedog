<?php

namespace App\Models;

use CodeIgniter\Model;

class WisataModel extends Model
{
    protected $table = 'wisata';
    protected $primaryKey = "id";
    protected $allowedFields = ['nama_wisata', 'gambar', 'deskripsi', "lokasi"];
    protected $userTimestamps = false;

    public function getWisata($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
