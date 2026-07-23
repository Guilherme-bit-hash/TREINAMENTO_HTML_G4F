<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../atividade23/css/form.css" rel="stylesheet">
</head>
<body>
<div class="leopard-runner">
  <div class="leopard">
    <div class="tail"></div>
    <div class="body"></div>
    <div class="head"></div>
    <div class="leg leg1"></div>
    <div class="leg leg2"></div>
    <div class="leg leg3"></div>
    <div class="leg leg4"></div>
  </div>
</div>



<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h2 class="text-center mb-4">Cadastro</h2>

            <form action="../atividade23/list.php" method="POST">

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input
                        type="text"
                        class="form-control"
                        id="nome"
                        name="nome"
                        placeholder="Digite seu nome completo"
                        required>
                </div>

                <div class="mb-3">
                    <label for="idade" class="form-label">Idade</label>
                    <input
                        type="number"
                        class="form-control"
                        id="idade"
                        name="idade"
                        placeholder="Digite sua idade"
                        required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Digite seu e-mail"
                        required>
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input
                        type="tel"
                        class="form-control"
                        id="telefone"
                        name="telefone"
                        placeholder="(61) 99999-9999"
                        required>
                </div>

                <div class="mb-3">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input
                        type="text"
                        class="form-control"
                        id="cidade"
                        name="cidade"
                        placeholder="Digite sua cidade"
                        required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        Enviar
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>