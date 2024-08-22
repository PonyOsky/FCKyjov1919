<?php

namespace App\Models;

use \CodeIgniter\Model;

class Letadla extends Model
{

    protected $table      = 'letadla';
    protected $primaryKey = 'id';

    protected $allowedFields = ['idmisto', 'datum', 'cas', 'idtypyletadel', 'idspolecnosti', 'text',
        'obrazek', 'aktivnikarta'];

}