<?php include('header.php'); ?>

    <div class="container mt-5 mb-5">
        <h2>Finalize seu pedido</h2>
        <p>FInalize sua compra</p>

        <form action="<?= base_url('/comprar') ?>/<?= $cart['id'] ?>" method="POST">

            <div class="d-flex">
                <div class="w-25 m-auto">
                    <p><b>Pedido</b></p>
                    <p><?= $cart['quantity'] ?> unidade de Cupcake <?= $cart['product'] ?> - R$ <?= number_format((float)$cart['price'], 2, '.', '') ?>/unid.</p>
                    <input type="hidden" name="price" id="value" value="<?= number_format($cart['quantity'] * (float)$cart['price'], 2, '.', '') ?>">
                    <input type="hidden" name="product" id="product" value="<?= $cart['product'] ?>">
                    <input type="hidden" name="quantity" id="quantity" value="<?= $cart['quantity'] ?>">
                    <div class="mt-3 mb-3">
                        <p><b>Entrega</b></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="delivery" id="store" value="store" checked>
                            <label class="form-check-label" for="store">
                            Buscar na loja
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="delivery" id="home" value="home">
                            <label class="form-check-label" for="home">
                            Receber em casa + R$ 10,00 de taxa
                            </label>
                        </div>

                    </div>

                    <div class="mt-3 mb-3">
                        <p><b>Método de pagamento</b></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="payment_card"checked value="card">
                            <label class="form-check-label" for="payment_card">
                            Cartão de Crédito
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="payment_money" value="money">
                            <label class="form-check-label" for="payment_money">
                            Dinheiro
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <h2 class="final-value">
                            R$ 00,00
                        </h2>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Finalizar Pedido</button>
                </div>
            </div>
    
        </form>

        
    </div>

    <?php include('footer.php'); ?>
