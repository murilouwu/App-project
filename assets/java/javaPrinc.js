//codigos padrões
/*
let nuns = [ 
 Math.round((Math.random() * 9 ) + 1), 
 Math.round((Math.random() * 9 ) + 1), 
 Math.round((Math.random() * 9 ) + 1), 
 Math.round((Math.random() * 9 ) + 1), 
 Math.round((Math.random() * 9 ) + 1), 
 Math.round((Math.random() * 9 ) + 1)
];
for (var i = 0; i<nuns.length; i++) {
 let lp = 0;
 while(lp==0){
  for(var i2 = 0; i2<nuns.length; i2++){
   if(nuns[i] == nuns[i2] && i!=i2){
    i2 = 0;
    nuns[i] = Math.round((Math.random() * 9 ) + 1);
   };
  }
  lp=1;
 }
}
let poss = [
 Math.round((Math.random() * 5 )), 
 Math.round((Math.random() * 5 )), 
 Math.round((Math.random() * 5 )), 
 Math.round((Math.random() * 5 )), 
 Math.round((Math.random() * 5 )), 
 Math.round((Math.random() * 5 ))
];
let res = nuns[poss[0]]+""+nuns[poss[1]]+""+nuns[poss[2]]+""+nuns[poss[3]]+""+nuns[poss[4]]+""+nuns[poss[5]];
*/

function numberRadom(max, min, qt){
    let nuns = [];
    for(var i=0; i<qt; i++){
        nuns[i] = Math.round((Math.random() * max ) + min);
    }
    return nuns;
};

function numberRadDif(max, min, nuns){
    for(var i = 0; i<nuns.length; i++) {
        let lp = 0;
        while(lp==0){
            for(var i2 = 0; i2<nuns.length; i2++){
                if(nuns[i] == nuns[i2] && i!=i2){
                    i2 = 0;
                    nuns[i] = Math.round((Math.random() * max ) + min);
                };
            }
            lp=1;
        };
    };
};

function Codigo(digito, val){
    
}