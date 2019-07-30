$(document).ready(function(){
    var botaoVerificaLogin=document.getElementById('botao-novo-login');
    botaoVerificaLogin.addEventListener('click',()=>{
        verificaLogin();
    });
});
//Verifica login
function verificaLogin(){   
    let form=document.getElementById('frm-novo-login');
    var dados=new FormData(form);
    var dadosSerializados=new URLSearchParams(dados).toString();
    $.post('../Controler/Login.php',dadosSerializados,function(retorno){
        if(retorno==true){
            window.location='Gerencia.php';
        }
    },'json');
}
//Mascara dos digitos do telefone
function mask(o,f){
    v_obj=o;
    v_fun=f;
    setTimeout("execMascara()",1);
}
function execMascara(){
    v_obj.value=v_fun(v_obj.value);
}
function changeTel(v){
    v=v.replace(/\D/g,"");
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");
    return v;
}
function putMask(){
    document.getElementById('telefone').onkeypress = function(){
        mask( this, changeTel );
    }
}
//No go back - Cache
function lockPage(){
    document.addEventListener("DOMContentLoaded", function(event){
        window.location.assign('Login.php');
    });
}
//Cadastra ligação-https://www.youtube.com/watch?v=c3qWHnJJbSY
cadastraLigacao= async()=>{
    let form=document.getElementById('frm-cad-ligacao');
    var dados=new FormData(form);
    var url='../Controler/Ligacao.php';

    await fetch(url,{  
        method:'post',   
        body:dados,
    });
}
//carrega dados das ligacoes nas tabelas
carregaLigacoes=()=>{
    let tabelaLigacao= document.getElementById("listaAlunos");
    let url="../Controler/Ligacao.php";
    var headers = new Headers({
        "Content-Type":"application/aplication/json",
        "Acess-Control-Allow-Origin":"*"
    });
    fetch(url,{
        method:'post',
        headers:headers,
        body:JSON.stringify({action:'CARREGA_LIGACOES'}),
        mode:'cors',
    })
    .then(response => response.json())
    .then(json_object => {return json_object})
    .catch(erro => console.log("Erro: "+erro));
}
// Carrega funções que usam o fetch que precisam ser carregadas no window.onload
carregaComponentes=async ()=>{
    let btnCadLig=document.getElementById('btn-cad-ligacao');
    btnCadLig.addEventListener('click',function(){cadastraLigacoes()});

    let btnVisLig=document.getElementById('btn-vis-ligacao');
    btnVisLig.addEventListener('click',await function(){ carregaLigacoes()});
}
//Executa as funções no load da página - Javascript Puro
window.onload=function(){
    lockPage();
    putMask();

    carregaComponentes();
}