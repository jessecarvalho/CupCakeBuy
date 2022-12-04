<?php

namespace App\Controllers;
use \App\Models\UserModel;
use \App\Models\PurchaseModel;
use \App\Models\CartModel;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function consultOrders(){

        $purchaseModel = new PurchaseModel();
        $items['purchases'] = $purchaseModel->where('user', $_SESSION['user']['id'])->findAll();

        return view('consultar-pedidos', $items);
    }

    public function contact(){
        return view('contato');
    }

    public function cart(){

        $items = array();

        $cartModel = new CartModel();

        if ($_POST) {

            $data = array();

            foreach ($_POST as $key => $value){
                $data[$key] = $value;
            }

            $data['user'] = $_SESSION['user']['id'];

            $cartModel->insert($data);

            return redirect()->to('/carrinho');

        }

        $items['cart'] = $cartModel->where('user', $_SESSION['user']['id'])->findAll();

        return view('carrinho', $items);
    }

    public function removeItemCart(){

        if ($_POST) {

            $cartModel = new CartModel();

            $id = $_POST['id'];

            $cartModel->delete($id);

            return redirect()->to('/carrinho');

        }

    }

    public function buy($id){
        
        $cartModel = new CartModel();
        $purchaseModel = new purchaseModel();


        if ($_POST) {

            $data = array();

            foreach ($_POST as $key => $value){
                $data[$key] = $value;
            }

            $data['user'] = $_SESSION['user']['id'];
            $data['created_at'] = date('Y-m-d H:i:s');

            $purchaseModel->insert($data);
            
            $cartModel->where('id', $id)->delete();

            return redirect()->to('/consultar-pedidos');

        }
        $items['cart'] = $cartModel->where('id', $id)->first();
        return view('finalizar-compra', $items);

    }

    public function register() {

        if ($_POST) {
            $usersModel = new UserModel();
            $data = array();

            foreach ($_POST as $key => $value){
                if ($key == "password"){
                    $data['password'] = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
                } else {
                    $data[$key] = $value;
                }
            }

            $data['is_admin'] = 'f';

            $usersModel->insert($data);

            return redirect()->to('/login');
        }
        return view('cadastro');

    }

    public function login(){
        if ($_POST){
            $usersModel = new UserModel();
            $users = $usersModel->findAll();
    
            $email = trim($this->request->getPost('email'));
            $password = $this->request->getPost('password');
    
            foreach ($users as $user){
                if ($email == $user['email'] && password_verify($password, $user['password'])) {
                    $session = session();
                    $session->set('isLoggedIn', 1);
                    if (isset($_SESSION['isLocked'])){
                        $session->remove('isLocked');
                    }
                    $session->set('user', $user);
                    return redirect()->to('/');
                } 
            }
    
            return redirect()->back()->with('error', 'Login ou senha invalidos');
        }
        return view('login');
    }


    public function logout()
    {
        $session = session();
        $session->remove('isLoggedIn');
        if (isset($_SESSION['isLocked'])){
            $session->remove('isLocked');
        }
        return redirect()->to('/login');
    }
}
