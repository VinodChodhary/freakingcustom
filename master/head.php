<!DOCTYPE html>
<html lang="en-us">

   <head>
      <title>IBI</title>
	  
	  <!---------- General Meta File---------->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta charset="UTF-8">
	  
	  <!---------- General Css File---------->
      <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
      <link href="css/style.css" rel='stylesheet' type='text/css' />
	 
	    <link href="css/animate.css" rel='stylesheet' type='text/css' />
	   
		  <link href="css/freaking-custom.css" rel='stylesheet' type='text/css' />
		 
	     <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Quicksand" rel="stylesheet">
		 
		 	 
	   <style>
	   /*=============kashif bhai fade in out===============*/

.effect-right {
    -moz-transform: translate3d(-600px, 0px, 0px);
    -webkit-transform: translate3d(-600px, 0px, 0px);
    -o-transform: translate(-600px, 0px);
    -ms-transform: translate(-600px, 0px);
    transform: translate3d(-600px, 0px, 0px);
    transition: all 0.6s ease-in-out;
}
.effect-left {
    -moz-transform: translate3d(400px, 0px, 0px);
    -webkit-transform: translate3d(400px, 0px, 0px);
    -o-transform: translate(400px, 0px);
    -ms-transform: translate(400px, 0px);
    transform: translate3d(400px, 0px, 0px);
    transition: all 0.6s ease-in-out;
}

.effect-zoom {
    -moz-transform: scale(1.5);
    -webkit-transform:  scale(1.5);
    -o-transform: translate(400px, 0px) scale(1.5);
    -ms-transform: translate(400px, 0px) scale(1.5);
    transform:  scale(0.4);
    transition: all 0.5s ease-in-out;
}
.in-view {
    opacity: 1;
    -moz-transform: translate3d(0px, 0px, 0px);
    -webkit-transform: translate3d(0px, 0px, 0px);
    -o-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    transform: translate3d(0px, 0px, 0px);
}
/*=============kashif bhai fade in out===============*/

</style>
	   
		 
	  <!---------- General Script File---------->
	 
         <script src="js/jquery-1.11.3.min.js"></script>
       
	  <script src="js/bootstrap.min.js"></script>
	   <script type="text/javascript" src="js/main.js"></script> 
  <script src="js/SmoothScroll.min.js"></script>
	 <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();

    </script>
	
	
	
		    <!-- KASHIF Style.js -->
      <script>
	  
	  $(document).ready(function(){
         	var $animation_elements = $('.effect-zoom');
         	var $window = $(window);
         
         	function check_if_in_view() {
         		var window_height = $window.height();
         		var window_top_position = $window.scrollTop();
         		var window_bottom_position = (window_top_position + window_height);
         	 
         		$.each($animation_elements, function() {
         			var $element = $(this);
         			var element_height = $element.outerHeight();
         			var element_top_position = $element.offset().top;
         			var element_bottom_position = (element_top_position + element_height);
         	 
         			//check to see if this current container is within viewport
         			if ((element_bottom_position >= window_top_position) &&
         				(element_top_position <= window_bottom_position - 100)) {
         				$element.addClass('in-view');
         			}
         			else {
         				$element.removeClass('in-view');
         			}
         		});
         	}
         
         	$window.on('scroll resize', check_if_in_view);
         	$window.trigger('scroll');
         });
         $(document).ready(function(){
         	var $animation_elements = $('.effect-left');
         	var $window = $(window);
         
         	function check_if_in_view() {
         		var window_height = $window.height();
         		var window_top_position = $window.scrollTop();
         		var window_bottom_position = (window_top_position + window_height);
         	 
         		$.each($animation_elements, function() {
         			var $element = $(this);
         			var element_height = $element.outerHeight();
         			var element_top_position = $element.offset().top;
         			var element_bottom_position = (element_top_position + element_height);
         	 
         			//check to see if this current container is within viewport
         			if ((element_bottom_position >= window_top_position) &&
         				(element_top_position <= window_bottom_position - 100)) {
         				$element.addClass('in-view');
         			}
         			else {
         				$element.removeClass('in-view');
         			}
         		});
         	}
         
         	$window.on('scroll resize', check_if_in_view);
         	$window.trigger('scroll');
         });
         
         $(document).ready(function(){
         	var $animation_elements = $('.effect-right');
         	var $window = $(window);
         
         	function check_if_in_view() {
         		var window_height = $window.height();
         		var window_top_position = $window.scrollTop();
         		var window_bottom_position = (window_top_position + window_height);
         	 
         		$.each($animation_elements, function() {
         			var $element = $(this);
         			var element_height = $element.outerHeight();
         			var element_top_position = $element.offset().top;
         			var element_bottom_position = (element_top_position + element_height);
         	 
         			//check to see if this current container is within viewport
         			if ((element_bottom_position >= window_top_position) &&
         				(element_top_position <= window_bottom_position - 100)) {
         				$element.addClass('in-view');
         			}
         			else {
         				$element.removeClass('in-view');
         			}
         		});
         	}
         
         	$window.on('scroll resize', check_if_in_view);
         	$window.trigger('scroll');
         });
      </script> 
      <!-- KASHIF Style.js -->
	  
<script>   
	 
$(document).ready(function(){
    $(window).resize(function() {

        ellipses1 = $("#bc1 :nth-child(2)")
        if ($("#bc1 a:hidden").length >0) {ellipses1.show()} else {ellipses1.hide()}
        
        ellipses2 = $("#bc2 :nth-child(2)")
        if ($("#bc2 a:hidden").length >0) {ellipses2.show()} else {ellipses2.hide()}
        
    })
    
});

</script>
	
 
  </head>
  
  
  
  </html>
     