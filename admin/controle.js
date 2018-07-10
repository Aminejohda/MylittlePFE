function verif1()
{
ch1=document.f.tc.value;
ch2=document.f.tsc.value;
var isnum = /^\d+$/.test(ch1);
if(isnum ){
alert('Tous Les champs sont obligatoires');
return false;}
}
