<?php

use CodeItNow\BarcodeBundle\Utils\QrCode;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="\warehouserm\public\img\aisoft.png" type="image/gif">

    <title>Tag <?= $tittle; ?></title>
    <style>
        .container {
            font-size: 18px;
        }

        table {
            border-collapse: collapse;
            border: 1px solid black;
            margin: auto;
        }
    </style>
</head>

<body>
    <?php
    error_reporting(0);
    //  print_r($print);
    foreach ($print as $row) {
        $kodesap = $row->kode_sap; // Ambil data kode sap
        $partnorunning = $row->part_no_running; // Ambil data part no running
        $rmcode = $row->rm_code; // Ambil data rm code
        $type = $row->type; // Ambil data type
        $groupmachine = $row->group_machine;
        $rmspecArr = (explode('DIA', $type));



        $rmspec = $rmspecArr[0];

        if (sizeof($rmspecArr) == 2) {
            $supplierArr = (explode('M ', $rmspecArr[1]));

            if (sizeof($supplierArr) == 1) {
                $supplierArr2 = (explode('M', $rmspecArr[1]));
                $rmdia = $supplierArr2[0];
                $supplier = $supplierArr2[1];
            } else {
                $rmdia = $supplierArr[0];
                $supplier = $supplierArr[1];
            }
        } else {
            $supplierTemp =  $rmspecArr[1] . 'DIA' . $rmspecArr[2];
            $supplierArr = (explode('M', $supplierTemp));
            $rmdia = $supplierArr[0];
            $supplier = $supplierArr[1];
        }

        $needdaybar = $row->need_day_bar; // Ambil data need day bar
        $di = $row->day_in; //Ambil data di
        $wofrom = $row->wo_from; //Ambil data wo from
        $woend = $row->wo_end; //Ambil data wo end

        $month = [
            '01' => 'Jan',
            '02' => 'Feb',
            '03' => 'Mar',
            '04' => 'Apr',
            '05' => 'Mei',
            '06' => 'Jun',
            '07' => 'Jul',
            '08' => 'Agu',
            '09' => 'Sep',
            '10' => 'Okt',
            '11' => 'Nov',
            '12' => 'Des'
        ];

        $diarr = explode('/', $di);
        $diDate = $diarr[0];
        $diMonth = $month[$diarr[1]];
        $diYear = $diarr[2];

        $wofromarr = explode('/', $wofrom);
        $woFromDate = $wofromarr[0];
        $woFromMonth = $month[$wofromarr[1]];
        $woFromYear = $wofromarr[2];


        $woendarr = explode('/', $woend);
        $woEndDate = $woendarr[0];
        $woEndMonth = $month[$woendarr[1]];
        $woEndYear = $woendarr[2];

        $qrCode = new QrCode();
        $qrCode
            ->setText($kodesap . ";" . $di . ";" . $needdaybar . ";" . $rmcode . ";" . $partnorunning . ";" . $type . ";" . $groupmachine)
            ->setSize(300)
            ->setPadding(10)
            ->setErrorCorrection('high')
            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
            ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
            ->setImageType(QrCode::IMAGE_TYPE_PNG);

        echo "<div class='container '>";
        echo "<br><p></p>";
        echo "<table cellspacing='0' border='1' cellpadding='6px ' class='mt-5 mb-1'>
        <tr>
            <th colspan='4'>PT NIHON SEIKI INDONESIA <br>
            DAILY MATERIAL ISSUE</th>
            <th> NO MESIN : " . $kodesap . "</th>
        </tr>       
        <tr>
            <th>DATE ISSUE </th>
            <th>" . $diDate . " " . $diMonth . " " . $diYear . "</th>
            <th colspan='3'>RM CODE</th>
        </tr>
        <tr>
            <th>WO</th>
            <th>FROM : " . $woFromDate . " " . $woFromMonth . " " . $woFromYear . "<br>
            END : " . $woEndDate . " " . $woEndMonth . " " . $woEndYear . "</th>
            <th rowspan='6' colspan='3' style='font-size: 60px; width: 400px;'>" . $rmcode . "
                <br>
                <img style='width: 100px;' src='data:" . $qrCode->getContentType() . ";base64," . $qrCode->generate() . "' />
        </tr>
        <tr>
            <th>SUPPLIER</th>
            <th>" . $supplier . "</th>
        </tr>
        <tr>
            <th>RM DIAMETER</th>
            <th style='width: 170px; border:1px; word-wrap:break-word; display:inline-block;' >" . $rmdia . "M</th>
        </tr>
        <tr>
            <th>RM SPEC</th>
            <th>" . $rmspec . "</th>
        </tr>
        <tr>
            <th>CHARGE/LOT NO</th>
            <th></th>
        </tr>
        <tr>
            <th>QTY</th>
            <th>" . $needdaybar . " BAR </th><!--NEED A DAY BAR-->
        </tr>
        <tr>
            <th>TARGET QTY</th>
            <th></th>
            <th>PART NO </th>
            <th colspan='2'>" . $partnorunning . "</th>
        </tr>
        <tr>
            <th>ACTUAL</th>
            <th></th>
            <th>TROLLEY</th>
            <th colspan='2'>OF</th>
        </tr>
    </table>
    <p style='text-align:center;'>-------------------------------------------------------------------------------------------------------------------</p>
    </div>";
    }
    ?>
</body>

</html>