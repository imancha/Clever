/*
 * script.js
 * 
 * Copyright 2015 Imancha <imancha_266@ymail.com>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

var xmlhttp;
function GetXmlHttpObject(){
	// code for IE7+, Firefox, Chrome, Opera, Safari
	if (window.XMLHttpRequest){	return new XMLHttpRequest(); }
	// code for IE6, IE5
	if (window.ActiveXObject){ return new ActiveXObject("Microsoft.XMLHTTP"); }
	return null;
}
function rmove(a,b){
	if(confirm('Delete \''+b+'\' from the database?')){
    alert("OK");
  } else {
    
	}
/*	
	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null){ alert ("Your browser does not support AJAX!"); return; }	
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status == 200){
			if(xmlhttp.responseText == "address"){				
			}
		}
	};
	xmlhttp.open("GET",("./ajax/ajax.php?a="+firstname+"&b="+lastname+"&c="+email+"&d="+company+"&e="+address+"&f="+city+"&g="+postcode+"&h="+state+"&i="+country+"&!=address"),true);
	xmlhttp.send(null);	*/
}
function deleteCategory(x){
	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null){ alert ("Your browser does not support AJAX!"); return; }	
	xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==4 && xmlhttp.status == 200){document.getElementById("msg").innerHTML = xmlhttp.responseText;}};
	xmlhttp.open("GET","./ajax/ajax.php?!=categories&i=delete&)="+x,true);
	xmlhttp.send(null);
}
function updateC(x){
	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null){ alert ("Your browser does not support AJAX!"); return; }	
	xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==4 && xmlhttp.status == 200){if("OK"){window.location.href="./?!=categories"}}};
	xmlhttp.open("GET","./ajax/ajax.php?!=categories&i=update&)="+x+"&*="+document.getElementById("name").value,true);
	xmlhttp.send(null);
}
