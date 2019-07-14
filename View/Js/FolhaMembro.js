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
    setInterval(function () {
        changeOpacityFoto(foto);
        changeMarginTopoFoto(foto);
    },40);
}
function changeMarginTopoFoto(foto){
    var marginTop1=Number(foto.style.marginTop);
    while(marginTop1<2){
        marginTop1=marginTop1+0.025;
        foto.style.marginTop=marginTop1+'%';
    }
}
function changeOpacityFoto(foto){
    var opacityFoto = Number(foto.style.getPropertyValue('opacity'));
    if(opacityFoto<1){
        opacityFoto+=0.08;
        foto.style.opacity=opacityFoto;
    }
}