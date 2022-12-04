<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CupCakeBuy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/style.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
</head>
<body>

    <div class="bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">CupCakeBuy</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse d-block" id="navbarNav">
                        <ul class="navbar-nav float-end">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/') ?>">Fazer Pedido</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/consultar-pedidos') ?>">Consultar Pedidos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/contato') ?>">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/carrinho') ?>"><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/sair') ?>">Sair</a>
                        </li>
                        
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>