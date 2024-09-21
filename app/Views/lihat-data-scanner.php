<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="\warehouserm\public\img\aisoft.png" type="image/gif">

    <!-- Bootstrap CSS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="/DataTables/datatables.min.js"></script> -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/popper.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css" /> -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.4/cr-1.5.5/fc-4.0.1/r-2.2.9/sc-2.0.5/sb-1.3.1/datatables.min.css" />

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.4/cr-1.5.5/fc-4.0.1/r-2.2.9/sc-2.0.5/sb-1.3.1/datatables.min.js"></script>

    <script>
        $(function() {
            $("#table_id").DataTable({
                "responsive": true,
                "lenghtChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "colvis"],
                "iDisplayLength": 100
            }).buttons().container().appendTo('#table_id_wrapper .col-md-6:eq(0)');
        });
    </script>
</head>

<body>
    <?php
    if ($search == null) {
    ?>
        <form action="/scancontroller/search" method="GET">
            <table>
                <tr>
                    <td><label for="kode_sap">KODE SAP</label></td>
                    <td><input type="text" name="kode_sap" id="kode_sap"></td>
                </tr>
                <tr>
                    <td><label for="group_machine">GROUP MACHINE</label></td>
                    <td> <input type="text" name="group_machine" id="group_machine"></td>
                </tr>
                <tr>
                    <td><button type="submit">Search</button></td>
                </tr>
            </table>
        </form>
    <?php
    } else {
        print_r($search);
    ?>
        <form action="/scancontroller/search" method="GET">
            <table>
                <tr>
                    <td><label for="kode_sap">KODE SAP</label></td>
                    <td><input type="text" name="kode_sap" id="kode_sap"></td>
                </tr>
                <tr>
                    <td><label for="group_machine">GROUP MACHINE</label></td>
                    <td> <input type="text" name="group_machine" id="group_machine"></td>
                </tr>
                <tr>
                    <td><button type="submit">Search</button></td>
                </tr>
            </table>
        </form>
        <br>
        <table width="500p px" border="1">
            <thead>
                <tr>
                    <th>Part No.Running</th>
                    <td>15165265</td>
                </tr>
                <tr>
                    <th>RM Code</th>
                    <td>RM1105</td>
                </tr>
                <tr>
                    <th>Need Day Bar</th>
                    <td>67</td>
                </tr>
                <tr>
                    <th>QTY AKTUAL</th>
                    <td>78</td>
                </tr>
                <tr>
                    <th>Group Machine</th>
                    <td>Cnc Line 1</td>
                </tr>
                <tr>
                    <th>ACTION</th>
                    <td>
                        <button>Hapus</button>
                    </td>
                </tr>
            </thead>
        </table>
</body>
<?php
    }
?>
<form action="/scancontroller/search" method="GET">
    <table>
        <tr>
            <td><label for="kode_sap">KODE SAP</label></td>
            <td><input type="text" name="kode_sap" id="kode_sap"></td>
        </tr>
        <tr>
            <td><label for="group_machine">GROUP MACHINE</label></td>
            <td> <input type="text" name="group_machine" id="group_machine"></td>
        </tr>
        <tr>
            <td><button type="submit">Search</button></td>
        </tr>
    </table>
</form>
<br>
<table width="500p px" border="1">
    <thead>
        <tr>
            <th>Part No.Running</th>
            <td>15165265</td>
        </tr>
        <tr>
            <th>RM Code</th>
            <td>RM1105</td>
        </tr>
        <tr>
            <th>Need Day Bar</th>
            <td>67</td>
        </tr>
        <tr>
            <th>QTY AKTUAL</th>
            <td>78</td>
        </tr>
        <tr>
            <th>Group Machine</th>
            <td>Cnc Line 1</td>
        </tr>
        <tr>
            <th>ACTION</th>
            <td>
                <button>Hapus</button>
            </td>
        </tr>
    </thead>
</table>
</body>