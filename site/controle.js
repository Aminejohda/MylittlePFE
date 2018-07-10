function verif1()
{
ch1=document.f.tc.value;
ch2=document.f.tsc.value;
var isnum = /^\d+$/.test(ch1);
if(ch1 == '' || ch2 == '' ){
alert('Tous Les champs sont obligatoires');
return false;}
if(isnum ){
alert('ne peut etre uniquement des chiffre');
return false;}
if(ch1.length < 5){
alert('akther men 5');
return false;}

 var atpos =ch1.indexOf("@");
    var dotpos = ch1.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=ch1.length) {
        alert("email 8alet");
        return false;
}

    
   
    }
