<?php

namespace App\Controllers;

use App\Models\PrintModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class PrintController extends BaseController
{
    protected $printModel;
    public function __construct()
    {
        $this->printModel = new PrintModel();
        $this->db = \Config\Database::connect();
    }

    // mengirim data ke view data_show
    public function Rev()
    {
        $data = [
            'tittle'    => 'Revisi',
            'tag'       => 'tagRev',
            'approve'   => 'approveRev',
            'export'    => 'excelRev',
            'Rm'        => $this->printModel->Rev()
        ];
        echo view('data_show', $data);
    }

    public function Cnc1()
    {
        $data = [
            'tittle'    => 'Cnc Line 1',
            'tag'       => 'tagCnc1',
            'approve'   => 'approveCnc1',
            'export'    => 'excelCnc1',
            'Rm'        => $this->printModel->Cnc1()
        ];
        echo view('data_show', $data);
    }

    public function Cnc2()
    {
        $data = [
            'tittle'    => 'Cnc Line 2',
            'tag'       => 'tagCnc2',
            'approve'   => 'approveCnc2',
            'export'    => 'excelCnc2',
            'Rm'        => $this->printModel->Cnc2()
        ];
        echo view('data_show', $data);
    }

    public function Cnc3()
    {
        $data = [
            'tittle'    => 'Cnc Line 3',
            'tag'       => 'tagCnc3',
            'approve'   => 'approveCnc3',
            'export'    => 'excelCnc3',
            'Rm'        => $this->printModel->Cnc3()
        ];
        echo view('data_show', $data);
    }

    public function Cam()
    {
        $data = [
            'tittle'    => 'Cam',
            'tag'       => 'tagCam',
            'approve'   => 'approveCam',
            'export'    => 'excelCam',
            'Rm'        => $this->printModel->Cam()
        ];
        echo view('data_show', $data);
    }


    // mengirim data ke view print_tag
    public function tagRev()
    {
        $data = [
            'print' => $this->printModel->Rev(),
            'tittle' => 'Revisi'
        ];
        echo view('print_tag', $data);
    }

    public function tagCnc1()
    {
        $data = [
            'print' => $this->printModel->Cnc1(),
            'tittle' => 'Cnc Line 1'
        ];
        echo view('print_tag', $data);
    }

    public function tagCnc2()
    {
        $data = [
            'print' => $this->printModel->Cnc2(),
            'tittle' => 'Cnc Line 2'
        ];
        echo view('print_tag', $data);
    }

    public function tagCnc3()
    {
        $data = [
            'print' => $this->printModel->Cnc3(),
            'tittle' => 'Cnc Line 3'
        ];
        echo view('print_tag', $data);
    }

    public function tagCam()
    {
        $data = [
            'print' => $this->printModel->Cam(),
            'tittle' => 'Cam'
        ];
        echo view('print_tag', $data);
    }


    // mengirim data ke view print_approval
    public function approveRev()
    {
        $data = [
            'tittle'    => 'REVISI',
            'tittle2'   => 'Revisi',
            'print'     => $this->printModel->Rev(),
            'tanggal'   => $this->printModel->dateRev()
        ];
        echo view('print_approval', $data);
    }

    public function approveCnc1()
    {
        $data = [
            'tittle'    => 'CNC LINE 1',
            'tittle2'   => 'Cnc Line 1',
            'print'     => $this->printModel->Cnc1(),
            'tanggal'   => $this->printModel->dateCnc1()
        ];
        echo view('print_approval', $data);
    }

    public function approveCnc2()
    {
        $data = [
            'tittle'    => 'CNC LINE 2',
            'tittle2'   => 'Cnc Line 2',
            'print'     => $this->printModel->Cnc2(),
            'tanggal'   => $this->printModel->dateCnc2()
        ];
        echo view('print_approval', $data);
    }

    public function approveCnc3()
    {
        $data = [
            'tittle'    => 'CNC LINE 3',
            'tittle2'   => 'Cnc Line 3',
            'print'     => $this->printModel->Cnc3(),
            'tanggal'   => $this->printModel->dateCnc3()
        ];
        echo view('print_approval', $data);
    }

    public function approveCam()
    {
        $data = [
            'tittle'    => 'CAM',
            'tittle2'   => 'Cam',
            'print'     => $this->printModel->Cam(),
            'tanggal'   => $this->printModel->dateCam()
        ];
        echo view('print_approval', $data);
    }

    public function excelRev()
    {
        $data = $this->printModel->Rev();
        $date = $this->printModel->dateRev();
        $groupmachine = 'REVISI';
        $wf = $date[0]['wo_from'];
        $we = $date[0]['wo_end'];
        if (!empty($data)  && !empty($date)) {

            $borderstyle = [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                ],

            ];

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->mergeCells('A1:G1');
            $sheet->mergeCells('A2:G2');

            $sheet->getStyle('A1:G2')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('A1:G2')->getFont()->setBold(true);

            $sheet->setCellValue('A1', 'LOADING RAW MATERIAL ' . $date[0]['wo_from'] . ' - ' . $date[0]['wo_end']);
            $sheet->setCellValue('A2', $groupmachine);
            $sheet->setCellValue('E3', 'Supply Date :');
            $sheet->setCellValue('E4', 'Entry Date :');

            $sheet->setCellValue('A5', 'No.Machine');
            $sheet->setCellValue('B5', 'Part No Running');
            $sheet->setCellValue('C5', 'RM Code');
            $sheet->setCellValue('D5', 'Type');
            $sheet->setCellValue('E5', 'NEED @DAY (BAR)');
            $sheet->setCellValue('F5', 'Remark');
            $sheet->setCellValue('G5', 'Prod. Confirm');
            $sheet->getStyle('A5:G5')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('A5:G5')->getFont()->setBold(true);

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setWidth(220, 'pt');
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setWidth(95, 'px');
            $sheet->getColumnDimension('G')->setAutoSize(true);

            $column = 6;
            foreach ($data as $row) {
                $sheet->setCellValue('A' . $column, $row->kode_sap);
                $sheet->setCellValue('B' . $column, $row->part_no_running);
                $sheet->setCellValue('C' . $column, $row->rm_code);
                $sheet->setCellValue('D' . $column, $row->type);
                $sheet->setCellValue('E' . $column, $row->need_day_bar);
                $sheet->setCellValue('F' . $column, ' ');
                $sheet->setCellValue('G' . $column, ' ');

                $sheet->getStyle('A5:G' . $column)->applyFromArray($borderstyle);
                // $sheet->getStyle('D' . $column)->getAlignment()->setWrapText(true);
                $column++;
                $ttd = $column;
            }

            $temp = $ttd + 1;
            $sheet->mergeCells("B$temp:C$temp");
            $sheet->mergeCells("E$temp:F$temp");
            $sheet->mergeCells('B' . ($temp + 1) . ':C' . ($temp + 1));
            $sheet->mergeCells('E' . ($temp + 1) . ':F' . ($temp + 1));
            $sheet->mergeCells('B' . ($temp + 2) . ':C' . ($temp + 2));
            $sheet->mergeCells('E' . ($temp + 2) . ':F' . ($temp + 2));

            $sheet->getRowDimension($temp + 1)->setRowHeight(65, 'pt');

            $sheet->setCellValue('B' . $temp, 'Checked By');
            $sheet->setCellValue('D' . $temp, 'Checked By');
            $sheet->setCellValue('E' . $temp, 'Re-Checked By');

            $sheet->setCellValue('B' . ($temp + 2), 'Production');
            $sheet->setCellValue('D' . ($temp + 2), 'Bambang');
            $sheet->setCellValue('E' . ($temp + 2), 'Cep Suwandi');

            $sheet->getStyle('B' . $temp . ':F' . ($temp + 2))->applyFromArray($borderstyle);
            $sheet->getStyle('B' . $temp . ':F' . ($temp + 2))->getAlignment()->setHorizontal('center');;

            $writer = new Xlsx($spreadsheet);
            $fileName = 'Loading Revisi';
            $writer->save($fileName);

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
            header('Cache-Control: max-age=0');
            flush();
            readfile($fileName);

            exit;
        } else {
            echo 'Tidak ada Data';
        }
    }

    public function excelCnc1()
    {
        $data = $this->printModel->Cnc1();
        $date = $this->printModel->dateCnc1();
        $groupmachine = 'CNC LINE 1';
        if (!empty($date) && !empty($data)) {
            $borderstyle = [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                ],

            ];

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->mergeCells('A1:G1');
            $sheet->mergeCells('A2:G2');

            $sheet->getStyle('A1:G2')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('A1:G2')->getFont()->setBold(true);

            $sheet->setCellValue('A1', 'LOADING RAW MATERIAL ' . $date[0]['wo_from'] . ' - ' . $date[0]['wo_end']);
            $sheet->setCellValue('A2', $groupmachine);
            $sheet->setCellValue('E3', 'Supply Date :');
            $sheet->setCellValue('E4', 'Entry Date :');

            $sheet->setCellValue('A5', 'No.Machine');
            $sheet->setCellValue('B5', 'Part No Running');
            $sheet->setCellValue('C5', 'RM Code');
            $sheet->setCellValue('D5', 'Type');
            $sheet->setCellValue('E5', 'NEED @DAY (BAR)');
            $sheet->setCellValue('F5', 'Remark');
            $sheet->setCellValue('G5', 'Prod. Confirm');
            $sheet->getStyle('A5:G5')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('A5:G5')->getFont()->setBold(true);

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setWidth(220, 'pt');
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setWidth(95, 'px');
            $sheet->getColumnDimension('G')->setAutoSize(true);

            $column = 6;
            foreach ($data as $row) {
                $sheet->setCellValue('A' . $column, $row->kode_sap);
                $sheet->setCellValue('B' . $column, $row->part_no_running);
                $sheet->setCellValue('C' . $column, $row->rm_code);
                $sheet->setCellValue('D' . $column, $row->type);
                $sheet->setCellValue('E' . $column, $row->need_day_bar);
                $sheet->setCellValue('F' . $column, ' ');
                $sheet->setCellValue('G' . $column, ' ');

                $sheet->getStyle('A5:G' . $column)->applyFromArray($borderstyle);
                // $sheet->getStyle('D' . $column)->getAlignment()->setWrapText(true);
                $column++;
                $ttd = $column;
            }

            $temp = $ttd + 1;
            $sheet->mergeCells("B$temp:C$temp");
            $sheet->mergeCells("E$temp:F$temp");
            $sheet->mergeCells('B' . ($temp + 1) . ':C' . ($temp + 1));
            $sheet->mergeCells('E' . ($temp + 1) . ':F' . ($temp + 1));
            $sheet->mergeCells('B' . ($temp + 2) . ':C' . ($temp + 2));
            $sheet->mergeCells('E' . ($temp + 2) . ':F' . ($temp + 2));

            $sheet->getRowDimension(($temp + 1))->setRowHeight(65, 'pt');

            $sheet->setCellValue('B' . $temp, 'Checked By');
            $sheet->setCellValue('D' . $temp, 'Checked By');
            $sheet->setCellValue('E' . $temp, 'Re-Checked By');

            $sheet->setCellValue('B' . ($temp + 2), 'Production');
            $sheet->setCellValue('D' . ($temp + 2), 'Bambang');
            $sheet->setCellValue('E' . ($temp + 2), 'Cep Suwandi');

            $sheet->getStyle('B' . $temp . ':F' . ($temp + 2))->applyFromArray($borderstyle);
            $sheet->getStyle('B' . $temp . ':F' . ($temp + 2))->getAlignment()->setHorizontal('center');

            $writer = new Xlsx($spreadsheet);
            $fileName = 'Loading Cnc Line 1';
            $writer->save($fileName);

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
            header('Cache-Control: max-age=0');
            flush();
            readfile($fileName);
            exit;
        } else {
            echo "Tidak Ada Data";
        }
    }

    public function excelCnc2()
    {
        $data = $this->printModel->Cnc2();
        $date = $this->printModel->dateCnc2();
        $groupmachine = 'CNC LINE 2';
        if (!empty($date) && !empty($data)) {
            $borderstyle = [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                ],

            ];

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->mergeCells('A1:G1');
            $sheet->mergeCells('A2:G2');

            $sheet->getStyle('A1:G2')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('A1:G2')->getFont()->setBold(true);

            $sheet->setCellValue('A1', 'LOADING RAW MATERIAL ' . $date[0]['wo_from'] . ' - ' . $date[0]['wo_end']);
            $sheet->setCellValue('A2', $groupmachine);
            $sheet->setCellValue('E3', 'Supply Date :');
            $sheet->setCellValue('E4', 'Entry Date :');

            $sheet->setCellValue('A5', 'No.Machine');
            $sheet->setCellValue('B5', 'Part No Running');
            $sheet->setCellValue('C5', 'RM Code');
            $sheet->setCellValue('D5', 'Type');
            $sheet->setCellValue('E5', 'NEED @DAY (BAR)');
            $sheet->setCellValue('F5', 'Remark');
            $sheet->setCellValue('G5', 'Prod. Confirm');
            $sheet->getStyle('A5:G5')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('A5:G5')->getFont()->setBold(true);

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setWidth(220, 'pt');
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setWidth(95, 'px');
            $sheet->getColumnDimension('G')->setAutoSize(true);

            $column = 6;
            foreach ($data as $row) {
                $sheet->setCellValue('A' . $column, $row->kode_sap);
                $sheet->setCellValue('B' . $column, $row->part_no_running);
                $sheet->setCellValue('C' . $column, $row->rm_code);
                $sheet->setCellValue('D' . $column, $row->type);
                $sheet->setCellValue('E' . $column, $row->need_day_bar);
                $sheet->setCellValue('F' . $column, ' ');
                $sheet->setCellValue('G' . $column, ' ');

                $sheet->getStyle('A5:G' . $column)->applyFromArray($borderstyle);
                // $sheet->getStyle('D' . $column)->getAlignment()->setWrapText(true);
                $column++;
                $ttd = $column;
            }

            $temp = $ttd + 1;
            $sheet->mergeCells("B$temp:C$temp");
            $sheet->mergeCells("E$temp:F$temp");
            $sheet->mergeCells('B' . ($temp + 1) . ':C' . ($temp + 1));
            $sheet->mergeCells('E' . ($temp + 1) . ':F' . ($temp + 1));
            $sheet->mergeCells('B' . ($temp + 2) . ':C' . ($temp + 2));
            $sheet->mergeCells('E' . ($temp + 2) . ':F' . ($temp + 2));

            $sheet->getRowDimension(($temp + 1))->setRowHeight(65, 'pt');

            $sheet->setCellValue('B' . $temp, 'Checked By');
            $sheet->setCellValue('D' . $temp, 'Checked By');
            $sheet->setCellValue('E' . $temp, 'Re-Checked By');

            $sheet->setCellValue('B' . ($temp + 2), 'Production');
            $sheet->setCellValue('D' . ($temp + 2), 'Bambang');
            $sheet->setCellValue('E' . ($temp + 2), 'Cep Suwandi');

            $sheet->getStyle('B' . $temp . ':F' . ($temp + 2))->applyFromArray($borderstyle);
            $sheet->getStyle('B' . $temp . ':F' . ($temp + 2))->getAlignment()->setHorizontal('center');

            $writer = new Xlsx($spreadsheet);
            $fileName = 'Loading Cnc Line 2';
            $writer->save($fileName);

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
            header('Cache-Control: max-age=0');
            flush();
            readfile($fileName);
            exit;
        } else {
            echo 'Tidak ada Data';
        }
    }

    public function excelCnc3()
    {
        $data = $this->printModel->Cnc3();
        $date = $this->printModel->dateCnc3();
        $groupmachine = 'CNC LINE 3';
        if (!empty($date) && !empty($data)) {
            $borderstyle = [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                ],

            ];

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->mergeCells('A1:G1');
            $sheet->mergeCells('A2:G2');

            $sheet->getStyle('A1:G2')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('A1:G2')->getFont()->setBold(true);

            $sheet->setCellValue('A1', 'LOADING RAW MATERIAL ' . $date[0]['wo_from'] . ' - ' . $date[0]['wo_end']);
            $sheet->setCellValue('A2', $groupmachine);
            $sheet->setCellValue('E3', 'Supply Date :');
            $sheet->setCellValue('E4', 'Entry Date :');

            $sheet->setCellValue('A5', 'No.Machine');
            $sheet->setCellValue('B5', 'Part No Running');
            $sheet->setCellValue('C5', 'RM Code');
            $sheet->setCellValue('D5', 'Type');
            $sheet->setCellValue('E5', 'NEED @DAY (BAR)');
            $sheet->setCellValue('F5', 'Remark');
            $sheet->setCellValue('G5', 'Prod. Confirm');
            $sheet->getStyle('A5:G5')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('A5:G5')->getFont()->setBold(true);

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setWidth(220, 'pt');
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setWidth(95, 'px');
            $sheet->getColumnDimension('G')->setAutoSize(true);

            $column = 6;
            foreach ($data as $row) {
                $sheet->setCellValue('A' . $column, $row->kode_sap);
                $sheet->setCellValue('B' . $column, $row->part_no_running);
                $sheet->setCellValue('C' . $column, $row->rm_code);
                $sheet->setCellValue('D' . $column, $row->type);
                $sheet->setCellValue('E' . $column, $row->need_day_bar);
                $sheet->setCellValue('F' . $column, ' ');
                $sheet->setCellValue('G' . $column, ' ');

                $sheet->getStyle('A5:G' . $column)->applyFromArray($borderstyle);
                // $sheet->getStyle('D' . $column)->getAlignment()->setWrapText(true);
                $column++;
                $ttd = $column;
            }

            $temp = $ttd + 1;
            $sheet->mergeCells("B$temp:C$temp");
            $sheet->mergeCells("E$temp:F$temp");
            $sheet->mergeCells('B' . ($temp + 1) . ':C' . ($temp + 1));
            $sheet->mergeCells('E' . ($temp + 1) . ':F' . ($temp + 1));
            $sheet->mergeCells('B' . ($temp + 2) . ':C' . ($temp + 2));
            $sheet->mergeCells('E' . ($temp + 2) . ':F' . ($temp + 2));

            $sheet->getRowDimension(($temp + 1))->setRowHeight(65, 'pt');

            $sheet->setCellValue('B' . $temp, 'Checked By');
            $sheet->setCellValue('D' . $temp, 'Checked By');
            $sheet->setCellValue('E' . $temp, 'Re-Checked By');

            $sheet->setCellValue('B' . ($temp + 2), 'Production');
            $sheet->setCellValue('D' . ($temp + 2), 'Bambang');
            $sheet->setCellValue('E' . ($temp + 2), 'Cep Suwandi');

            $sheet->getStyle('B' . $temp . ':F' . ($temp + 2))->applyFromArray($borderstyle);
            $sheet->getStyle('B' . $temp . ':F' . ($temp + 2))->getAlignment()->setHorizontal('center');

            $writer = new Xlsx($spreadsheet);
            $fileName = 'Loading Cnc Line 3';
            $writer->save($fileName);

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
            header('Cache-Control: max-age=0');
            flush();
            readfile($fileName);
            exit;
        } else {
            echo 'Tidak ada Data';
        }
    }

    public function excelCam()
    {
        $data = $this->printModel->Cam();
        $date = $this->printModel->dateCam();
        $groupmachine = 'CAM';
        if (!empty($date) && !empty($data)) {
            $borderstyle = [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                ],

            ];

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->mergeCells('A1:G1');
            $sheet->mergeCells('A2:G2');

            $sheet->getStyle('A1:G2')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('A1:G2')->getFont()->setBold(true);

            $sheet->setCellValue('A1', 'LOADING RAW MATERIAL ' . $date[0]['wo_from'] . ' - ' . $date[0]['wo_end']);
            $sheet->setCellValue('A2', $groupmachine);
            $sheet->setCellValue('E3', 'Supply Date :');
            $sheet->setCellValue('E4', 'Entry Date :');

            $sheet->setCellValue('A5', 'No.Machine');
            $sheet->setCellValue('B5', 'Part No Running');
            $sheet->setCellValue('C5', 'RM Code');
            $sheet->setCellValue('D5', 'Type');
            $sheet->setCellValue('E5', 'NEED @DAY (BAR)');
            $sheet->setCellValue('F5', 'Remark');
            $sheet->setCellValue('G5', 'Prod. Confirm');
            $sheet->getStyle('A5:G5')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('A5:G5')->getFont()->setBold(true);

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setWidth(220, 'pt');
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setWidth(95, 'px');
            $sheet->getColumnDimension('G')->setAutoSize(true);

            $column = 6;
            foreach ($data as $row) {
                $sheet->setCellValue('A' . $column, $row->kode_sap);
                $sheet->setCellValue('B' . $column, $row->part_no_running);
                $sheet->setCellValue('C' . $column, $row->rm_code);
                $sheet->setCellValue('D' . $column, $row->type);
                $sheet->setCellValue('E' . $column, $row->need_day_bar);
                $sheet->setCellValue('F' . $column, ' ');
                $sheet->setCellValue('G' . $column, ' ');

                $sheet->getStyle('A5:G' . $column)->applyFromArray($borderstyle);
                // $sheet->getStyle('D' . $column)->getAlignment()->setWrapText(true);
                $column++;
                $ttd = $column;
            }

            $temp = $ttd + 1;
            $sheet->mergeCells("B$temp:C$temp");
            $sheet->mergeCells("E$temp:F$temp");
            $sheet->mergeCells('B' . ($temp + 1) . ':C' . ($temp + 1));
            $sheet->mergeCells('E' . ($temp + 1) . ':F' . ($temp + 1));
            $sheet->mergeCells('B' . ($temp + 2) . ':C' . ($temp + 2));
            $sheet->mergeCells('E' . ($temp + 2) . ':F' . ($temp + 2));

            $sheet->getRowDimension($temp + 1)->setRowHeight(65, 'pt');

            $sheet->setCellValue('B' . $temp, 'Checked By');
            $sheet->setCellValue('D' . $temp, 'Checked By');
            $sheet->setCellValue('E' . $temp, 'Re-Checked By');

            $sheet->setCellValue('B' . ($temp + 2), 'Production');
            $sheet->setCellValue('D' . ($temp + 2), 'Bambang');
            $sheet->setCellValue('E' . ($temp + 2), 'Cep Suwandi');

            $sheet->getStyle('B' . $temp . ':F' . ($temp + 2))->applyFromArray($borderstyle);
            $sheet->getStyle('B' . $temp . ':F' . ($temp + 2))->getAlignment()->setHorizontal('center');

            $writer = new Xlsx($spreadsheet);
            $fileName = 'Loading Cam';
            $writer->save($fileName);

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
            header('Cache-Control: max-age=0');
            flush();
            readfile($fileName);
            exit;
        } else {
            echo 'Tidak ada Data';
        }
    }
}
