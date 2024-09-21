<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRm extends Model
{
    protected $table = 'tbl_rm';
    protected $primaryKey = 'kode_sap';
    protected $allowedFields = [
        'part_no_running',
        'rm_code',
        'type',
        'need_day_bar',
        'day_in',
        'wo_from',
        'wo_end',
        'group_machine'
    ];
}
