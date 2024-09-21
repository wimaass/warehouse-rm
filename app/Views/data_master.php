<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid mt-3 mr-3" style="max-width:100%;font-size:15px;">
    <div class="card">
        <div class="card-body">
            <h1><?= $tittle; ?></h1>

            <form method="post" action="/warehouserm/public/mastercontroller/uploadmaster" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="row">
                        <div class="col-8">
                            <input type="file" name="fileexcel" class="form-control" id="file" required accept=".xls, .xlsx" />
                        </div>
                        <div class="col">
                            <button class="btn btn-primary" type="submit" style="display: inline-block;">Upload</button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
                            |
                            <a href='<?= base_url("mastercontroller/export") ?>' class="btn btn-success">Export Excel</a>
                        </div>
                    </div>
                </div>
            </form>

            <div class="form-group">
                <div class="row">
                    <div class=" col" style="text-align: right;">

                        <!-- Modal
                        <form action="/warehouserm/public/mastercontroller/tambahdata" method="post">
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Master</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-3">
                                                <label for="target_hari" class="col-sm-3 col-form-label">Rm Code</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="target_hari" name="rm_code" placeholder="Masukkan Rm Code" required autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="target_total" class="col-sm-3 col-form-label">Type</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="target_total" name="type" placeholder="Masukkan Type Rm" required autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="target_s1" class="col-sm-3 col-form-label">Weight Rm</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="target_s1" name="weight_rm" placeholder="Masukkan Weight Rm" required autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> -->

                        <!-- Modal -->
                        <form action="/warehouserm/public/mastercontroller/tambahdata" method="post">
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Master</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-3">
                                                <label for="target_hari" class="col-sm-3 col-form-label">Rm Code</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="target_hari" name="rm_code" placeholder="Masukkan Rm Code" required autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="target_total" class="col-sm-3 col-form-label">Type</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="target_total" name="type" placeholder="Masukkan Type Rm" required autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="target_s1" class="col-sm-3 col-form-label">Weight Rm</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="target_s1" name="weight_rm" placeholder="Masukkan Weight Rm" required autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                <thead style="text-align: center;">
                    <tr>
                        <th>NO</th>
                        <th>RM Code</th>
                        <th>Type</th>
                        <th>Weight RM</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="contactTable">
                    <?php
                    $i = 1;
                    if (!empty($master)) {
                        foreach ($master as $dt) {
                    ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $dt->rm_code; ?></td>
                                <td><?= $dt->type; ?></td>
                                <td><?= $dt->weight_rm; ?></td>
                                <td style="text-align: center;">
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $i; ?>">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $i; ?>">
                                        Delete
                                    </button>
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
                                                <form action="<?= base_url("/mastercontroller/deleteMaster") ?>" method="POST">
                                                    <div class="mb-3">
                                                        <label class="form-label">Rm Code</label>
                                                        <input type="text" name="rm_code" class="form-control" value="<?= $dt->rm_code; ?>" required readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Type</label>
                                                        <input type="text" name="type" class="form-control" value="<?= $dt->type; ?>" required readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Weight_rm</label>
                                                        <input type="text" name="weight_rm" class="form-control" value="<?= $dt->weight_rm; ?>" required readonly>
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

                                <!-- Modal Edit -->
                                <div class=" modal fade" id="editModal<?php echo $i; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url("/mastercontroller/editmaster") ?>" method="POST">
                                                    <div class="mb-3">
                                                        <label class="form-label">Rm Code</label>
                                                        <input type="text" name="rm_code" class="form-control" value="<?= $dt->rm_code; ?>" required readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Type</label>
                                                        <input type="text" name="type" class="form-control" value="<?= $dt->type; ?>" required autocomplete="off">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Weight_rm</label>
                                                        <input type="text" name="weight_rm" class="form-control" value="<?= $dt->weight_rm; ?>" required autocomplete="off">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary mr-2" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-warning">Edit</button>
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
                            <td colspan="9" style="text-align: center;">Tidak ada data</td>
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