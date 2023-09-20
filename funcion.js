
function ajax(url,method,params,container_id){
	try{
		ObjXMLHttpRequest=new XMLHttpRequest;
	
	}catch(e){
		try{
			ObjXMLHttpRequest=new ActiveXObject("Microsoft.XMLHTTP");
		
		}catch(el){
			alert("Navegador no soporta ajax")
		}
	}
	
	ObjXMLHttpRequest.onreadystatechange=function(){
		if(ObjXMLHttpRequest.readyState==4){
			document.getElementById(container_id).innerHTML=ObjXMLHttpRequest.responseText;
		}
	}
	ObjXMLHttpRequest.open(method,url,true);
	ObjXMLHttpRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	ObjXMLHttpRequest.send(params)
}

// funciones para suscripcion
function add_sus(){
    var url = 'acciones/agregar_sus.php';
    var method = 'POST';
    var params ='txtnombresus='+document.getElementById('nombresus').value;
    params+='&txtpagosus='+document.getElementById('pagosus').value;
    params+='&txtciclosus='+document.getElementById('ciclosus').value;
    params+='&txtcategoriasus='+document.getElementById('categoriasus').value;
    params+='&txtiniciosus='+document.getElementById('iniciosus').value;
    params+='&txtmonedasus='+document.getElementById('monedasus').value;
    params+='&txtduracionsus='+document.getElementById('duracionsus').value;
    params+='&txtindurasus='+document.getElementById('indurasus').value;
    params+='&txtrecordsus='+document.getElementById('recordsus').value;
    params+='&txtinrecordsus='+document.getElementById('inrecordsus').value;
    var container_id = 'list_sus';
    ajax(url,method,params,container_id);
    limpiar_sus()
}

function actualizar_sus(){
    var url = 'acciones/modificar_sus.php';
    var method = 'POST';
    var params = 'txtidsus='+document.getElementById('idsus').value;
    params+='&txtnombresus='+document.getElementById('nombresus').value;
    params+='&txtpagosus='+document.getElementById('pagosus').value;
    params+='&txtciclosus='+document.getElementById('ciclosus').value;
    params+='&txtcategoriasus='+document.getElementById('categoriasus').value;
    params+='&txtiniciosus='+document.getElementById('iniciosus').value;
    params+='&txtmonedasus='+document.getElementById('monedasus').value;
    params+='&txtduracionsus='+document.getElementById('duracionsus').value;
    params+='&txtindurasus='+document.getElementById('indurasus').value;
    params+='&txtrecordsus='+document.getElementById('recordsus').value;
    params+='&txtinrecordsus='+document.getElementById('inrecordsus').value;
    var container_id = 'list_sus';
    ajax(url,method,params,container_id);
    limpiar_sus();
}

function eliminar_sus(idsus){
    var url = 'acciones/eliminar_sus.php';
    var method = 'POST';
    var params = 'txtidsus='+idsus;
    var container_id = 'list_sus';
    ajax(url,method,params,container_id);
}

function borrar_sus(idsus,tipo){
    if (tipo == 0){
    var txt;
    if (confirm("Quiere borrar estos datos permanentemente?")) {
        txt = "datos borrados";
        var url = 'acciones/borrar_sus.php';
        var method = 'POST';
        var params = 'txtidsus='+idsus;
        var container_id = 'list_sus_pape';
        ajax(url,method,params,container_id);
    } else {
        txt = "accion cancelada";
    }
    document.getElementById("demo").innerHTML = txt;
    }else{
        var url = 'acciones/borrar_sus.php';
        var method = 'POST';
        var params = 'txtidsus='+idsus;
        var container_id = 'list_sus_pape';
        ajax(url,method,params,container_id);
    }

}

function recargar_tabla_sus(){
    borrar_sus(0,1)
}

function seleccionar_sus(a,b,c,d,e,f,g,h,i,j,k){
    document.getElementById('idsus').value=(a);
    document.getElementById('nombresus').value=(b);
    document.getElementById('pagosus').value=(c);
    document.getElementById('ciclosus').value=(d);
    document.getElementById('categoriasus').value=(e);
    document.getElementById('iniciosus').value=(f);
    document.getElementById('monedasus').value=(g);
    document.getElementById('duracionsus').value=(h);
    document.getElementById('indurasus').value=(i);
    document.getElementById('recordsus').value=(j);
    document.getElementById('inrecordsus').value=(k);
    document.getElementById('botonmodificarsus').disabled = false;
    document.getElementById('botoncancelarsus').disabled = false;
    document.getElementById('botonagregarsus').disabled = true;
    document.getElementById('botonpruebasus').disabled = false;
}

function recuperar_sus(id,b,c,d,e,f,g,h,i,j,k){
    document.getElementById('nombresus').value=(b);
    document.getElementById('pagosus').value=(c);
    document.getElementById('ciclosus').value=(d);
    document.getElementById('categoriasus').value=(e);
    document.getElementById('iniciosus').value=(f);
    document.getElementById('monedasus').value=(g);
    document.getElementById('duracionsus').value=(h);
    document.getElementById('indurasus').value=(i);
    document.getElementById('recordsus').value=(j);
    document.getElementById('inrecordsus').value=(k);
    document.getElementById('botonmodificarsus').disabled = true;
    document.getElementById('botoncancelarsus').disabled = true;
    document.getElementById('botonagregarsus').disabled = false;
    borrar_sus(id,1);
    alert("datos recuperados en el tablero de edición");

}

function limpiar_sus(){
    document.getElementById('nombresus').value="";
    document.getElementById('pagosus').value="";
    document.getElementById('ciclosus').value="";
    document.getElementById('categoriasus').value="";
    document.getElementById('iniciosus').value="";
    document.getElementById('monedasus').value="";
    document.getElementById('duracionsus').value="";
    document.getElementById('indurasus').value="";
    document.getElementById('recordsus').value="";
    document.getElementById('inrecordsus').value="";
    document.getElementById('botonmodificarsus').disabled = true;
    document.getElementById('botoncancelarsus').disabled = true;
    document.getElementById('botonagregarsus').disabled = false;
}


// funciones para proveedor
function add_pvd(){
    var url = 'acciones/agregar_pvd.php';
    var method = 'POST';
    var params ='&txtnombrepvd='+document.getElementById('nombrepvd').value;
    params+='&txttelefonopvd='+document.getElementById('telefonopvd').value;
    params+='&txtcorreopvd='+document.getElementById('correopvd').value;
    params+='&txtserviciospvd='+document.getElementById('serviciospvd').value;
    params+='&txtsitiopvd='+document.getElementById('sitiopvd').value;
    var container_id = 'list_pvd';
    ajax(url,method,params,container_id);
    limpiar_pvd()
}

function actualizar_pvd(){
    var url = 'acciones/modificar_pvd.php';
    var method = 'POST';
    var params = '&txtidpvd='+document.getElementById('idpvd').value;
    params+='&txtnombrepvd='+document.getElementById('nombrepvd').value;
    params+='&txttelefonopvd='+document.getElementById('telefonopvd').value;
    params+='&txtcorreopvd='+document.getElementById('correopvd').value;
    params+='&txtserviciospvd='+document.getElementById('serviciospvd').value;
    params+='&txtsitiopvd='+document.getElementById('sitiopvd').value;
    var container_id = 'list_pvd';
    ajax(url,method,params,container_id);
    limpiar_pvd()
}

function seleccionar_pvd(a,b,c,d,e,f){
    document.getElementById('modificarpvd').disabled = false;
    document.getElementById('cancelarpvd').disabled = false;
    document.getElementById('agregarpvd').disabled = true;
    document.getElementById('idpvd').value=(a);
    document.getElementById('nombrepvd').value=(b);
    document.getElementById('telefonopvd').value=(c);
    document.getElementById('correopvd').value=(d);
    document.getElementById('serviciospvd').value=(e);
    document.getElementById('sitiopvd').value=(f);
}

function eliminar_pvd(idpvd){
    var url = 'acciones/eliminar_pvd.php';
    var method = 'POST';
    var params = 'txtidpvd='+idpvd;
    var container_id = 'list_pvd';
    ajax(url,method,params,container_id);
}

function borrar_pvd(idpvd,tipo){
    if (tipo == 0){
        var txt;
        if (confirm("Quiere borrar estos datos permanentemente?")) {
            txt = "datos borrados";
            var url = 'acciones/borrar_pvd.php';
            var method = 'POST';
            var params = 'txtidpvd='+idpvd;
            var container_id = 'list_pvd_pape';
            ajax(url,method,params,container_id);
        } else {
            txt = "accion cancelada";
        }
        document.getElementById("demo").innerHTML = txt;
    }else{
        var url = 'acciones/borrar_pvd.php';
        var method = 'POST';
        var params = 'txtidpvd='+idpvd;
        var container_id = 'list_pvd_pape';
        ajax(url,method,params,container_id);
    }
}

function recargar_tabla_pvd(){
    borrar_pvd(0,1);
}

function recuperar_pvd(id,a,b,c,d,e){
    document.getElementById('nombrepvd').value=(a);
    document.getElementById('telefonopvd').value=(b);
    document.getElementById('correopvd').value=(c);
    document.getElementById('serviciospvd').value=(d);
    document.getElementById('sitiopvd').value=(e);
    document.getElementById('modificarpvd').disabled = true;
    document.getElementById('cancelarpvd').disabled = true;
    document.getElementById('agregarpvd').disabled = false;
    borrar_pvd(id,1);
    alert("datos recuperados en el tablero de edición");
}

function limpiar_pvd(){
    document.getElementById('nombrepvd').value="";
    document.getElementById('telefonopvd').value="";
    document.getElementById('correopvd').value="";
    document.getElementById('serviciospvd').value="";
    document.getElementById('sitiopvd').value="";
    document.getElementById('modificarpvd').disabled = true;
    document.getElementById('cancelarpvd').disabled = true;
    document.getElementById('agregarpvd').disabled = false;
}
