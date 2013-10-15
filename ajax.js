function getInfo(id){
	if(id == ""){
		document.getElementById("studinfo").innerHTML="";
		return;	
	}
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();	
	}else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState==4 && xmlhttp.status == 200){
			document.getElementById("studinfo").innerHTML=xmlhttp.responseText;
			}		
			}
	xmlhttp.open("GET","getinfo.php?q="+id,true);
	xmlhttp.send();		
	}