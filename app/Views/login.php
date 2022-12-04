<?php include('header.php'); ?>

    <div class="container mt-5 mb-5 text-center">
        <h2>Login</h2>
        <p>Preencha seus dados para entrar em sua conta</p>

        <div class="d-flex">
            <div class="w-25 m-auto">
                <form action="<?= base_url('/login ') ?>" method="POST">
                    <input type="email" class="form-control" name="email" placeholder="Seu e-mail">
                    <input type="password" class="form-control mt-2 mb-2" name="password" placeholder="Sua senha">
                    <button type="submit" class="btn btn-success w-100">Login</button>
                </form>
                <?php if(!empty(session()->getFlashdata('error'))): ?>

                    <div class="alert alert-danger mb-xl-0 mt-3 mb-3" role="alert"><?= session()->getFlashdata('error') ?></div>

                <?php endif; ?>
                <a href="<?= base_url('/cadastro') ?>" class="mt-5">Registrar-se</a>
            </div>
        </div>
    </div>


<?php include('footer.php'); ?>
