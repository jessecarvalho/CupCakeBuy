<?php include('header.php'); ?>

    <div class="banner d-flex text-center">
        <div class="m-auto">
            <h2 class="text-white text-uppercase">CupCakeBuy</h2>
            <p class="text-white">Deliciosos Cup Cakes feitos com todo carinho para você</p>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <h2>Faça seu pedido</h2>
        <p>Escolha um de nossos deliciosos Cup Cakes para que façamos para você com todo carinho</p>

        <div class="row">
            <div class="col-4">
                <img src="assets/imgs/cupcake-1.png" alt="Imagem de CupCake" class="w-50">
                <h3>CupCake 1</h3>
                <p>Um delicioso cupcake</p>
                <p>R$ 7,00</p>
                <form action="<?= base_url('/carrinho') ?>" method="POST">
                    <div class="input-group">
                        <input type="hidden" name="price" value="7">
                        <select name="quantity" id="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input type="hidden" name="product" value="1">
                        <button class="btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Comprar</button>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <img src="assets/imgs/cupcake-2.png" alt="Imagem de CupCake" class="w-50">
                <h3>CupCake 2</h3>
                <p>Um delicioso cupcake</p>
                <p>R$ 5,00</p>
                <form action="<?= base_url('/carrinho') ?>" method="POST">
                    <div class="input-group text-center">
                        <input type="hidden" name="price" value="5">
                        <select name="quantity" id="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input type="hidden" name="product" value="2">
                        <button class="btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Comprar</button>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <img src="assets/imgs/cupcake-3.png" alt="Imagem de CupCake" class="w-50">
                <h3>CupCake 3</h3>
                <p>Um delicioso cupcake</p>
                <p>R$ 10,00</p>
                <form action="<?= base_url('/carrinho') ?>" method="POST">
                    <div class="input-group text-center">
                        <input type="hidden" name="price" value="10">
                        <select name="quantity" id="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input type="hidden" name="product" value="3">
                        <button class="btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Comprar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <<?php include('footer.php'); ?>
