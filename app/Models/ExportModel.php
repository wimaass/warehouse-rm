<?php

namespace App\Models;

use CodeIgniter\Model;

class ExportModel extends Model
{
    protected $db = 'db_rawmaterial';
    protected $table = 'tbl_scan';
    protected $primaryKey = 'kode_sap';
    protected $returnType = 'array';
    protected $allowedFields = [
        'rm_code',
        'type',
        'qty_aktual'
    ];

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function dataScan()
    {
        $query = $this->db->query('SELECT tbl_scan.part_no_running, tbl_scan.need_day_bar, tbl_scan.rm_code, tbl_scan.type, tbl_scan.qty_aktual, tbl_master.weight_rm, tbl_scan.group_machine FROM tbl_scan INNER JOIN tbl_master ON tbl_scan.rm_code = tbl_master.rm_code ORDER BY rm_code ASC, part_no_running');
        $result = $query->getResultArray();

        // return $query;

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function exportRev()
    {
        $query = $this->db->query('SELECT tbl_scan.part_no_running, tbl_scan.need_day_bar, tbl_scan.rm_code, tbl_scan.type, tbl_scan.qty_aktual, tbl_master.weight_rm FROM tbl_scan INNER JOIN tbl_master ON tbl_scan.rm_code = tbl_master.rm_code WHERE tbl_scan.group_machine ="REVISI" ORDER BY rm_code ASC, part_no_running');
        $result = $query->getResultArray();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function exportCnc1()
    {
        $query = $this->db->query('SELECT tbl_scan.part_no_running, tbl_scan.need_day_bar, tbl_scan.rm_code, tbl_scan.type, tbl_scan.qty_aktual, tbl_master.weight_rm FROM tbl_scan INNER JOIN tbl_master ON tbl_scan.rm_code = tbl_master.rm_code WHERE tbl_scan.group_machine ="Cnc Line 1" ORDER BY rm_code ASC, part_no_running');
        $result = $query->getResultArray();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function exportCnc2()
    {
        $query = $this->db->query('SELECT tbl_scan.part_no_running, tbl_scan.need_day_bar, tbl_scan.rm_code, tbl_scan.type, tbl_scan.qty_aktual, tbl_master.weight_rm FROM tbl_scan INNER JOIN tbl_master ON tbl_scan.rm_code = tbl_master.rm_code WHERE tbl_scan.group_machine ="Cnc Line 2" ORDER BY rm_code ASC, part_no_running');
        $result = $query->getResultArray();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function exportCnc3()
    {
        $query = $this->db->query('SELECT tbl_scan.part_no_running, tbl_scan.need_day_bar, tbl_scan.rm_code, tbl_scan.type, tbl_scan.qty_aktual, tbl_master.weight_rm FROM tbl_scan INNER JOIN tbl_master ON tbl_scan.rm_code = tbl_master.rm_code WHERE tbl_scan.group_machine ="Cnc Line 3" ORDER BY rm_code ASC, part_no_running');
        $result = $query->getResultArray();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function exportCam()
    {
        $query = $this->db->query('SELECT tbl_scan.part_no_running, tbl_scan.need_day_bar, tbl_scan.rm_code, tbl_scan.type, tbl_scan.qty_aktual, tbl_master.weight_rm FROM tbl_scan INNER JOIN tbl_master ON tbl_scan.rm_code = tbl_master.rm_code WHERE tbl_scan.group_machine ="Cam" ORDER BY rm_code ASC, part_no_running');
        $result = $query->getResultArray();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
}
