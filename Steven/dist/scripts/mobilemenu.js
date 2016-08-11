$(document).ready(function() {
    // === Moblie Menu Layout ===
    var $Menu = $('.mobile-menu');
    var $ActiveLink = $Menu.find('li').has('ul').children('a');
    var $MenuChildUl = $Menu.find('li ul');

    // Prevent default action of link href="#"

    // Active menu when click link on li
    $ActiveLink.on('click', function () {
        $(this).closest('li').addClass('active');
        $(this).closest('ul').addClass('active');
    });

    // Add event to back button
    $MenuChildUl.find('.__back a').on('click', function (event) {
        event.preventDefault();
        $(this).closest('li.active').removeClass('active');
        $(this).closest('ul.active').removeClass('active');
    });
    $('.menu-toggle').click(function(event){
      event.preventDefault();
      if ( $('body').hasClass('left-sidebar-open') ) {
            $( this ).removeClass('left-sidebar-open')
            }
      $('body').toggleClass('left-sidebar-open');
      $('.menu-toggle .nav-icon').toggleClass('open');
    });
    $('.basket-toggle').click(function(event){
      event.preventDefault();
      if ( $('body').hasClass('right-sidebar-open') ) {
            $( this ).removeClass('right-sidebar-open')
            }
      $('body').toggleClass('right-sidebar-open');
    });
});