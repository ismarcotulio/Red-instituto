  
function seleccion(value) {
	
	if (window.XMLHttpRequest) {
		xmlhttp3 = new XMLHttpRequest();
		} else { 
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp3.onreadystatechange=function() {
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
			document.getElementById("seleccion").innerHTML=xmlhttp3.responseText;
		}
	}
	
	xmlhttp3.open("GET","includes/seleccion.php?value="+value,true);
	xmlhttp3.send();
}

  
$(document).ready(function () {

    $("#formulariomensaje").bind("submit",function(){

        var btnEnviar = $("#enviar");

        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data:$(this).serialize(),

            beforeSend: function(){
                
                btnEnviar.val("Enviando");
                btnEnviar.attr("disabled","disabled");
            },
            complete:function(data){
            
                btnEnviar.val("Enviar mensaje");
                btnEnviar.removeAttr("disabled");
            },
            success: function(data){
               
                alert("el mensaje se ha enviado correctamente");

            },
            error: function(data){
                
                alert("Problemas al tratar de enviar el mensaje");
            }
        });

        return false;

    });
});

function mantenimiento(value){
    if (window.XMLHttpRequest) {
        xmlhttp3 = new XMLHttpRequest();
        } else { 
        xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp3.onreadystatechange=function() {
        if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
            document.getElementById("tablamantenimiento").innerHTML=xmlhttp3.responseText;
        }
    }
    
    xmlhttp3.open("GET","includes/accionmantenimiento.php?value="+value,true);
    xmlhttp3.send();
}	

$(document).ready(function () {

    $("#agregargrado").bind("submit",function(){

        var btnEnviar = $("#botongrado");

        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data:$(this).serialize(),

            beforeSend: function(){
                
                btnEnviar.val("Agregando");
                btnEnviar.attr("disabled","disabled");
                document.reload();
            },
            complete:function(data){
            
                btnEnviar.val("Agregar");
                btnEnviar.removeAttr("disabled");

            },
            success: function(data){
               
                alert("se ha agregado el grado correctamente");


            },
            error: function(data){
                
                alert("Problemas al tratar de enviar el mensaje");
            }
        });

        return false;

    });
});
function masalumno(){
    if (window.XMLHttpRequest) {
        xmlhttp3 = new XMLHttpRequest();
        } else { 
        xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp3.onreadystatechange=function() {
        if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
            document.getElementById("mascontenedor").innerHTML=xmlhttp3.responseText;
        }
    }
    
    xmlhttp3.open("GET","includes/masalumno.php",true);
    xmlhttp3.send();
}
function eliminargrado(value){
    if (window.XMLHttpRequest) {
        xmlhttp3 = new XMLHttpRequest();
        } else { 
        xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp3.onreadystatechange=function() {
        if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
            document.getElementById("mascontenedor").innerHTML=xmlhttp3.responseText;
        }
    }
    
    xmlhttp3.open("GET","includes/eliminargrado.php?value="+value,true);
    xmlhttp3.send();
}
$(document).ready(function () {

    $("#agregaralumno").bind("submit",function(){

        var btnEnviar = $("#botonalumno");

        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data:$(this).serialize(),

            beforeSend: function(){
                
                btnEnviar.val("Agregando");
                btnEnviar.attr("disabled","disabled");
                document.reload();
            },
            complete:function(data){
            
                btnEnviar.val("Agregar");
                btnEnviar.removeAttr("disabled");

            },
            success: function(data){
               
                alert("se ha agregado al alumno correctamente");


            },
            error: function(data){
                
                alert("Problemas al tratar de enviar el mensaje");
            }
        });

        return false;

    });
});
function gradoalumno(value){
if (window.XMLHttpRequest) {
        xmlhttp3 = new XMLHttpRequest();
        } else { 
        xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp3.onreadystatechange=function() {
        if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
            document.getElementById("gradoalumno").innerHTML=xmlhttp3.responseText;
        }
    }
    
    xmlhttp3.open("GET","includes/gradoalumno.php?value="+value,true);
    xmlhttp3.send();
}
function buscar(value){
if (window.XMLHttpRequest) {
        xmlhttp3 = new XMLHttpRequest();
        } else { 
        xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp3.onreadystatechange=function() {
        if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
            document.getElementById("buscar").innerHTML=xmlhttp3.responseText;
        }
    }
    
    xmlhttp3.open("GET","includes/buscar.php?value="+value,true);
    xmlhttp3.send();
}


    


