// JavaScript Document
$(document).ready(function(e) {
    $(".mainmu").mouseover(
		function()
		{
			$(this).children(".mw").show()
		}
	)
	$(".mainmu").mouseout(
		function ()
		{
			$(this).children(".mw").hide()
		}
	)
});


function lo(x)
{
	location.replace(x)
}



function op(x,y,url)
{
	$(x).fadeIn()
	if(y)
	$(y).fadeIn()
	if(y&&url)
	$(y).load(url)
}



function cl(x)
{
	$(x).fadeOut();
}


function openModel(url){
	$(".overlay").fadeIn(100);
	$("#modelBox").load(url);
}


function closeModel(){
	$(".overlay").fadeOut();
}
