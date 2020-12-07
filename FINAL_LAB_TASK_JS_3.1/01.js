"use strict"




function f1(){
	let data= document.getElementById('name').value;
	if(data == ''){
		document.getElementById('head').innerHTML = 'invalid data';		
	}else{
		document.getElementById('head').innerHTML = data;
	}

}