<!DOCTYPE HTML>
<html> 
    <head>
        <title>Cadastro</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./Css/BarraLateral/MenuLateralSistema.css">
        <link rel="stylesheet" type="text/css" href="./Css/Cadastro/CadastroMembro.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <!---Barra lateral-->
    <body>
        <section>
           <?php
                include 'BarraLateralSistema.php';
           ?>
        </section>
        <section class="displayCadastro">
            <div class="container">
                <form id="frm-cadastro-membro">
                    <div class="row">
                        <div class="col-md-12 offset-md-1">
                            <div class="box1">
                                <span>Nome:</span> <input type="text" name="nome" required>
                                <span>Curso:</span><input type="text" name="curso" required>
                                <span>Ano de entrada:</span><input type="text" name="anodeentrada" required>
                                <span>Cargo:</span><input type="text" name="cargo" required>
                                <span>Telefone:</span><input type="text" name="telefone" required>
                                <span>CPF:</span><input type="text" name="cpf" required>
                                <span>Foto:</span><input type="file" name="foto" >
                                <input type="hidden" name="action" value="NOVO_CADASTRO_MEMBRO">
                            </div>
                            <div class="box2">
                                <span>Rua:</span><input type="text" name="rua" required>
                                <span>Número:</span><input type="number" name="numero" required>
                                <span>Bairro:</span><input type="text" name="bairro" required>
                                <span>Email:</span><input type="email" name="email" required>
                                <span>Data de nascimento:</span><input type="date" name="nascimento" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 offset-md-4">
                            <button class="inputCadastrar" id="botao-cadastro-membro">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <script type="text/javascript" src="Js/BarraLateral.js"></script>
        <script type="text/javascript" src="jsBootstrap/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="Js/MembroCadastrar.js"></script>
    </body>
</html>
