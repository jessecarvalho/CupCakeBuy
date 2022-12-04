<?php

namespace App\Controllers;
use \App\Models\PurchaseModel;

class Admin extends BaseController
{
    public function index()
    {

        $purchaseModel = new PurchaseModel();
        $items['purchases'] = $purchaseModel->findAll();

        return view('admin', $items);

    }

}
