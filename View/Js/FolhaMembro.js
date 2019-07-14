function carregaDados(codMembro){
    
}

function startFadeIn(){
    var foto = document.getElementById('foto');
    setInterval(function () {
        changeOpacity(foto);
        changeMarginTopo(foto);
    },40);
}
function changeMarginTopo(foto){
    var marginTop1=Number(foto.style.marginTop);
    while(marginTop1<2){
        marginTop1=marginTop1+0.025;
        foto.style.marginTop=marginTop1+'%';
    }
}
function changeOpacity(foto){
    var opacityFoto = Number(foto.style.getPropertyValue('opacity'));
    if(opacityFoto<1){
        opacityFoto+=0.025;
        foto.style.opacity=opacityFoto;
    }
}