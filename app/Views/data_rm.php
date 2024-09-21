<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid mt-3 mr-3" style="max-width:100%;font-size:15px;">
    <div class="card">
        <div class="card-body">
            <h2>Import Excel</h2>
            <form method="post" action="/warehouserm/public/rm/simpanExcel" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="row">
                        <div class="col-8">
                            <input type="file" name="fileexcel" class="form-control" id="file" required accept=".xls, .xlsx" />
                        </div>
                        <div class="col">
                            <button class="btn btn-primary" type="submit" style="display: inline-block;">Upload</button>
                            <a href="/warehouserm/public/rm/delete" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger" style="display: inline-block;">Hapus</a>
                            |
                            <a href="/warehouserm/public/exportController/lihatScan" class="btn btn-primary">Lihat Data Scan</a>
                        </div>
                    </div>
                </div>
            </form>

            <div class="dropdown mt-2">
                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Group Machine
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="printController/Rev">REVISI</a></li>
                    <li><a class="dropdown-item" href="printController/Cnc1">Cnc Line 1</a></li>
                    <li><a class="dropdown-item" href="printController/Cnc2">Cnc Line 2</a></li>
                    <li><a class="dropdown-item" href="printController/Cnc3">Cnc Line 3</a></li>
                    <li><a class="dropdown-item" href="printController/Cam">CAM</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row-12 mt-2">
        <?php
        if (session()->getFlashdata('message')) {
        ?>
            <div class="alert alert-info">
                <?= session()->getFlashdata('message') ?>
            </div>
        <?php
        }
        ?>
    </div>

    <div class="card mt-2 mb-3">
        <div class="card-body">

            <table id="table_id" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Kode SAP</th>
                        <th>Part No.Running</th>
                        <th>RM Code</th>
                        <th>Type</th>
                        <th>Need Day Bar</th>
                        <th>DI</th>
                        <th>WO FROM</th>
                        <th>WO END</th>
                        <th>Group Machine</th>
                    </tr>
                </thead>
                <tbody id="contactTable">
                    <?php
                    if (!empty($Rm)) {
                        foreach ($Rm as $dt) {
                    ?>
                            <tr>
                                <td><?= $dt['kode_sap'] ?></td>
                                <td><?= $dt['part_no_running'] ?></td>
                                <td><?= $dt['rm_code'] ?></td>
                                <td><?= $dt['type'] ?></td>
                                <td><?= $dt['need_day_bar'] ?></td>
                                <td><?= $dt['day_in'] ?></td>
                                <td><?= $dt['wo_from'] ?></td>
                                <td><?= $dt['wo_end'] ?></td>
                                <td><?= $dt['group_machine'] ?></td>
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
        </div>
    </div>
</div>

</body>

<?= $this->endSection(); ?>