<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Css/Login.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-3">
                    <div>
                        <img class="imgLogin" src="Img/engrenagem.png">
                            <div class="boxFormulario">
                            <form id="frm-novo-login">
                                <input type="hidden" name="action" value="NOVO_LOGIN">
                                <span>Login: </span><input type="text" name="login">
                                <span>Senha: </span><input type="password" name="senha">
                                <div><button type="button" class="checkCadastro" id="botao-novo-login">Entrar</button></div>
                                <div><button type="button" class="checkCadastro" data-toggle="modal" data-target="#cadastrarLigacao">Cadastrar ligação</button></div>
                                <div><button type="button" style="margin-bottom:4%;" class="checkCadastro" data-toggle="modal" data-target="#visualizarLigacao">Visualizar ligações</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="cadastrarLigacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastrar ligação</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span class="dismiss" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="boxInputCadLigacao">
                            <form id="frm-cad-ligacao" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="action" value='CADASTRO_LIGACAO'>
                                <div><span>Data:</span><input name="data" type="date"></div>
                                <div><span>Resultado da ligação:</span><input type="text" name="descricao" maxlength="200"  required></div>
                                <div><span>Número de telefone usado:</span><input type="text" name="telefone" maxlength="15"  id="telefone" placeholder=" (DDD) 0000-0000" required></div>
                                <div><span>Nome da pessoa que atendeu:</span><input type="text" name="nomeAtendente" maxlength="40" required></div>
                                <div><span>Nome da empresa:</span><input type="text" name="nomeEmpresa"  maxlength="50" required></div>
                                <div><span>Ramo da empresa:</span><input type="text" name="ramo" maxlength="50" required></div>
                                <button type="submit" id="btn-cad-ligacao" class="checkCadastro">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="visualizarLigacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Visualizar ligações</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span class="dismiss" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="boxTabelaLigacao">
                                        <table class="table">
                                        <button type="submit" id="btn-vis-ligacao" class="checkCadastro">Ativar</button>
                                            <tr>
                                                <th col="scope">Data ligação</th>
                                                <th col="scope">Descrição:</th>
                                                <th col="scope">Telefone</th>
                                                <th col="scope">Nome atendente:</th>
                                                <th col="scope">Nome empresa</th>
                                                <th col="scope">Ramo</th>
                                            </tr>
                                            <tbody id="listaAlunos">
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="checkCadastro" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="jsBootstrap/bootstrap.js"></script>
        <script type="text/javascript" src="Js/Login.js" async></script>
    </body>
</html>