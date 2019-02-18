let nbr = Number.parseInt(prompt("Entrez un nombre :"));
let i;

if(nbr){
    console.log("Input: " + nbr);
    console.log("Output:");
for(i=0;i<=10;i++){
    console.log(nbr+ "x"+i+" = "+nbr*i);
    }
}
else{
    console.log("Entrez un nombre svp !");
}