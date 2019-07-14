function carregaDados(codMembro){
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

//Codigo a partir daqui é só efeito visual dos componentes do DOM
function startFadeInDados(){
    var foto = document.getElementById('foto');
    var tabelaProjeto = document.getElementById('compartimentoTabelaProjeto');
    setInterval(function () {
        changeOpacity(foto);
        changeMarginTopo(foto);
    },40);
    setInterval(function () {
        changeOpacity(tabelaProjeto);
        changeMarginTopo(tabelaProjeto);
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