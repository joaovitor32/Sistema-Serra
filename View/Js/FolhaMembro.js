function carregaDados(codMembro){
    carregaTabelaProjeto(codMembro);
    carregaTabelaTreinamento(codMembro);
}
//Parte para carregar as tabelas
function carregaTabelaProjeto(codMembro){
    var lista='';
    let tabelaBoxProjeto=document.getElementById('boxTabelaProjeto');
    while(tabelaBoxProjeto.firstChild){
        tabelaBoxProjeto.removeChild(tabelaBoxProjeto.firstChild);
    }
    $.post('../Controler/Projetos.php',{action:'VISUALIZACAO_PROJETOS',codMembro:codMembro},function(projetos){
        $.each(projetos,function(indice,projeto){
            lista+='<tr>';
            lista+='<td>'+projeto.Nome+'</td>';
            lista+='<td>'+projeto.DataIni+'</td>';
            lista+='<td>'+projeto.DataFim+'</td>';
            lista+='<td>'+projeto.Preco+'</td>';
            lista+='<td>'+projeto.Descricao+'</td>';
            lista+='<td>'+projeto.Contratante+'</td>';
            lista+='</tr>';           
        });
        tabelaBoxProjeto.innerHTML=lista;
    },'json');
}
function carregaTabelaTreinamento(codMembro){
    var lista='';
    let boxTabelaTreinamento=document.getElementById('boxTabelaTreinamento');
    while(boxTabelaTreinamento.firstChild){
        boxTabelaTreinamento.removeChild(boxTabelaTreinamento.firstChild);
    }
    $.post('../Controler/Treinamento.php',{action:'VISUALIZACAO_TREINAMENTOS',codMembro:codMembro},function(treinamentos){
        $.each(treinamentos,function(indice,treinamento){
            lista+='<tr>';
            lista+='<td>'+treinamento.DuracaoDias+'</td>';
            lista+='<td>'+treinamento.HorasTotais+'</td>';
            lista+='<td>'+treinamento.TipoTreinamento+'</td>';
            lista+='</tr>';
        });
        boxTabelaTreinamento.innerHTML=lista;
    },'json');
}
//Codigo a partir daqui é só efeito visual dos componentes do DOM
function startFadeInDados(){
    var foto = document.getElementById('foto');
    var tabelaProjeto = document.getElementById('compartimentoTabelaProjeto');
    var tabelaTreinamento=document.getElementById('compartimentoTabelaTreinamento');
    setInterval(function () {
        changeOpacity(foto);
        changeMarginTopo(foto);
    },40);
    setInterval(function () {
        changeOpacity(tabelaProjeto);
        changeMarginTopo(tabelaProjeto);
    },40);
    setInterval(function () {
        changeOpacity(tabelaTreinamento);
        changeMarginTopo(tabelaTreinamento);
    },40);
}
//O conceito de reuso foi usado fortemente aqui
function changeOpacity(elemento){
    var opacityElemento = Number(elemento.style.getPropertyValue('opacity'));
    if(opacityElemento<1){
        opacityElemento+=0.08;
        elemento.style.opacity=opacityElemento;
    }
}
function changeMarginTopo(elemento){
    var elementoMarginTop=Number(elemento.style.marginTop);
    while(elementoMarginTop<2){
        elementoMarginTop=elementoMarginTop+0.025;
        elemento.style.marginTop=elementoMarginTop+'%';
    }
}