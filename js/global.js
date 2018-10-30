// Assignment 13.2: Final Project: 
// Add jQuery Libraries to Project and Add Interactivity
// Author: Steve Dillon
// Created: 12-6/15

	/*  
	*	Flexslider (http://www.woothemes.com/flexslider/) function for main slider and thumbnails.
	*/ 

$(window).load(function(){
	if( $('.home').find('.flexslider').length ){
		$('.home').find('.flexslider').flexslider({
			animation: "slide",
        controlNav: "thumbnails",
        start: function(slider){
          $('body').removeClass('loading');
			}
		});
	}
});

/* Tooltip */

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
 
  $(function() {
    // there's the gallery and the cart
    var $gallery = $( "#gallery" ),
        $cart = $( "#cart" );
 
    // let the gallery items be draggable
    $( "li", $gallery ).draggable({
      cancel: "a.ui-icon", // clicking an icon won't initiate dragging
      revert: "invalid", // when not dropped, the item will revert back to its initial position
      containment: "document",
      helper: "clone",
      cursor: "move"
    });
 
    // let the cart be droppable, accepting the gallery items
    $cart.droppable({
      accept: "#gallery > li",
      activeClass: "ui-state-highlight",
      drop: function( event, ui ) {
        deleteImage( ui.draggable );
      }
    });
 
    // let the gallery be droppable as well, accepting items from the cart
    $gallery.droppable({
      accept: "#cart li",
      activeClass: "custom-state-active",
      drop: function( event, ui ) {
        recycleImage( ui.draggable );
      }
    });
 
    // image deletion function
    var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
    function deleteImage( $item ) {
      $item.fadeOut(function() {
        var $list = $( "ul", $cart ).length ?
          $( "ul", $cart ) :
          $( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $cart );
 
        $item.find( "a.ui-icon-cart" ).remove();
        $item.append( recycle_icon ).appendTo( $list ).fadeIn(function() {
          $item
            .animate({ width: "30%" })
            .find( "img" )
              .animate({ height: "30%" });
        });
      });
    }
 
    // image recycle function
    var cart_icon = "<a href='link/to/cart/script/when/we/have/js/off' title='Delete this image' class='ui-icon ui-icon-cart'>Delete image</a>";
    function recycleImage( $item ) {
      $item.fadeOut(function() {
        $item
          .find( "a.ui-icon-refresh" )
            .remove()
          .end()
          .css( "width", "38%")
          .append( cart_icon )
          .find( "img" )
            .css( "height", "auto" )
          .end()
          .appendTo( $gallery )
          .fadeIn();
      });
    }
 
    // image preview function, demonstrating the ui.dialog used as a modal window
    function viewLargerImage( $link ) {
      var src = $link.attr( "href" ),
        title = $link.siblings( "img" ).attr( "alt" ),
        $modal = $( "img[src$='" + src + "']" );
 
      if ( $modal.length ) {
        $modal.dialog( "open" );
      } else {
        var img = $( "<img alt='" + title + "' style='display: none; padding: 8px;' />" )
          .attr( "src", src ).appendTo( "body" );
        setTimeout(function() {
          img.dialog({
            title: title,
            width: 700,
            modal: true
          });
        }, 1 );
      }
    }
 
    // resolve the icons behavior with event delegation
    $( "ul.gallery > li" ).click(function( event ) {
      var $item = $( this ),
        $target = $( event.target );
 
      if ( $target.is( "a.ui-icon-cart" ) ) {
        deleteImage( $item );
      } else if ( $target.is( "a.ui-icon-zoomin" ) ) {
        viewLargerImage( $target );
      } else if ( $target.is( "a.ui-icon-refresh" ) ) {
        recycleImage( $item );
      }
 
      return false;
    });
  });

// From tutorial: https://css-tricks.com/scrollfollow-sidebar/

$(function() {

    var $sidebar   = $("#cart"), 
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 25;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        } else {
            $sidebar.stop().animate({
                marginTop: 20
            });
        }
    });
    
});

