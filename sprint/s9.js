//var tab = [0];
var max=0;
console.log("Input");
for (var i = 1; i <= 5; i++) {
    usrIpt = Number.parseInt(prompt("Entrez le nombre numéro " + i + ":"));
    console.log("Entrez le numéro " + i + " :" + usrIpt);
    if (usrIpt > max) {
        max = usrIpt;
    }
}
console.log("Output\n Le plus grand de ces nombre est :" + max);