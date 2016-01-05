// Empty JS for your own code to be here

   var time=0;
    setInterval(function(){


 time++;
if(time==1){

 $('.img_carrousel1').fadeOut(1000,function(){
         $('.img_carrousel2').fadeIn(800).end();})
          $('.sp1').removeClass('typcn-media-record-outline');
            $('.sp1').addClass('typcn-media-record');
            $('.sp2').removeClass('typcn-media-record');
            $('.sp2').addClass('typcn-media-record-outline');

}else if(time==2){

 $('.img_carrousel2').fadeOut(1000,function(){
         $('.img_carrousel3').fadeIn(800).end();})
         $('.sp2').removeClass('typcn-media-record-outline');
            $('.sp2').addClass('typcn-media-record');
            $('.sp3').removeClass('typcn-media-record');
            $('.sp3').addClass('typcn-media-record-outline');
         
}
if(time==3){

 $('.img_carrousel3').fadeOut(1000,function(){
         $('.img_carrousel1').fadeIn(800).end();})
         $('.sp3').removeClass('typcn-media-record-outline');
            $('.sp3').addClass('typcn-media-record');
            $('.sp1').removeClass('typcn-media-record');
            $('.sp1').addClass('typcn-media-record-outline');
        
time=0;
}
     


     }, 4000);


function diraiz() {
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
}

$(document).ready(main);




 var contador=1;


  function main () {
  	$('.img_carrousel1').attr('src',diraiz()+'librerias/img/carr3.png');
  	$('.img_carrousel2').attr('src',diraiz()+'librerias/img/carr2.jpg');
  	$('.img_carrousel3').attr('src',diraiz()+'librerias/img/carr1.jpg');

  $('.img_carrousel2').fadeOut(0);
  $('.img_carrousel3').fadeOut(0);
 
 
$('.entrar').click(function(event) {
	
	$('html, body').animate({scrollLeft:1340}, 'slow');


});
       
$(document).on("scroll", function(){
    
 
            
               
                var coords = '-'+$(document).scrollTop()+ 'px';
               
               $('body').css({'background-position': '0px '+ coords });
               console.log(coords)
           
});





  $('.typcn-delete-outline').click(function() {

   $('.muestra2').css( {'backgroundColor':'rgba(255,79,79,1);'});
$('.muestra2 .con').empty();
   

})




















  	$('.menu').click(function(){

if(contador==1){
$('nav').animate({

	left:'0'
})
contador=0;

}else{
contador=1;
$('nav').animate({

	left:'-100%'
})


}


  	})
  	$('.submenu').click(function(){

$(this).children('.children').slideToggle();




  	})
  	// body...
  }




