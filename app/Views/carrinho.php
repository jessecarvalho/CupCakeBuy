<?php include('header.php'); ?>

    <div class="container mt-5 mb-5">
        <h2>Seu carrinho de compra</h2>
        <p>Itens no seu carrinho</p>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">CupCake</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($cart as $item) { ?>
                <tr>
                    <th scope="row"><?= $item['id'] ?></th>
                    <td>CupCake <?= $item['product'] ?></td>
                    <td><?= $item['quantity'] ?></td>
                    <td>R$ <?= number_format((float)$item['price'], 2, '.', '')?></td>
                    <td>
                        <a href="<?= base_url('comprar/' . $item['id']) ?>">
                            <button class="btn btn-success">Fazer Pedido</button> 
                        </a>
                        <form action="<?= base_url('/remover-do-carrinho') ?>" method="POST" class="d-inline">
                            <input type="hidden" name="id" value="<?= $item['id'] ?>">
                            <button type="submit" class="btn btn-danger ml-2">X</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
              
            </tbody>
        </table>
    </div>

    <?php include('footer.php'); ?>
