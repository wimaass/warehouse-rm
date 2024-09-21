<?php

namespace App\Controllers;

use App\Models\ModelRm;


class Rm extends BaseController
{
    public function __construct()
    {
        $this->rm = new ModelRm();
    }
    public function index()
    {
        $data = [
            'Rm' => $this->rm->findAll(),
            'tittle' => 'WH RM Program'
        ];
        echo view('data_rm', $data);
    }
    public function simpanExcel()
    {
        $file_excel = $this->request->getFile('fileexcel');
        $ext = $file_excel->getClientExtension();
        if ($ext == 'xls') {
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
        $spreadsheet = $render->load($file_excel);

        $data = $spreadsheet->getActiveSheet()->toArray();
        $i = 1;
        foreach ($data as $x => $row) {
            if ($x == 0) {
                continue;
            }

            $kode_sap = $row[0];
            $part_no_running = $row[1];
            $rm_code = $row[2];
            $type = $row[3];
            $need_day_bar = $row[4];
            $day_in = $row[5];
            $wo_from = $row[6];
            $wo_end = $row[7];
            $group_machine = $row[8];

            $db = \Config\Database::connect();

            $cekkode_sap = $db->table('tbl_rm')->getWhere(['kode_sap' => $kode_sap])->getResult();

            if (count($cekkode_sap) < 0) {
                session()->setFlashdata('message', '<b style="color:red">Data Gagal di Import kode SAP ada yang sama</b>');
            } else {

                $simpandata = [
                    'id' => $i++,
                    'kode_sap' => $kode_sap,
                    'part_no_running' => $part_no_running,
                    'rm_code' => $rm_code,
                    'type' => $type,
                    'need_day_bar' => $need_day_bar,
                    'day_in' => $day_in,
                    'wo_from' => $wo_from,
                    'wo_end' => $wo_end,
                    'group_machine' => $group_machine
                ];

                $db->table('tbl_rm')->insert($simpandata);
                session()->setFlashdata('message', 'Berhasil import excel');
            }
        }

        return redirect()->to('/rm');
    }


    public function delete()
    {
        $ModelRm = new ModelRm();
        $ModelRm->emptyTable('tbl_rm');

        session()->setFlashdata('message', '<b style="color:red">Data Berhasil Di Hapus');

        return redirect()->to('/rm');
    }
}
