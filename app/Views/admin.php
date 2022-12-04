<?php include('header.php'); ?>

    <div class="container mt-5 mb-5">
        <h2>Pedidos Realizados</h2>
        <p>Consulte aqui todos pedidos realizados por clientes</p>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Cup Cake</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Pagamento</th>
                <th scope="col">Entrega</th>
                <th scope="col">Valor</th>
                <th scope="col">Data</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach($purchases as $purchase){?>
                    <tr>
                        <th scope="row"><?= $purchase['id'] ?></th>
                        <td>Donut <?= $purchase['product'] ?></td>
                        <td><?= $purchase['quantity'] ?></td>
                        <td><?= $purchase['payment'] == "on" ? 'No dinheiro' : 'No cartão' ?></td>
                        <td><?= $purchase['delivery'] == "store" ? 'Na loja' : 'Em casa' ?></td>
                        <td>R$ <?= $purchase['price'] ?></td>
                        <td><?= date('d/m/Y', strtotime($purchase['created_at'])) . ' às ' . date('H:i', strtotime($purchase['created_at'])) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php include('footer.php'); ?>
