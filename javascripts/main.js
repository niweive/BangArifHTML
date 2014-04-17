var allPanels = $('.accordion > dd').hide();
var option = "";

function scrollToAnchor(aid){
	var aTag = $("a[name='"+ aid +"']");
	$('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

function validateForm()
{
var x=document.forms["search-form"]["service"].value;
if (x==null || x=="")
  {
  alert("Pilih layanan dulu dong, sebelum cari.");
  return false;
  }
}

$(document).ready(function() {  
  $('#menu').sidr({
  		name:'sidr',
        displace: true,
        onOpen: function(name) {
                $(".brand").fadeOut(); 
              }
  });
  $('.content').click(function(){
  	$.sidr('close', function(){ $(".brand").fadeIn(); });
  });
  
  $('.accordion > dt > a').click(function() {
  	//$(".spacer").slideUp("fast");
  	$(".navbar-extension-home").slideUp("fast");
  	$(".info-home").fadeOut("fast");
  	allPanels.slideUp();
  	option = this.id;
    $(this).parent().next().slideDown();
    
    $(this).parent().removeClass("caret-down");
    $(this).parent().addClass("caret-up");
    //scrollToAnchor('layanan');
    return false;
  });
  
  $('.accordion li').click(function() {
    $(".navbar-extension-home").slideDown("fast");
    //$(".spacer").slideDown("fast");
    //$("header").show();
    if(option == "serv"){
    	$('#txt-serv').html($(this).text());
    	$("#service").val($(this).text());
    }else{
    	$('#txt-loc').html($(this).text());
    	$("#location").val($(this).text());
    }
    
    $("#" + option + "-list li" ).removeClass("active");
    $(this).addClass("active");
    $("dt").removeClass("caret-up");
    $("dt").addClass("caret-down");
    allPanels.slideUp();
    $(".info-home").fadeIn("fast");
    //scrollToAnchor('service');
    return false;
  });
  
  
  
});







    
  
  
  
