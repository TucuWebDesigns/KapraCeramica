function validar(){
    var validaremail= /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    var valoremail = document.getElementById("email");
    var valornombre = document.getElementById("nombre");  
    var valorapellido = document.getElementById("apellido");  
	var valortel = document.getElementById ("movil");
	var valormsj = document.getElementById ("mensaje");
	var msj = valormsj.value.length;

		
		if(valornombre.value == null || valornombre.value.length ==0) { 
                valornombre.focus();    
                alert('No has escrito tu Nombre'); 
                return false; 
            }
		if(!isNaN(valornombre)){
            alert("Solo permite texto");
            return false;
        }
		if(valorapellido.value == null || valorapellido.value.length ==0) { 
                valorapellido.focus();    
                alert('No has escrito tu Apellido'); 
                return false; 
            }
		if(!isNaN(valorapellido)){
            alert("Solo permite texto");
            return false;
        }
        if( !(/^\+\d{2,3}\d{9}$/.test(valortel.value) || /^\d{9}$/.test(valortel.value))){
            alert ("Movil incorrecto")    
            return false;
        }
		
        if(!(validaremail.test(valoremail.value))){
                valoremail.focus();
                alert('Email no es valido');
                return false;
            }	
		if(  msj < 10 || msj > 200 ){
			valormsj.focus();
			alert("Mensaje debe contener entre 10 y 200 caracteres");
			return false;
			}
    
       return true;    
}