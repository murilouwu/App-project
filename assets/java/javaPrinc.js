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
    let res = '';
    for(var i=0; i<poss.length; i++){
        res += val[poss[i]];
    }
    return res;
}