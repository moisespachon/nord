$(document).ready(main);

var contador = 0 ;

function main () {
	console.log(contador);
		if (contador==1) {
			$('.menu-btns').stop(true, true).animate ({
				right: '0'
			});
			document.getElementById("capme").style.display = 'block';
			contador = 0;
		} else {
			contador = 1;
			document.getElementById("capme").style.display = 'none';
			$('.menu-btns').stop(true, true).animate ({
				right: '-100%'
			})
		}
}

/*$('.menu_bar').click(function(){
	main();
});

$('#capme').on('click', function(){
	console.log('aca debes meter la funcion de cerrar');
	main();
});
*/
/*var $owl = $('#myCarousel');
var owl = $owl.owlCarousel({
  autoplay: true,
  dots: false,
  loop: true,
  nav: true,
  navText: [ "<i class=\"fa fa-chevron-left\"></i>",
             "<i class=\"fa fa-chevron-right\"></i>" ],
  responsiveBaseElement: '.main',
  responsive : {
    0 : {
      items: 1,
      slideBy: 1,
    },
    400 : {
      items: 2,
      slideBy: 1,
    },
    768 : {
      items: 2,
      slideBy: 2,
    },
    992 : {
      items: 2,
      slideBy: 2,
    },
    1200 : {
      items: 2,
      slideBy: 2,
    },
  },
});

$('.sidebar-switcher').click(function(){
  $('body').toggleClass( 'body-open' );
  $('.main').one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function(event) {
    owl.trigger('refresh.owl.carousel');
  });
});*/

$(document).ready(function() {
 
  $("#owl-example").owlCarousel({
      loop: true,
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      responsive:{
        0:{
            items:2
        },
        480:{
            items:3
        },
        768:{
            items:3
        },
        991:{
            items:4
        },
        1024:{
            items:2
        }
    }

 
  });
 
});


function formvalidate (){
  var vacio= document.forms["registro"]["username"].value;
  if (x==""){
    alert("El campo Username no debe quedar vacio.");
    return false;
  }
}
