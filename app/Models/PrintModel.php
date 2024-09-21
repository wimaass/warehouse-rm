<?php

namespace App\Models;

use CodeIgniter\Model;

class PrintModel extends Model
{
    protected $db = 'db_rawmaterial';
    protected $table = 'tbl_rm';

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function Rev()
    {
        $query = $this->db->query('SELECT * FROM tbl_rm WHERE group_machine = "REVISI" ORDER BY rm_code ASC , part_no_running');
        $result = $query->getResult();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function dateRev()
    {
        $query = $this->db->query('SELECT wo_from,wo_end FROM tbl_rm WHERE group_machine = "REVISI" LIMIT 1');
        $result = $query->getResultArray();
        return $result;
    }


    public function Cnc1()
    {
        $query = $this->db->query('SELECT * FROM tbl_rm WHERE group_machine = "Cnc Line 1" ORDER BY rm_code ASC , part_no_running');
        $result = $query->getResult();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function dateCnc1()
    {
        $query = $this->db->query('SELECT wo_from,wo_end FROM tbl_rm WHERE group_machine = "Cnc Line 1" LIMIT 1');
        $result = $query->getResultArray();
        return $result;
    }


    public function Cnc2()
    {
        $query = $this->db->query('SELECT * FROM tbl_rm WHERE group_machine = "Cnc Line 2" ORDER BY rm_code ASC , part_no_running');
        $result = $query->getResult();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function dateCnc2()
    {
        $query = $this->db->query('SELECT wo_from,wo_end FROM tbl_rm WHERE group_machine = "Cnc Line 2" LIMIT 1');
        $result = $query->getResultArray();
        return $result;
    }


    public function Cnc3()
    {
        $query = $this->db->query('SELECT * FROM tbl_rm WHERE group_machine = "Cnc Line 3" ORDER BY rm_code ASC , part_no_running');
        $result = $query->getResult();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function dateCnc3()
    {
        $query = $this->db->query('SELECT wo_from,wo_end FROM tbl_rm WHERE group_machine = "Cnc Line 3" LIMIT 1');
        $result = $query->getResultArray();
        return $result;
    }


    public function Cam()
    {
        $query = $this->db->query('SELECT * FROM tbl_rm WHERE group_machine = "Cam" ORDER BY rm_code ASC , part_no_running');
        $result = $query->getResult();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function dateCam()
    {
        $query = $this->db->query('SELECT wo_from,wo_end FROM tbl_rm WHERE group_machine = "Cam" LIMIT 1');
        $result = $query->getResultArray();
        return $result;
    }
}
