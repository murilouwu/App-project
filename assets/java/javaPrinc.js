function uploadImage(file, nmUser, mailUser) {
    //baixar img
}

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

function modalText(id, text){
    ocultar(id[1], 1);
    let modalText = document.querySelector(id[0]);
    modalText.innerHTML = text;
}

function modalX(id, fun){
    if(fun==0){
        let time = 700;
        let div = document.querySelector(id);
        div.style.animation = (time/1000)+'s modalSumir linear';
        setTimeout(()=>{
            div.style.animation = (time/1000)+'s modal linear';
            ocultar(id,0);
        },time);
    }
}

function redirect(page) {
    window.location.href = page;
}  