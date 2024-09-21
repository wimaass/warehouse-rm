<?php

namespace App\Controllers;

use Exception;

class ScanController extends BaseController
{
    protected $table = 'tbl_scan';


    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->table = 'tbl_scan';
        date_default_timezone_set('Asia/Jakarta');
    }

    public function displayscan()
    {
        echo view('display_scan_non_aktual');
    }

    public function displayScanAktual()
    {
        echo view('display_scan_aktual');
    }


    public function olahScanAktual()
    {
        $qty_aktual = $_POST["qty_aktual"];

        $scan = $_POST["scan"];
        $pecahscan = (explode(";", $scan));

        $kode_sap = $pecahscan[0];

        $db = \Config\Database::connect();

        $cekkode_sap = $db->table('tbl_scan')->getWhere(['kode_sap' => $kode_sap])->getResult();

        $cek = is_numeric($qty_aktual);
        if ($cek == true && count($cekkode_sap) <= 0) {
            try {
                $kodesap = $pecahscan[0];
                $di = $pecahscan[1];
                $needdaybar = $pecahscan[2];
                $rmcode = $pecahscan[3];
                $partnorunning = $pecahscan[4];
                $type = $pecahscan[5];
                $group_machine = $pecahscan[6];

                $data = [
                    'kode_sap'          => $kodesap,
                    'day_in'            => $di,
                    'part_no_running'   => $partnorunning,
                    'rm_code'           => $rmcode,
                    'type'              => $type,
                    'need_day_bar'      => $needdaybar,
                    'group_machine' => $group_machine,
                    'qty_aktual'    => $qty_aktual
                ];

                $db->table('tbl_scan')->insert($data);

                // $this->db->table($this->table)->where($kondisi)->update($data);

                session()->setFlashdata('message', '<div style="background-color:green; border-radius: 5px; width: max-content;"><b style="color:lightgreen; font-size: 20px; "><--Data Berhasil dimasukan--></b></div>');
            } catch (Exception $e) {
                session()->setFlashdata('message', '<div style="background-color:red; border-radius: 5px; width: max-content;"><b style="color:lightred; font-size: 20px; "><--Data Gagal Dimasukan--></b></div>');
            }
        } else if ($cek == true && count($cekkode_sap) > 0) {
            $kodesap = $pecahscan[0];
            $di = $pecahscan[1];
            $needdaybar = $pecahscan[2];
            $rmcode = $pecahscan[3];
            $partnorunning = $pecahscan[4];
            $type = $pecahscan[5];
            $group_machine = $pecahscan[6];
            $data = [
                'qty_aktual'    => $qty_aktual
            ];

            $kondisi = [
                'kode_sap'          => $kodesap,
                'day_in'            => $di,
                'need_day_bar'      => $needdaybar,
                'rm_code'           => $rmcode,
                'part_no_running'   => $partnorunning,
                'type'              => $type,
                'group_machine'     => $group_machine
            ];
            $db->table('tbl_scan')->where($kondisi)->update($data);
            session()->setFlashdata('message', '<div style="background-color:green; border-radius: 5px; width: max-content;"><b style="color:lightgreen; font-size: 20px; "><--Data Berhasil Diupdate--></b></div>');
        } else {
            session()->setFlashdata('message', '<div style="background-color:red; border-radius: 5px; width: max-content;"><b style="color:lightred; font-size: 20px; "><--Periksa Kembali Inputan Anda--></b></div>');
        }

        return redirect()->to('/scancontroller/displayScanAktual');
    }

    public function olahScanNonAktual()
    {
        $scan = $_POST["scan"];
        $pecahscan = (explode(";", $scan));

        $kode_sap = $pecahscan[0];

        $db = \Config\Database::connect();

        $cekkode_sap = $db->table('tbl_scan')->getWhere(['kode_sap' => $kode_sap])->getResult();

        if (count($cekkode_sap) <= 0) {
            try {
                $kodesap = $pecahscan[0];
                $di = $pecahscan[1];
                $needdaybar = $pecahscan[2];
                $rmcode = $pecahscan[3];
                $partnorunning = $pecahscan[4];
                $type = $pecahscan[5];
                $group_machine = $pecahscan[6];

                $data = [
                    'kode_sap'          => $kodesap,
                    'day_in'            => $di,
                    'part_no_running'   => $partnorunning,
                    'rm_code'           => $rmcode,
                    'type'              => $type,
                    'need_day_bar'      => $needdaybar,
                    'group_machine' => $group_machine,
                    'qty_aktual'    => $needdaybar
                ];

                $db->table('tbl_scan')->insert($data);

                // $this->db->table($this->table)->where($kondisi)->update($data);

                session()->setFlashdata('message', '<div style="background-color:green; border-radius: 5px; width: max-content;"><b style="color:lightgreen; font-size: 20px; "><--Data Berhasil Dimasukan--></b></div>');
            } catch (Exception $e) {
                session()->setFlashdata('message', '<div style="background-color:red; border-radius: 5px; width: max-content;"><b style="color:lightred; font-size: 20px; "><--Periksa Kembali Inputan Anda--></b></div>');
            }
        } else {
            session()->setFlashdata('message', '<div style="background-color:red; border-radius: 5px; width: max-content;"><b style="color:lightred; font-size: 20px; "><--Data Sudah Pernah Dimasukan--></b></div>');
        }

        return redirect()->to('/scancontroller/displayscan');
    }
}
