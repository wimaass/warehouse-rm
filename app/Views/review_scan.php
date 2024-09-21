<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid mt-3 mr-3" style="max-width:100%;font-size:15px;">
    <div class="card">
        <div class="card-body">
            <h1><?= $tittle; ?></h1>
            <div class="form-group">
                <div class="row">
                    <div class="col" style="text-align: right;">
                        <?php
                        if (!empty($scan)) {
                        ?>
                            <a href='<?= base_url("exportController/export") ?>' class="btn btn-success">Export Excel</a>
                            |
                            <a href='<?= base_url("exportController/delete") ?>' onclick="return confirm('Are you sure to delete?')" class="btn btn-danger" style="display: inline-block;">Hapus Export</a>
                        <?php
                        } else {
                        ?>
                            <a href='<?= base_url("exportController/export") ?>' class="btn btn-success disabled">Export Excel</a>
                            |
                            <a href='<?= base_url("exportController/delete") ?>' onclick="return confirm('Are you sure to delete?')" class="btn btn-danger disabled" style="display: inline-block;">Hapus Export</a>
                        <?php
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
            <?= session()->getFlashdata('message') ?>
        <?php
        }
        ?>
    </div>

    <div class="card mt-2 mb-3">
        <div class="card-body">

            <table id="table_id" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>PART NO.RUNNING</th>
                        <th>RM CODE</th>
                        <th>DESKRIPSI</th>
                        <th>NEED @DAY BAR</th>
                        <th>QTY AKTUAL</th>
                        <th>WEIGHT</th>
                        <th>KONVERSI</th>
                        <th>GROUP MACHINE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody id="contactTable">
                    <?php
                    $i = 1;
                    if (!empty($scan)) {
                        foreach ($scan as $dt) {
                            $needDayBar = $dt['qty_aktual'];
                            $berat = $dt['weight_rm'];
                            $konversi = $needDayBar * $berat;
                    ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $dt['part_no_running']; ?></td>
                                <td><?= $dt['rm_code']; ?></td>
                                <td><?= $dt['type']; ?></td>
                                <td><?= $dt['need_day_bar']; ?></td>
                                <td><?= $dt['qty_aktual']; ?></td>
                                <td><?= $dt['weight_rm']; ?></td>
                                <td><?= $konversi; ?></td>
                                <td><?= $dt['group_machine']; ?></td>
                                <td class="text-center">
                                    <div class="row">
                                        <div class="col">
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $i; ?>">
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </td>

                                <!-- Modal Delete -->
                                <div class=" modal fade" id="deleteModal<?php echo $i; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url("/scancontroller/delete") ?>" method="POST">
                                                    <div class="mb-2">
                                                        <label class="form-label">PART NO. RUNNING</label>
                                                        <input type="text" name="part_no_running" class="form-control" value="<?= $dt['part_no_running'];  ?>" required readonly>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label class="form-label">RM CODE</label>
                                                        <input type="text" name="rm_code" class="form-control" value="<?= $dt['rm_code']; ?>" required readonly>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label class="form-label">NEED @DAY BAR</label>
                                                        <input type="text" name="need_day_bar" class="form-control" value="<?= $dt['need_day_bar']; ?>" required readonly>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label class="form-label">ACTUAL</label>
                                                        <input type="text" name="qty_aktual" class="form-control" value="<?= $dt['qty_aktual']; ?>" required readonly>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label class="form-label">GROUP MACHINE</label>
                                                        <input type="text" name="group_machine" class="form-control" value="<?= $dt['group_machine']; ?>" required readonly>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary mr-2" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Delete -->

                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="10">Tidak ada data</td>
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