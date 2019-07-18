function carregaDados(codMembro){
    carregaTabelaProjeto(codMembro);
    carregaTabelaTreinamento(codMembro);
    carregaTabelaEvento(codMembro);
    carregaTabelaAcao(codMembro);
}
//Parte para carregar as tabelas
function cleanTabelas(elemento){
    while(elemento.firstChild){
        elemento.removeChild(elemento.firstChild);
    }
}
function carregaTabelaProjeto(codMembro){
    var lista='';
    let tabelaBoxProjeto=document.getElementById('boxTabelaProjeto');
    cleanTabelas(tabelaBoxProjeto);
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
    cleanTabelas(boxTabelaTreinamento);
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
function carregaTabelaEvento(codMembro){
    var lista='';
    let boxTabelaEvento=document.getElementById('boxTabelaEvento');
    cleanTabelas(boxTabelaEvento);
    $.post('../Controler/Evento.php',{action:'VISUALIZACAO_EVENTOS',codMembro:codMembro},function(eventos){
        $.each(eventos,function(indice,evento){
            lista+='<tr>';
            lista+='<td>'+evento.NomeEventos+'</td>';
            lista+='<td>'+evento.Data+'</td>';
            lista+='<td>'+evento.Descricao+'</td>';
            lista+='</tr>';  
        }); 
        boxTabelaEvento.innerHTML=lista;
    },'json');
}
function carregaTabelaAcao(codMembro){
    var lista='';
    let boxTabelaAcao=document.getElementById('boxTabelaAcao');
    cleanTabelas(boxTabelaAcao);
    $.post('../Controler/Acao.php',{action:'VISUALIZACAO_ACAO',codMembro:codMembro},function(acoes){
        $.each(acoes,function(indice,acao){
            lista+='<tr>';
            lista+='<td>'+acao.Nome+'</td>';
            lista+='<td>'+acao.Descricao+'</td>';
            lista+='<td>'+acao.Data+'</td>';
            lista+='<td>'+acao.DataIni+'</td>';
            lista+='<td>'+acao.DataFim+'</td>';
            lista+='<td>'+acao.Atividades+'</td>';
            lista+='</tr>';
        });
        boxTabelaAcao.innerHTML=lista;
    },'json');
}
//Codigo a partir daqui é só efeito visual dos componentes do DOM
function startFadeInDados(){
    var foto = document.getElementById('foto');
    var tabelaProjeto = document.getElementById('compartimentoTabelaProjeto');
    var tabelaTreinamento=document.getElementById('compartimentoTabelaTreinamento');
    var tabelaEvento=document.getElementById('compartimentoTabelaEvento');
    var tabelaAcao=document.getElementById('compartimentoTabelaAcao');
    setInterval(function () {
        changeOpacity(foto);
        changeMarginTopo(foto);
        changeOpacity(tabelaProjeto);
        changeMarginTopo(tabelaProjeto);
        changeOpacity(tabelaTreinamento);
        changeMarginTopo(tabelaTreinamento);
        changeOpacity(tabelaEvento);
        changeMarginTopo(tabelaEvento);
        changeOpacity(tabelaAcao);
        changeMarginTopo(tabelaAcao);
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