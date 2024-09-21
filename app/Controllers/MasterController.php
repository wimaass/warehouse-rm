<?php

namespace App\Controllers;

use App\Models\MasterModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Exception;

class MasterController extends BaseController
{
    protected $table = 'tbl_master';


    public function __construct()
    {
        $this->masterModel = new MasterModel();
        $this->db = \Config\Database::connect();
        $this->table = 'tbl_master';
    }

    public function lihatMaster()
    {
        $data = [
            'tittle' => 'Data Master',
            'master' => $this->masterModel->dataMaster()
        ];
        echo view('data_master', $data);
    }

    public function tambahData()
    {
        $rm_code = $_POST["rm_code"];

        $type = $_POST["type"];
        $weight_rm = $_POST["weight_rm"];
        $db = \Config\Database::connect();

        $cek_rmcode = $db->table('tbl_master')->getWhere(['rm_code' => $rm_code])->getResult();
        $cek = is_numeric($weight_rm);
        if ($cek == true) {
            if (count($cek_rmcode) <= 0) {
                try {
                    $data = [
                        'rm_code' => $rm_code,
                        'type' => $type,
                        'weight_rm' => $weight_rm
                    ];

                    $db->table('tbl_master')->insert($data);

                    // $this->db->table($this->table)->where($kondisi)->update($data);

                    session()->setFlashdata('message', '<div class="alert alert-success" style="font-color:white"><b>Data Berhasil Ditambahkan</b></div>');
                } catch (Exception $e) {
                    session()->setFlashdata('message', '<div class="alert alert-danger" style="font-color:white"><b>Data Gagal Dimasukan</b></div>');
                }
            } else {
                session()->setFlashdata('message', '<div class="alert alert-danger" style="font-color:white"><b>Data Sudah Ada</b></div>');
            }
        } else {
            session()->setFlashdata('message', '<div class="alert alert-danger" style="font-color:white"><b>Weight_rm harus berupa angka</b></div>');
        }

        return redirect()->to('/mastercontroller/lihatmaster');
    }

    public function uploadMaster()
    {
        $Master = new MasterModel();
        $Master->emptyTable('tbl_master');

        $file_excel = $this->request->getFile('fileexcel');
        $ext = $file_excel->getClientExtension();
        if ($ext == 'xls') {
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
        $spreadsheet = $render->load($file_excel);

        $data = $spreadsheet->getActiveSheet()->toArray();
        foreach ($data as $x => $row) {
            if ($x == 0) {
                continue;
            }

            $rm_code = $row[0];
            $type = $row[1];
            $weight_rm = $row[2];

            $db = \Config\Database::connect();

            $cekrm_code = $db->table('tbl_rm')->getWhere(['kode_sap' => $rm_code])->getResult();

            if (count($cekrm_code) > 0) {
                session()->setFlashdata('message', '<b style="color:red">Data Gagal di Upload,  rm code ada yang sama</b>');
            } else {

                $simpandata = [
                    'rm_code' => $rm_code,
                    'type' => $type,
                    'weight_rm' => $weight_rm
                ];

                $db->table('tbl_master')->insert($simpandata);
                session()->setFlashdata('message', '<div class="alert alert-success" style="font-color:white"><b>Data Berhasil Ditambahkan</b></div>');
            }
        }

        return redirect()->to('/mastercontroller/lihatmaster');
    }



    public function editMaster()
    {
        $rm_code = $_POST["rm_code"];
        $type = $_POST["type"];
        $weight_rm = $_POST["weight_rm"];

        $data = [
            'rm_code' => $rm_code
        ];

        $update = [
            'type' => $type,
            'weight_rm' => $weight_rm
        ];

        $this->db->table('tbl_master')->where($data)->update($update);
        session()->setFlashdata('message', '<div class="alert alert-success" style="font-color:white"><b>Data Berhasil Diedit</b></div>');
        return redirect()->to('/mastercontroller/lihatmaster');
    }




    public function deleteMaster()
    {
        $db = \Config\Database::connect();
        $rm_code = $_POST['rm_code'];
        $type = $_POST['type'];
        $weight_rm = $_POST['weight_rm'];

        $data = [
            'rm_code' => $rm_code,
        ];

        $db->table('tbl_master')->delete($data);
        session()->setFlashdata('message', '<div class="alert alert-success" style="font-color:white"><b>Data Berhasil Dihapus</b></div>');

        return redirect()->to('/mastercontroller/lihatmaster');
    }


    public function export()
    {
        $borderstyle = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],

        ];

        $dataMaster = $this->masterModel->dataMaster();
        if (!empty($dataMaster)) {
            $spreadsheet = new Spreadsheet();
            $spreadsheet->setActiveSheetIndex(0)->getColumnDimension('A')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(0)->getColumnDimension('B')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(0)->getColumnDimension('C')->setAutoSize(true);

            $sheet = $spreadsheet->getActiveSheet()->setTitle('Master');
            $sheet->setCellValue('A1', 'RM CODE');
            $sheet->setCellValue('B1', 'TYPE');
            $sheet->setCellValue('C1', 'WEIGHT');
            $sheet->getStyle('A1:C1')->getFont()->setBold(true);

            $column = 2;
            foreach ($dataMaster as $row) {

                $sheet->setCellValue('A' . $column, $row->rm_code);
                $sheet->setCellValue('B' . $column, $row->type);
                $sheet->setCellValue('C' . $column, $row->weight_rm);

                $sheet->getStyle('A1:C' . $column)->applyFromArray($borderstyle);
                // $sheet->getStyle('C' . $column)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                //     ->getStartColor()->setRGB('FFFF00');
                $column++;
            }
        } else {
            $spreadsheet = new Spreadsheet();
            $spreadsheet->getActiveSheet()->setTitle('Master');
        }
        $writer = new Xlsx($spreadsheet);
        $fileName = 'MasterRM';
        $writer->save($fileName);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');
        flush();
        readfile($fileName);
        exit;
    }
}
