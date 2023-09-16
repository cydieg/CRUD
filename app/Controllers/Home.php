<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProductModel;

class Home extends BaseController
{
    public function index(){
       echo 'testing';
    }

    public function home(){
        $products = new ProductModel();
        $data = [
            'products' => $products->findAll(),
        ];
        return view('home', $data);
    }

    public function delete($ID = null){
        $products = new ProductModel();
        $products-> delete(['ID' => $ID]);
        return redirect ()->to ('/home');
    }
    
    public function insert(){
        return view('insert');
    }
    public function actionInsert(){

       $ID = $this->request->getVar("ID");
       $UPC = $this->request->getVar("UPC");
       $Name = $this->request->getVar("Fullname");
       $Quantity = $this->request->getVar("Quantity");
       $Price = $this->request->getVar("Price");
       $Expiry_date = $this->request->getVar("Expiry_date");
       $Created_at = $this->request->getVar("Created_at");
       $products = new ProductModel();
       $data = [
        'ID' =>  $ID,
        'UPC' => $UPC,
        'Name' => $Name,
        'Quantity' => $Quantity,
        'Price' => $Price,
        'Expiry_date' => $Expiry_date,
        'Created_at' => $Created_at
       ];
       $products ->save($data);
       return redirect ()->to ('/home');
    }
    
}
