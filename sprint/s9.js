
var i;
var tab=[0];
var max=tab[0];
console.log("Input");
for(i=1;i<=5;i++){
   usrIpt=Number.parseInt(prompt("Entrez le nombre numéro "+i+":"));
   tabIn=tab.push(usrIpt);
   console.log("Entrez le numéro "+i+" :"+usrIpt);
    if(tab[i]>max){
        max=tab[i];
    }
}
console.log("Output\n Le plus grand de ces nombre est :"+max);
