//-----------------------
var token =localStorage.getItem( '[id=logout-form][name=undefined][id=undefined][name=_token]');
var token2= localStorage.getItem( '[id=undefined][name=undefined][id=undefined][name=_token]');
        if ((token !== null)||(token2 !== null)){
            console.log ( "existe");
            localStorage.removeItem('[id=logout-form][name=undefined][id=undefined][name=_token]');
            localStorage.removeItem('[id=undefined][name=undefined][id=undefined][name=_token]');
		}  
		localStorage.removeItem('[id=undefined][name=undefined][id=conDetenido][name=conDetenido]');
		localStorage.removeItem('[id=undefined][name=undefined][id=esRelevante][name=esRelevante]');