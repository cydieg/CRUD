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

    public function update($ID = null){
        $products = new ProductModel();
        $data['products'] = $products->where('ID', $ID)->first();
        return view('insert', $data);
    }
    
    public function insert(){
        $products = [
            'ID' => 123,
            'UPC' => 'ABC123',
            'Name' => 'Product Name',
            'Quantity' => 10,
            'Price' => 9.99,
            'Expiry_date' => '2023-09-12T12:00',
            'Created_at' => '2023-09-12T10:00'
        ];
        return view('insert', compact('products'));
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
       if(isset($_POST['update'])){
        $products->set($data)->where('ID', $ID)->update();
       }else{
        $products ->save($data);
       }
       return redirect ()->to ('/home');
    }
    
}
