<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="\warehouserm\public\img\aisoft.png" type="image/gif">

    <title><?= $tittle2; ?> Approval</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            border: 1px solid black;
        }

        .layout {
            font-size: 10px;
        }

        th {
            padding: 3px;
        }

        .ttd {
            font-size: 10px;
            width: 550px;
            text-align: center;
        }

        .suplay {
            margin-left: 65%;
            font-size: 10px;
        }
    </style>
</head>

<body>
    <?php if (!empty($tanggal)) { ?>
        <h5 style="text-align: center;">LOADING RAW MATERIAL <?= $tanggal[0]['wo_from'] ?> - <?= $tanggal[0]['wo_end'] ?> <br>
            <?= $tittle ?>
        </h5>
        <div class="suplay">
            Supply Date : <br>
            Entry Date :
        </div>
        <table class="layout" border="1" cellspacing="0">
            <thead>
                <tr>
                    <th style="border:1px; width: 50px; word-wrap:break-word; display:inline-block;">No Machine</th>
                    <th>Part No.Running</th>
                    <th>RM Code</th>
                    <th>Type</th>
                    <th style="border:1px; width: 70px; word-wrap:break-word; display:inline-block;">NEED @DAY (BAR)</th>
                    <th style="width: 70px;">Remark</th>
                    <th>Prod. Confirm</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($print)) {
                    foreach ($print as $dt) {
                ?>
                        <tr>
                            <td><?= $dt->kode_sap; ?></td>
                            <td><?= $dt->part_no_running; ?></td>
                            <td><?= $dt->rm_code; ?></td>
                            <td><?= $dt->type; ?></td>
                            <td style="text-align:right;"><?= $dt->need_day_bar; ?></td>
                            <td></td>
                            <td></td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="9">Tidak ada data</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <br>
        <table class="ttd" border="1" cellspacing="0">
            <tbody>
                <tr>
                    <td>Checked By</td>
                    <td>Checked By</td>
                    <td>Re-Checked By</td>
                </tr>
                <tr>
                    <td style="height:70px;"></td>
                    <td style="height:70px;"></td>
                    <td style="height:70px;"></td>
                </tr>
                <tr>
                    <td>Production</td>
                    <td>Bambang</td>
                    <td>Cep Suwandi</td>
                </tr>
            </tbody>
        </table>
    <?php
    } else { ?>
        <p>Tidak Ada Data</p>
    <?php
    }
    ?>
</body>

</html>