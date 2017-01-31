$(document).ready(function() {
    $window = $(window);
    $('section[data-type="background"]').each(function(){
        var $scroll = $(this);
            $(window).scroll(function() {
                var yPos = ($window.scrollTop() / $scroll.data('speed'));
                var coords = '50%' + yPos + 'px';
                $scroll.css('background-position', coords);
            });
    });
});


// external js: isotope.pkgd.js

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows',

});

// filter functions
var filterFns = {};

// bind filter button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});

// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});
