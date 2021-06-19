// JavaScript Document
//var root='../../../services.portepay.com.ng/';
//var base=root +'mobileController/';
var base="";

$(function(e){

	$("#errmsg").hide();
    fmUpload=selector=>{
    	return new Promise((resolve, reject)=>{
    		var fd=new FormData($(selector)[0]);
    		//alert(JSON.stringify(fd));
			$.ajax({
				url:base + $(selector).attr("action"),
				type:"POST",
				data:fd,
	            dataType:"JSON",
				async:false,
				success: function(data){
					resolve(data);
				},
				error:function(e){
					reject(new Error(e));
				},
				cache:false,
				contentType:false,
				processData:false

				});
    	});
				return false;
    }

	$("#fmUpload").submit(function(){
		var fd=new FormData($(this)[0]);
		$.ajax({
			url:base + $(this).attr("action"),
			type:"POST",
			data:fd,
            dataType:"JSON",
			async:false,
			success: function(data){
				if(data.Status==1){
					if(donext){
						executeNext(data);
					}
				}
				else{
					alert("Login Failed");
				}
			},
			error:function(e){
				alert("Error " + e.responseText);
			},
			cache:false,
			contentType:false,
			processData:false
			});
		});
	});

function exitApp(){
    window.location.replace("Application/exitApp.php");
}
var donext=false;

function fmsubmit(fmSelector){
		var fd=new FormData($(fmSelector)[0]);
		$.ajax({
			url:base + $(fmSelector).attr("action"),
			type:"POST",
			data:fd,
            dataType:"JSON",
			async:true,
			success: function(data){
					if(donext){
						executeNext(data);
					}
				},
            error: function(e){
				myApp.alert("Error " + e.responseText);
            },
				cache:false,
				contentType:false,
				processData:false

			});
			return false;

}    

function sendData(action, fd){
	return new Promise((resolve, reject)=>{
		$.ajax({
			url:base + action,
			type:"POST",
			data:fd,
            dataType:"JSON",
			async:true,
			success: function(data){
				resolve(data);
				},
            error: function(e){
            	reject(new Error(e.responseText));
            },

			});
	});
}   

function sendText(action, fd){
	return new Promise((resolve, reject)=>{
		$.ajax({
			url:base + action,
			type:"POST",
			data:fd,
            dataType:"TEXT",
			async:true,
			success: function(data){
				resolve(data);
				},
            error: function(e){
            	reject(new Error(e.responseText));
            },

			});
	});
}    
function i(elem){
	return document.getElementById(elem)
}
