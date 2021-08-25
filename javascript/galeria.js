let imagens= document.querySelectorAll('.pequena_img');
let modelo = document.querySelector('.modelo');
let modeloImg = document.querySelector('#modelo_img');
let btVoltar = document.querySelector('#bt_voltar');
let srcVal="";

for(let i =0; i<imagens.length;i++){
    imagens[i].addEventListener('click',function(){
        
        srcVal = imagens[i].getAttribute('src');
        modeloImg.setAttribute('src', srcVal);
        modelo.classList.toggle('modelo_ativo');
    });
    
}


btVoltar.addEventListener('click', function(){
    modelo.classList.toggle('modelo_ativo');
});
