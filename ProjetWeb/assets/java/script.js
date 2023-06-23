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

function PreViewImg(input, imgPreview){
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(imgPreview).attr('style', "background-image: url('"+e.target.result+"');");
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function subir(){
	window.scrollTo(0, 0);
}

function mostrar(ocu, chave){
    for (var i=0; i<ocu.length; i++){	
		if (i<chave){
			ocultar(ocu[i], 0);	
		}else{
			ocultar(ocu[i], 1);
		};
	};
};

function ocultar(obj, es){
	let div = document.querySelector(obj);
	if(es==1){
		div.style.display = 'flex';
	}else{
		div.style.display = 'none';
	};
};

function redirect(page) {
    window.location.href = page;
}