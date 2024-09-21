<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="\warehouserm\public\img\aisoft.png" type="image/gif">

    <!-- Bootstrap CSS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
        .bd-navbar {
            min-height: 4rem;
            background-color: #5351cf;
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 5%), inset 0 -1px 0 rgb(0 0 0 / 10%);
        }

        #dropdownMenuLink:hover {
            border-color: #d4d4d4;
        }
    </style>

    <title><?= $tittle; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="/warehouserm/public/">
                <img src="\warehouserm\public\img\truck.png" alt="" width="30" height="25" class="d-inline-block align-text-top">
                <b style="font-size: 25px;">WAREHOUSE RM</b>
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/warehouserm/public/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/warehouserm/public/masterController/lihatMaster">Master</a>
                </li>
            </ul>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

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

</html>