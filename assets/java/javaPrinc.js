function numberRadom(max, min, qt){
    let nuns = [];
    for(var i=0; i<qt; i++){
        nuns[i] = Math.round((Math.random() * max ) + min);
    }
    return nuns;
};
function Codigo(digito, val){
    let poss = [];
    for(var i=0; i<digito; i++){
        poss[i] = Math.round((Math.random() *  digito) + 0);
    }
    let res = val[poss[0]]+""+val[poss[1]]+""+val[poss[2]]+""+val[poss[3]]+""+val[poss[4]]+""+val[poss[5]];
    return res;
}