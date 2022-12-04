<?php include('header.php'); ?>

    <div class="container mt-5 mb-5 text-center">
        <h2>Cadastre-se</h2>
        <p>Preencha o formulário abaixo para se cadastrar</p>
        <div class="d-flex">
            <div class="w-75 m-auto">
                <form action="<?= base_url('/cadastro') ?>" method="POST">

                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control mb-2 name" name="name" placeholder="Nome">
                        </div>
                        <div class="col">
                            <input type="password" class="form-control mb-2 password" name="password" placeholder="Senha">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="email" class="form-control mb-2 email" name="email" placeholder="E-mail">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control mb-2 cpf" name="cpf" placeholder="CPF">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control mb-2 zip" name="zip" placeholder="CEP">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control mb-2 address" name="address" placeholder="Endereço">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control mb-2 number" name="number" placeholder="Número">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control mb-2 neighbourhood" name="neighbourhood" placeholder="Bairro">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control mb-2 city" name="city" placeholder="Cidade">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control mb-2 state" name="state" placeholder="Estado">
                        </div>
                    </div>
                    <div class="float-end">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
            
                </form>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>
