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

    public function viewDataScan()
    {
        echo view('lihat-data-scanner');
    }
    public function displayscan()
    {
        $query = $this->db->query('SELECT COUNT(scan) FROM tbl_scan');
        $result = $query->getResultArray();

        $data = [
            'jumlah' => $result[0]['COUNT(scan)']
        ];
        echo view('display_scan_non_aktual', $data);
    }

    public function displayScanAktual()
    {
        $query = $this->db->query('SELECT COUNT(scan) FROM tbl_scan');
        $result = $query->getResultArray();

        $data = [
            'jumlah' => $result[0]['COUNT(scan)']
        ];
        echo view('display_scan_aktual', $data);
    }


    public function delete()
    {
        $part_no_running = $_POST['part_no_running'];
        $rm_code = $_POST['rm_code'];
        $need_day_bar = $_POST['need_day_bar'];
        $qty_aktual = $_POST['qty_aktual'];
        $group_machine = $_POST['group_machine'];

        $delete = [
            'part_no_running' => $part_no_running,
            'rm_code' => $rm_code,
            'need_day_bar' => $need_day_bar,
            'qty_aktual' => $qty_aktual,
            'part_no_running' => $part_no_running,
            'group_machine' => $group_machine

        ];

        $this->db->table('tbl_scan')->delete($delete);
        session()->setFlashdata('message', '<div class="alert alert-success" style="font-color:white"><b>Data Berhasil Dihapus</b></div>');

        return redirect()->to('/exportcontroller/lihatScan');
    }


    public function olahScanAktual()
    {
        $qty_aktual = $_POST["qty_aktual"];

        $scan = $_POST["scan"];
        $pecahscan = (explode(";", $scan));
        $db = \Config\Database::connect();

        // $kode_sap = $pecahscan[0];
        // $group_machine = $pecahscan[6];


        // $seleksi = $db->table('tbl_scan')->getWhere([
        //     'kode_sap' => $kode_sap
        // ])->getResult();

        // $seleksi2 = $db->table('tbl_scan')->getWhere([
        //     'kode_sap' => $kode_sap,
        //     'group_machine' => $group_machine
        // ])->getResult();

        $seleksi = $db->table('tbl_scan')->getWhere([
            'scan' => $scan
        ])->getResult();

        $cek = is_numeric($qty_aktual);
        if ($cek == true && count($seleksi) <= 0) {
            // if (($cek == true && count($seleksi) <= 0) || ($cek == true && count($seleksi2) > 0)) {
            try {
                $kodesap = $pecahscan[0];
                $di = $pecahscan[1];
                $needdaybar = $pecahscan[2];
                $rmcode = $pecahscan[3];
                $partnorunning = $pecahscan[4];
                $type = $pecahscan[5];
                $group_machine = $pecahscan[6];

                $data = [
                    'scan'              => $scan,
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

                session()->setFlashdata(
                    'message',
                    '<div style="background-color:green; border-radius: 5px; width: max-content;"><b style="color:lightgreen; font-size: 20px; "><--Data Berhasil Dimasukan--></b></div>
                    <script>
                        PIXI.sound.add("my-sound2", "/warehouserm/public/audio/success.wav");
                        PIXI.sound.play("my-sound2");
                    </script>'
                );
            } catch (Exception $e) {
                session()->setFlashdata(
                    'message',
                    '<div style="background-color:red; border-radius: 5px; width: max-content;"><b style="color:lightred; font-size: 20px; "><--Data Gagal Dimasukan--></b></div>
                    <script>
                        PIXI.sound.add("my-sound2", "/warehouserm/public/audio/fail.wav");
                        PIXI.sound.play("my-sound2");
                    </script>'
                );
            }
        } else if ($cek == true && count($seleksi) > 0) {
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
                'scan'              => $scan,
                'kode_sap'          => $kodesap,
                'day_in'            => $di,
                'need_day_bar'      => $needdaybar,
                'rm_code'           => $rmcode,
                'part_no_running'   => $partnorunning,
                'type'              => $type,
                'group_machine'     => $group_machine
            ];
            $db->table('tbl_scan')->where($kondisi)->update($data);
            session()->setFlashdata(
                'message',
                '<div style="background-color:green; border-radius: 5px; width: max-content;"><b style="color:lightgreen; font-size: 20px; "><--Data Berhasil Diupdate--></b></div>
                    <script>
                        PIXI.sound.add("my-sound2", "/warehouserm/public/audio/success.wav");
                        PIXI.sound.play("my-sound2");
                    </script>'
            );
        } else {
            session()->setFlashdata(
                'message',
                '<div style="background-color:red; border-radius: 5px; width: max-content;"><b style="color:lightred; font-size: 20px; "><--Periksa Kembali Inputan Anda--></b></div>
                <script>
                    PIXI.sound.add("my-sound2", "/warehouserm/public/audio/gagal.wav");
                    PIXI.sound.play("my-sound2");
                </script>'
            );
        }

        return redirect()->to('/scancontroller/displayScanAktual');
    }

    public function olahScanNonAktual()
    {
        $scan = $_POST["scan"];
        $pecahscan = (explode(";", $scan));

        // $kode_sap = $pecahscan[0];

        $db = \Config\Database::connect();

        // $seleksi = $db->table('tbl_scan')->getWhere(['kode_sap' => $kode_sap])->getResult();

        $seleksi = $db->table('tbl_scan')->getWhere([
            'scan' => $scan
        ])->getResult();

        if (count($seleksi) <= 0) {
            try {
                $kodesap = $pecahscan[0];
                $di = $pecahscan[1];
                $needdaybar = $pecahscan[2];
                $rmcode = $pecahscan[3];
                $partnorunning = $pecahscan[4];
                $type = $pecahscan[5];
                $group_machine = $pecahscan[6];

                $data = [
                    'scan'              => $scan,
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

                session()->setFlashdata(
                    'message',
                    '<div style="background-color:green; border-radius: 5px; width: max-content;"><b style="color:lightgreen; font-size: 20px; "><--Data Berhasil Dimasukan--></b></div>
                    <script>
                        PIXI.sound.add("my-sound2", "/warehouserm/public/audio/success.wav");
                        PIXI.sound.play("my-sound2");
                    </script>'
                );
            } catch (Exception $e) {
                session()->setFlashdata(
                    'message',
                    '<div style="background-color:red; border-radius: 5px; width: max-content;"><b style="color:lightred; font-size: 20px; "><--Periksa Kembali Inputan Anda--></b></div>
                    <script>
                        PIXI.sound.add("my-sound2", "/warehouserm/public/audio/gagal.wav");
                        PIXI.sound.play("my-sound2");
                    </script>'
                );
            }
        } else {
            session()->setFlashdata(
                'message',
                '<div style="background-color:red; border-radius: 5px; width: max-content;"><b style="color:lightred; font-size: 20px; "><--Data Sudah Pernah Dimasukan--></b></div>
                <script>
                    PIXI.sound.add("my-sound2", "/warehouserm/public/audio/fail.wav");
                    PIXI.sound.play("my-sound2");
                </script>'
            );
        }

        return redirect()->to('/scancontroller/displayscan');
    }

    public function search()
    {

        $kode_sap = $_GET['kode_sap'];
        $group_machine = $_GET['group_machine'];



        $query = $this->db->query('SELECT * FROM tbl_scan WHERE kode_sap = ' . $kode_sap . ' AND group_machine = ' . $group_machine . '');
        $result = $query->getResultArray();

        $data = [
            'search' => $result
        ];
        echo view('lihat-data-scanner', $data);
    }
}
