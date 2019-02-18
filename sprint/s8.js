let nbr;
let i;
nbr = Number.parseInt(prompt("Entrez un nombre :"));
if(nbr){
for(i=0;i<=10;i++){
    console.log("Input: "+nbr);
    console.log("Output:");
    console.log(nbr+ "x"+i+" = "+nbr*i);
    }
}
else{
    console.log("Entrez un nombre svp !");
}