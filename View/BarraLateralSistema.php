<img class="imgEngrenagemResize" src="./Img/engrenagem.png">
<div class="floatBox">
    <img class="imgEngrenagem" src="./Img/engrenagem.png">
    <div class="dropdown">
        <img class="Ico" src="./Icons/cadastrar.svg"><img class="Seta" src="./Icons/setabaixo.svg">
        <div class="dropdown-content">
            <a href="#" onclick="redirectMembroCadastrar()">Membro</a>
            <a href="/Php/Sistema/SistemaGerencia/Cadastrar/ProjetoCadastrar.php">Projeto</a>
            <a href="Cadastrar/AcaoCadastrar.php">Ação</a>
            <a href="Cadastrar/TreinamentoCadastrar.php">Treinamento</a>
            <a href="Cadastrar/EventoCadastrar.php">Evento</a>
        </div>
    </div>
    <div class="dropdown">
        <img class="Ico" src="./Icons/lupa.svg"><img class="Seta" src="./Icons/setabaixo.svg">
        <div class="dropdown-content">
            <a href="#" onclick="redirectMembroVisualizar()">Membro</a>
            <a href="/Php/Sistema/SistemaGerencia/Visualizar/ProjetoVisualizar.php">Projeto</a>
        </div>
    </div>
    <form id="frm-sair-login">
        <input type="hidden" name="action" value="SAIR_LOGIN">
        <button type="button" style="background:none;border:none;outline:none;" id="btn-fecha-sessao"><img class="IcoLogout" src="./Icons/logout.svg"></button>
    </form>
</div>


   
