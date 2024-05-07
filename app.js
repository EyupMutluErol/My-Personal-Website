var resimal=document.querySelector('img')
var resimler=['./Resimler/kizKulesi.jpg','./Resimler/Taksim.jpg','./Resimler/kapalicarsi-istanbul.jpg','./Resimler/bogazKoprusu.jpg']
var sayac=0;

function ileri(){
    sayac++
    if(sayac>=resimler.length){
        sayac=0;
        resimal.src=resimler[sayac]
    }
    else{
        resimal.src=resimler[sayac]
    }
}
function geri(){
    sayac--
    if(sayac<0){
        sayac=resimler.length-1
        resimal.src=resimler[sayac]
    }
    else{
        resimal.src=resimler[sayac]
    }
}