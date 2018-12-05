jQuery(document).ready(function( $ ) {

  // init Masonry
  var $grid = jQuery('.grid-row').masonry({
      gutter: 20,
      columnWidth: '.custom-card',
      itemSelector: '.custom-card',
      horizontalOrder: true,
      percentPosition: true
  });
  // layout Masonry after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.masonry('layout');
  });

});
