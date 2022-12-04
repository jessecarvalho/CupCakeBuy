<?php namespace App\Models;

use CodeIgniter\Model;

class PurchaseModel extends Model
{
    
    protected $table      = 'purchases';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    protected $protectFields = false;

}
?>