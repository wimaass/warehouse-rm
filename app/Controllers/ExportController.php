<?php

namespace App\Controllers;

use App\Models\ExportModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportController extends BaseController
{
    protected $exportModel;
    public function __construct()
    {
        $this->exportModel = new ExportModel;
    }

    public function lihatScan()
    {
        $data = [
            'tittle'    => 'Review Scan',
            'scan'        => $this->exportModel->dataScan()
        ];
        // $data['tittle'] = 'Review Scan';
        // $data['scan'] = $this->exportModel->dataScan();
        echo view('review_scan', $data);
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

        $dataRev = $this->exportModel->exportRev();
        if (!empty($dataRev)) {
            $spreadsheet = new Spreadsheet();
            $spreadsheet->setActiveSheetIndex(0)->getColumnDimension('A')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(0)->getColumnDimension('B')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(0)->getColumnDimension('C')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(0)->getColumnDimension('D')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(0)->getColumnDimension('E')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(0)->getColumnDimension('F')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(0)->getColumnDimension('G')->setAutoSize(true);

            $sheet = $spreadsheet->getActiveSheet()->setTitle('REV');
            $sheet->setCellValue('A1', 'PART NO.RUNNING');
            $sheet->setCellValue('B1', 'RMCODE');
            $sheet->setCellValue('C1', 'DESKRIPSI');
            $sheet->setCellValue('D1', 'NEED DAY BAR');
            $sheet->setCellValue('E1', 'AKTUAL');
            $sheet->setCellValue('F1', 'WEIGHT');
            $sheet->setCellValue('G1', 'KONVERSI');
            $sheet->getStyle('A1:G1')->getFont()->setBold(true);
            $sheet->getStyle('G1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setRGB('FFFF00');

            $column = 2;
            foreach ($dataRev as $row) {

                $sheet->setCellValue('A' . $column, $row['part_no_running']);
                $sheet->setCellValue('B' . $column, $row['rm_code']);
                $sheet->setCellValue('C' . $column, $row['type']);
                $sheet->setCellValue('D' . $column, $row['need_day_bar']);
                $sheet->setCellValue('E' . $column, $row['qty_aktual']);
                $sheet->setCellValue('F' . $column, $row['weight_rm']);
                $sheet->setCellValue('G' . $column, "=E$column*F$column");

                $sheet->getStyle('A1:G' . $column)->applyFromArray($borderstyle);
                $sheet->getStyle('G' . $column)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()->setRGB('FFFF00');
                $column++;
            }
        } else {
            $spreadsheet = new Spreadsheet();
            $spreadsheet->getActiveSheet()->setTitle('REV');
        }
        $dataCnc1 = $this->exportModel->exportCnc1();
        if (!empty($dataCnc1)) {
            $sheet = $spreadsheet->createSheet()->setTitle('Cnc1');
            $spreadsheet->setActiveSheetIndex(1)->getColumnDimension('A')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(1)->getColumnDimension('B')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(1)->getColumnDimension('C')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(1)->getColumnDimension('D')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(1)->getColumnDimension('E')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(1)->getColumnDimension('F')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(1)->getColumnDimension('G')->setAutoSize(true);

            $sheet->setCellValue('A1', 'PART NO.RUNNING');
            $sheet->setCellValue('B1', 'RMCODE');
            $sheet->setCellValue('C1', 'DESKRIPSI');
            $sheet->setCellValue('D1', 'NEED DAY BAR');
            $sheet->setCellValue('E1', 'AKTUAL');
            $sheet->setCellValue('F1', 'WEIGHT');
            $sheet->setCellValue('G1', 'KONVERSI');
            $sheet->getStyle('A1:G1')->getFont()->setBold(true);
            $sheet->getStyle('G1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setRGB('FFFF00');


            $column = 2;
            foreach ($dataCnc1 as $row) {

                $sheet->setCellValue('A' . $column, $row['part_no_running']);
                $sheet->setCellValue('B' . $column, $row['rm_code']);
                $sheet->setCellValue('C' . $column, $row['type']);
                $sheet->setCellValue('D' . $column, $row['need_day_bar']);
                $sheet->setCellValue('E' . $column, $row['qty_aktual']);
                $sheet->setCellValue('F' . $column, $row['weight_rm']);
                $sheet->setCellValue('G' . $column, "=E$column*F$column");

                $sheet->getStyle('A1:G' . $column)->applyFromArray($borderstyle);
                $sheet->getStyle('G' . $column)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()->setRGB('FFFF00');

                $column++;
            }
        } else {
            $sheet = $spreadsheet->createSheet()->setTitle('Cnc1');
        }


        $dataCnc2 = $this->exportModel->exportCnc2();
        if (!empty($dataCnc2)) {
            $sheet = $spreadsheet->createSheet()->setTitle('Cnc2');
            $spreadsheet->setActiveSheetIndex(2)->getColumnDimension('A')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(2)->getColumnDimension('B')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(2)->getColumnDimension('C')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(2)->getColumnDimension('D')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(2)->getColumnDimension('E')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(2)->getColumnDimension('F')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(2)->getColumnDimension('G')->setAutoSize(true);

            $sheet->setCellValue('A1', 'PART NO.RUNNING');
            $sheet->setCellValue('B1', 'RMCODE');
            $sheet->setCellValue('C1', 'DESKRIPSI');
            $sheet->setCellValue('D1', 'NEED DAY BAR');
            $sheet->setCellValue('E1', 'AKTUAL');
            $sheet->setCellValue('F1', 'WEIGHT');
            $sheet->setCellValue('G1', 'KONVERSI');
            $sheet->getStyle('A1:G1')->getFont()->setBold(true);
            $sheet->getStyle('G1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setRGB('FFFF00');


            $column = 2;
            foreach ($dataCnc2 as $row) {

                $sheet->setCellValue('A' . $column, $row['part_no_running']);
                $sheet->setCellValue('B' . $column, $row['rm_code']);
                $sheet->setCellValue('C' . $column, $row['type']);
                $sheet->setCellValue('D' . $column, $row['need_day_bar']);
                $sheet->setCellValue('E' . $column, $row['qty_aktual']);
                $sheet->setCellValue('F' . $column, $row['weight_rm']);
                $sheet->setCellValue('G' . $column, "=E$column*F$column");

                $sheet->getStyle('A1:G' . $column)->applyFromArray($borderstyle);
                $sheet->getStyle('G' . $column)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()->setRGB('FFFF00');

                $column++;
            }
        } else {
            $sheet = $spreadsheet->createSheet()->setTitle('Cnc2');
        }


        $dataCnc3 = $this->exportModel->exportCnc3();
        if (!empty($dataCnc3)) {
            $sheet = $spreadsheet->createSheet()->setTitle('Cnc3');
            $spreadsheet->setActiveSheetIndex(3)->getColumnDimension('A')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(3)->getColumnDimension('B')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(3)->getColumnDimension('C')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(3)->getColumnDimension('D')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(3)->getColumnDimension('E')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(3)->getColumnDimension('F')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(3)->getColumnDimension('G')->setAutoSize(true);

            $sheet->setCellValue('A1', 'PART NO.RUNNING');
            $sheet->setCellValue('B1', 'RMCODE');
            $sheet->setCellValue('C1', 'DESKRIPSI');
            $sheet->setCellValue('D1', 'NEED DAY BAR');
            $sheet->setCellValue('E1', 'AKTUAL');
            $sheet->setCellValue('F1', 'WEIGHT');
            $sheet->setCellValue('G1', 'KONVERSI');
            $sheet->getStyle('A1:G1')->getFont()->setBold(true);
            $sheet->getStyle('G1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setRGB('FFFF00');


            $column = 2;
            foreach ($dataCnc3 as $row) {

                $sheet->setCellValue('A' . $column, $row['part_no_running']);
                $sheet->setCellValue('B' . $column, $row['rm_code']);
                $sheet->setCellValue('C' . $column, $row['type']);
                $sheet->setCellValue('D' . $column, $row['need_day_bar']);
                $sheet->setCellValue('E' . $column, $row['qty_aktual']);
                $sheet->setCellValue('F' . $column, $row['weight_rm']);
                $sheet->setCellValue('G' . $column, "=E$column*F$column");

                $sheet->getStyle('A1:G' . $column)->applyFromArray($borderstyle);
                $sheet->getStyle('G' . $column)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()->setRGB('FFFF00');

                $column++;
            }
        } else {
            $sheet = $spreadsheet->createSheet()->setTitle('Cnc3');
        }


        $dataCam = $this->exportModel->exportCam();
        if (!empty($dataCam)) {
            $sheet = $spreadsheet->createSheet()->setTitle('Cam');
            $spreadsheet->setActiveSheetIndex(4)->getColumnDimension('A')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(4)->getColumnDimension('B')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(4)->getColumnDimension('C')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(4)->getColumnDimension('D')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(4)->getColumnDimension('E')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(4)->getColumnDimension('F')->setAutoSize(true);
            $spreadsheet->setActiveSheetIndex(4)->getColumnDimension('G')->setAutoSize(true);

            $sheet->setCellValue('A1', 'PART NO.RUNNING');
            $sheet->setCellValue('B1', 'RMCODE');
            $sheet->setCellValue('C1', 'DESKRIPSI');
            $sheet->setCellValue('D1', 'NEED DAY BAR');
            $sheet->setCellValue('E1', 'AKTUAL');
            $sheet->setCellValue('F1', 'WEIGHT');
            $sheet->setCellValue('G1', 'KONVERSI');
            $sheet->getStyle('A1:G1')->getFont()->setBold(true);
            $sheet->getStyle('G1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setRGB('FFFF00');


            $column = 2;
            foreach ($dataCam as $row) {

                $sheet->setCellValue('A' . $column, $row['part_no_running']);
                $sheet->setCellValue('B' . $column, $row['rm_code']);
                $sheet->setCellValue('C' . $column, $row['type']);
                $sheet->setCellValue('D' . $column, $row['need_day_bar']);
                $sheet->setCellValue('E' . $column, $row['qty_aktual']);
                $sheet->setCellValue('F' . $column, $row['weight_rm']);
                $sheet->setCellValue('G' . $column, "=E$column*F$column");

                $sheet->getStyle('A1:G' . $column)->applyFromArray($borderstyle);
                $sheet->getStyle('G' . $column)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()->setRGB('FFFF00');

                $column++;
            }
        } else {
            $sheet = $spreadsheet->createSheet()->setTitle('Cam');
        }


        $writer = new Xlsx($spreadsheet);
        $fileName = 'Export_RawMaterial';
        $writer->save($fileName);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');
        flush();
        readfile($fileName);
        exit;
    }

    public function delete()
    {
        $exportmodel = new ExportModel();
        $exportmodel->emptyTable('tbl_scan');

        session()->setFlashdata('message', '<div class="alert alert-success">Data Export Berhasil Di Hapus</div>');

        return redirect()->to('/exportcontroller/lihatScan');
    }
}
