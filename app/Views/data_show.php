<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid mt-3 mr-3" style="max-width:100%;font-size:15px;">
    <div class="card">
        <div class="card-body">
            <h1><?= $tittle; ?></h1>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <div class="dropdown" style="display: inline-block;">
                            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Group Machine</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="Rev">REVISI</a></li>
                                <li><a class="dropdown-item" href="Cnc1">Cnc Line 1</a></li>
                                <li><a class="dropdown-item" href="Cnc2">Cnc Line 2</a></li>
                                <li><a class="dropdown-item" href="Cnc3">Cnc Line 3</a></li>
                                <li><a class="dropdown-item" href="Cam">CAM</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col" style="text-align: right;">
                        <!-- <a href="/warehouserm/public/printController/" target="_blank" class="btn btn-primary">Print Approval</a> -->
                        <?php
                        if (!empty($Rm)) {
                            echo '<a onclick="function1()" class="btn btn-primary">Unduh Excel</a>';
                            echo ' | ';
                            echo '<a onclick="powww()" class="btn btn-primary">Print Approval</a>';
                            echo '  ';
                            echo '<a href="/warehouserm/public/printController/' . $tag . '" target="_blank" class="btn btn-primary">Print Tag</a>';
                        } else {
                            echo '<a class="btn btn-primary disabled">Unduh Excel</a>';
                            echo ' | ';
                            echo '<a class="btn btn-primary disabled">Print Approval</a>';
                            echo '  ';
                            echo '<a  class="btn btn-primary disabled">Print Tag</a>';
                        }
                        ?>

                    </div>
                </div>
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
                                <td><?= $dt->kode_sap; ?></td>
                                <td><?= $dt->part_no_running; ?></td>
                                <td><?= $dt->rm_code; ?></td>
                                <td><?= $dt->type; ?></td>
                                <td><?= $dt->need_day_bar; ?></td>
                                <td><?= $dt->day_in; ?></td>
                                <td><?= $dt->wo_from; ?></td>
                                <td><?= $dt->wo_end; ?></td>
                                <td><?= $dt->group_machine; ?></td>
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

<script>
    function function1() {
        open("/warehouserm/public/printController/<?= $export; ?>");
    }

    function powww() {
        open("/warehouserm/public/printController/<?= $approve; ?>");
    }
</script>

</body>

<?= $this->endSection(); ?>