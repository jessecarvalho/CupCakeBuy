<?php namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    
    protected $table      = 'cart';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    protected $protectFields = false;

}
?>