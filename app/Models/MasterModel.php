<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterModel extends Model
{
    protected $db = 'db_rawmaterial';
    protected $table = 'tbl_master';
    protected $primaryKey = 'rm_code';
    protected $returnType = 'array';
    protected $allowedFields = [
        'rm_code',
        'type',
        'weight_rm'
    ];

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function dataMaster()
    {
        $query = $this->db->query('SELECT * FROM tbl_master ORDER BY rm_code ASC');
        $result = $query->getResult();

        // return $query;

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
}
