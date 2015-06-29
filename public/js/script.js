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

var xmlhttp,a,b,c,d,e,f,g,h,i,j,q,r,s,va,vb,vc,vd,ve,vf,vg,vh,vi,vj,vq,vr,vs,fa,fb,fc,ea,eb,ec,pb,pc,pd,sa,sb,sc,sd;
function init(){
	a=document.getElementById("firstname");
	b=document.getElementById("lastname");
	c=document.getElementById("email");
	d=document.getElementById("phone");
	e=document.getElementById("company");
	f=document.getElementById("address");
	g=document.getElementById("city");
	h=document.getElementById("postcode");
	i=document.getElementById("state");
	j=document.getElementById("country");
	q=document.getElementsByName("shippingmethod");
	r=document.getElementsByName("paymentmethod");
	s=document.getElementById("comments");
	fa=document.getElementById("formOne");
	fb=document.getElementById("formTwo");
	fc=document.getElementById("formThree");
	ea=document.getElementById("editOne");
	eb=document.getElementById("editTwo");
	ec=document.getElementById("editThree");
	pb=document.getElementById("p4");
	pc=document.getElementById("p5");
	pd=document.getElementById("p6");
	sb=document.getElementById("op4");
	sc=document.getElementById("op5");
	sd=document.getElementById("op6");
	ra=document.getElementById("error1");
	rb=document.getElementById("error2");
	rc=document.getElementById("error3");
	rd=document.getElementById("error4");
	re=document.getElementById("error5");
	rf=document.getElementById("error6");
	rg=document.getElementById("error7");
	rh=document.getElementById("error8");
	ri=document.getElementById("error9");
	rj=document.getElementById("error10");
	rk=document.getElementById("error11");
	rl=document.getElementById("error12");
	va=a.value;
	vb=b.value;
	vc=c.value;
	vd=d.value;
	ve=e.value;
	vf=f.value;
	vg=g.value;
	vh=h.value;
	vi=i.value;
	vj=j.value;

	for(ii=0; ii<q.length; ii++){
		if(q[ii].checked){vq=q[ii].value;}
	}
	for(ii=0; ii<r.length; ii++){
		if(r[ii].checked){vr=r[ii].value;}
	}
}
function GetXmlHttpObject(){
	if(window.XMLHttpRequest){return new XMLHttpRequest();}	// code for IE7+, Firefox, Chrome, Opera, Safari
	if(window.ActiveXObject){return new ActiveXObject("Microsoft.XMLHTTP");}	// code for IE6, IE5
	return null;
}
function empty(x){
	if((x.length==0)||(x=="")||(x.trim()=="")||(x=="undefined")){return true;}
	return false;
}
function formOne(){
	init();
	var rav=true;
	if(empty(va)){ra.setAttribute("class","show");rav=false;}else{ra.setAttribute("class","none");}
	if(empty(vb)){rb.setAttribute("class","show");rav=false;}else{rb.setAttribute("class","none");}
	if(empty(vc)){rc.setAttribute("class","show");rav=false;}else{rc.setAttribute("class","none");}
	if(empty(vd)){rd.setAttribute("class","show");rav=false;}else{rd.setAttribute("class","none");}
	if(empty(vf)){rf.setAttribute("class","show");rav=false;}else{rf.setAttribute("class","none");}
	if(empty(vg)){rg.setAttribute("class","show");rav=false;}else{rg.setAttribute("class","none");}
	if(empty(vh)){rh.setAttribute("class","show");rav=false;}else{rh.setAttribute("class","none");}
	if(empty(vi)){ri.setAttribute("class","show");rav=false;}else{ri.setAttribute("class","none");}
	if(empty(vj)){rj.setAttribute("class","show");rav=false;}else{rj.setAttribute("class","none");}
	if(rav){
		a.className+=" disabled";
		b.className+=" disabled";
		c.className+=" disabled";
		d.className+=" disabled";
		e.className+=" disabled";
		f.className+=" disabled";
		g.className+=" disabled";
		h.className+=" disabled";
		i.className+=" disabled";
		j.className+=" disabled";
		fa.className+=" none";
		ea.className=ea.className.replace(" none","");
		pb.className=pb.className.replace(" disabled","");
		sb.className+=" in";
	}
}
function editOne(){
	init();
	a.className=a.className.replace(" disabled","");
	b.className=b.className.replace(" disabled","");
	c.className=c.className.replace(" disabled","");
	d.className=d.className.replace(" disabled","");
	e.className=e.className.replace(" disabled","");
	f.className=f.className.replace(" disabled","");
	g.className=g.className.replace(" disabled","");
	h.className=h.className.replace(" disabled","");
	i.className=i.className.replace(" disabled","");
	j.className=j.className.replace(" disabled","");
	fa.className=fa.className.replace(" none","");
	ea.className+=" none";
}
function formTwo(){
	init();
	rk.setAttribute("class","none");
	var rav=false;
	for(ii=0; ii<q.length; ii++){
		if(q[ii].checked){vq=q[ii].value;rav=true;}
	}
	if(rav){
		for(ii=0; ii<q.length; ii++){document.getElementById("radio"+(ii+1)).disabled=true;}
		fb.className+=" none";
		eb.className=eb.className.replace(" none","");
		pc.className=pc.className.replace(" disabled","");
		sc.className+=" in";
	}else{rk.setAttribute("class","show");}
}
function editTwo(){
	init();
	for(ii=0; ii<q.length; ii++){document.getElementById("radio"+(ii+1)).disabled=false;}
	fb.className=fb.className.replace(" none","");
	eb.className+=" none";
}
function formThree(){
	init();
	rl.setAttribute("class","none");
	var rav=false;
	for(ii=0; ii<r.length; ii++){if(r[ii].checked){vr=r[ii].value;rav=true;}}
	if(rav){
		for(ii=0; ii<r.length; ii++){document.getElementById("radoi"+(ii+1)).disabled=true;}
		fc.className+=" none";
		ec.className=ec.className.replace(" none","");
		pd.className=pd.className.replace(" disabled","");
		sd.className+=" in";
	}else{rl.setAttribute("class","show");}
}
function editThree(){
	init();for(ii=0; ii<r.length; ii++){document.getElementById("radoi"+(ii+1)).disabled=false;}fc.className=fc.className.replace(" none","");ec.className+=" none";
}
function order(){
	xmlhttp=GetXmlHttpObject();
	if(xmlhttp==null){alert("Your browser does not support AJAX!");return;}
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4 && xmlhttp.status == 200){
			if("OK"){window.location="./?!=order";}else{alert(xmlhttp.responseText);}
		}
	};
	init();
	va=a.value;vb=b.value;vc=c.value;vd=d.value;ve=e.value;vf=f.value;vg=g.value;vh=h.value;vi=i.value;vj=j.value;vs=s.value;for(ii=0; ii<q.length; ii++){if(q[ii].checked){vq=q[ii].value;}}for(ii=0; ii<r.length; ii++){if(r[ii].checked){vr=r[ii].value;}}
	xmlhttp.open("GET",("../view.public.order.php?order&a="+va+"&b="+vb+"&c="+vc+"&d="+vd+"&e="+ve+"&f="+vf+"&g="+vg+"&h="+vh+"&i="+vi+"&j="+vj+"&q="+vq+"&r="+vr+"&s="+vs+""),true);
	xmlhttp.send(null);
}
function date_time(id,ud){
	date = new Date;
	year = date.getFullYear();
	month = date.getMonth();
	if(ud == "id-ID"){
		months = new Array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
		days = new Array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
	}else{
		months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
		days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
	}
	d = date.getDate();
	day = date.getDay();
	h = date.getHours();
	if(h<10){h = "0"+h;}
	m = date.getMinutes();
	if(m<10){m = "0"+m;}
	s = date.getSeconds();
	if(s<10){s = "0"+s;}
	result = ''+days[day]+', '+months[month]+' '+d+' '+year+' '+h+':'+m+':'+s;
	document.getElementById(id).innerHTML = result;
	setTimeout('date_time("'+id+'","'+ud+'");','1000');
	return true;
}
