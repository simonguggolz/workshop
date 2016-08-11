<footer> 

<div class="container text-center-xs">
  <div class="row mt-sm-50 mt-xs-25">
    <div class="col-sm-3 col-xs-12">
      <div class="h4">Your Company</div>
      <ul class="list-unstyled">
        <li>
          <a href="#">Über uns</a>
        </li>
        <li>
          <a href="#">Karriere</a>
        </li>
        <li>
          <a href="#">Kontakt</a>
        </li>
        <li>
          <a href="#">Datenschutzerklärung</a>
        </li>
        <li>
          <a href="#">AGB</a>
        </li>
        <li>
          <a href="#">Impressum</a>
        </li>
      </ul>
    </div>
    <div class="col-sm-3 hidden-xs">
      <div class="h4">Service</div>
      <ul class="list-unstyled">
        <li>
          <a href="#">Zahlungsarten</a>
        </li>
        <li>
          <a href="#">Versandarten & -kosten</a>
        </li>
        <li>
          <a href="#">Widerrufsrecht</a>
        </li>
        <li>
          <a href="#">Warenkorb</a>
        </li>
        <li>
          <a href="#">Zur Kasse</a>
        </li>
        <li>
          <a href="#">Hilfe</a>
        </li>
      </ul>
    </div>
    <div class="col-sm-3 col-xs-12">
      <div class="h4">Social Media</div>
      <ul class="list-unstyled social-icons">
        <li>
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i>Google+</a>
        </li>
      </ul>
    </div>
    <div class="col-sm-3 col-xs-12">
      <div class="h4">Zahlung & Versand</div>
        <ul class="list-inline">
          <li>
            <a href="#">
              <img src="dist/images/visa.png">
            </a>  
          </li>
          <li>
            <a href="#">
              <img src="dist/images/paypal.png">
            </a>  
          </li>
          <li>
            <a href="#">
              <img src="dist/images/sofort.png">
            </a>  
          </li>
          <li>
            <a href="#">
              <img src="dist/images/dhl.png">
            </a>  
          </li>
          <li>
            <a href="#">
              <img src="dist/images/post.png">
            </a>  
          </li>
        </ul>
      </div>
  </div>
</div>
<div class="mb-xs-25 mt-xs-25 footer-lower-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 text-center-xs mt-xs-25">
        *Alle Preise inkl. gesetzlicher MwSt. zzgl. Versandkosten
      </div>
      <div class="col-sm-6 text-right text-center-xs mt-xs-25">
        <span>Powered by <a target="_blank" href="http://www.plentyflow.de"><img src="dist/images/plentyflow.png"></a></span>
      </div>
    </div>
  </div>
</div>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<script src="dist/scripts/jquery.unveil.js"></script>
<script src="dist/scripts/mobilemenu.js"></script>

<script>
  $(document).ready(function () {
    //initialize swiper when document ready  
    var mySwiper = new Swiper ('#swiper-container1', {
     	 // Optional parameters
      	direction: 'horizontal',
      	loop: true,
      	pagination: '.swiper-pagination',
      	nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    	paginationClickable: true
    })        
  });
</script>
<script>
	var swiper = new Swiper('#swiper-container2', {
	  slidesPerView: 4,
	  paginationClickable: true,
	  spaceBetween: 30,
	  nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
	  breakpoints: {
	   	 // when window width is <= 320px
	    320: {
	      slidesPerView: 1,
	      spaceBetweenSlides: 10
	    },
	    // when window width is <= 480px
	    480: {
	      slidesPerView: 2,
	      spaceBetweenSlides: 20
	    },
	    // when window width is <= 640px
	    768: {
	      slidesPerView: 3,
	      spaceBetweenSlides: 30
		}	
	}
	});
</script>
<script>
	var swiper = new Swiper('#swiper-container3', {
	  slidesPerView: 4,
	  paginationClickable: true,
	  spaceBetween: 30,
	  nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
	  breakpoints: {
	   	 // when window width is <= 320px
	    320: {
	      slidesPerView: 1,
	      spaceBetweenSlides: 10
	    },
	    // when window width is <= 480px
	    480: {
	      slidesPerView: 2,
	      spaceBetweenSlides: 20
	    },
	    // when window width is <= 640px
	    768: {
	      slidesPerView: 3,
	      spaceBetweenSlides: 30
		}	
	}
	});
</script>
<script>
    $(document).ready(function() {
       $("img").unveil(200);
    });
    $(window).resize(function(event) {
        $("img").unveil(200);
    });
</script>
