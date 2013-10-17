function getInfo(id){
	
	if(id == ""){
		$("#studinfo").text("");	
		
	}else{
	  $.ajax({
		  type: 'GET',
        url: 'getinfo.php',
        data: 'q='+id,
        cache: false,
        error: function(e){
            alert(e);
        },
        success: function(response){
            $("#studinfo").html(response);    
        }
    }); 
    }
    
 }