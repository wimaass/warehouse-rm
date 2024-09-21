<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="/warehouserm/public/js/pixi.min.js"></script>
    <script src="/warehouserm/public/js/pixi-sound.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="icon" href="\warehouserm\public\img\aisoft.png" type="image/gif">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            color: black;
            background-color: #0febff;
            width: max-content;
        }

        form {
            padding: 10px;
        }

        .group,
        label {
            display: inline-block;
            width: 100%;
            font-size: 30px;
            font-weight: bold;
        }

        #scan,
        #qty_aktual {
            height: 30px;
            width: 290px;
        }

        /* .submit {
            width: 70px;
            height: 25px;
        } */
    </style>

    <title>Scan Aktual</title>
</head>

<body>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <form action="/warehouserm/public/scancontroller/olahScanAktual" method="post">
        <?php
        if (session()->getFlashdata('message')) {
        ?>
            <?= session()->getFlashdata('message') ?>

        <?php
        }
        ?>
        <div class="dropdown mt-2">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Pilih Mode
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/warehouserm/public/scancontroller/displayscan">Scan Original</a></li>
                <li><a class="dropdown-item" href="/warehouserm/public/scancontroller/displayScanAktual">Scan Aktual</a></li>
            </ul>
        </div>
        <div class="group">
            <label for="scan">SCAN</label>
            <!-- <br> -->
            <input type="text" id="scan" name="scan" placeholder="Scan disini" autofocus required>
        </div>

        <div class="group">
            <label for="qty_aktual">Quantity Aktual</label>
            <!-- <br> -->
            <input type="text" id="qty_aktual" name="qty_aktual" placeholder="Masukan QTY Aktual" autofocus required>
            <div style="font-size: 20px;" class="text-success"><b>Jumlah Scan : <?php echo $jumlah ?> </b></div>
        </div>

        <div class="group">
            <input class="submit" type="submit" value="Submit">
            <!-- btn btn-success <a href="/warehouserm/public/scancontroller/viewDataScan" class="btn btn-warning">Lihat Data</a> -->
        </div>
    </form>
</body>

</html>