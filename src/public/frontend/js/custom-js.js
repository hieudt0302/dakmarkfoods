$(document).ready(function() {
    $( '#site-search' ).on( 'focus, click', function( event ) {
        // Prevent the default action
        event.preventDefault();

        // Display the Full Screen Search
        $( '#full-screen-search' ).addClass( 'open' );

        // Focus on the Full Screen Search Input Field
        $( '#full-screen-search input' ).focus();
    } );

	// $( '#full-screen-search' ).on( 'click', function( event ) {
 //        // Prevent the default event
 //        event.preventDefault();

 //        // Hide the Full Screen Search
 //        $( '#full-screen-search' ).removeClass( 'open' );
 //    } );
    // Hide the Full Screen search when the user clicks the close button
    $( '#full-screen-search button.close' ).on( 'click', function( event ) {
        // Prevent the default event
        event.preventDefault();

        // Hide the Full Screen Search
        $( '#full-screen-search' ).removeClass( 'open' );
    } );

    /* RATING BOX */
    $('#reviewboxform a.star').on( 'focus, click', function( event ) {
        event.preventDefault();
        var curID = $(this).attr("id");
        var yourRt = curID.charAt(0);
        let el = document.querySelector('#reviewboxform'); 
        var danhgia = el.querySelectorAll('a.star');

        for (i = 0; i < danhgia.length; i++) {
            var exiKey = danhgia[i].querySelectorAll('i.danhgia');
            
            if (danhgia[i].id != curID){
                for (var j=0; j < exiKey.length; j++) {
                    exiKey[j].setAttribute("class", "danhgia fa fa-star-o");
                }
            }else{
                for (var j=0; j < exiKey.length; j++) {
                    exiKey[j].setAttribute("class", "danhgia fa fa-star");
                }
            }
        }
        // GET and SET Rating select value
        $("#yourrating option[value="+yourRt+"]").prop('selected', true);
        // $('#yourrating').val(yourRt).prop('selected', true);
    });
    //Testing Rating value
    // $('body').on( 'focus, click', function( event ) {
    //     var selectRation = $("#yourrating option:selected").text();
    //     console.log(selectRation);
    // });
    // 
    
    var proTabs = document.getElementById("product-tabs");
    if(proTabs){
        $('body').scrollspy({ target: '#product-tabs' })
        $('#product-tabs').affix({
          offset: {
            top: getOffset(1),
            bottom: getOffset(0)
          }
        });
        $('#product-tabs').on('activate.bs.scrollspy', function () {
            var children = $("#product-tabs li.active > a").attr("href");
            // console.log(children);
            // if (children == "#reviewbox"){
            //     $('#product-tabs').data('bs.affix').options.offset.bottom = $("#reviewboxform").offset().top
            // }else{
            //     var mainNav = $('.main-nav').outerHeight(true);
            //     var mota = $('#mota').outerHeight(true);
            //     var topPos = mainNav + mota;
            //     $('#product-tabs').data('bs.affix').options.offset.top = topPos;
            //     $('#product-tabs').data('bs.affix').options.offset.bottom = $('#reviewboxform').offset().bottom;
            // }
        });
    }

    function getOffset(isTop){
        if (isTop == 1){
            return ($('.main-nav').outerHeight(true) + $('#mota').outerHeight(true) - 50);
        }
        if (isTop == 0){
            var mainNav = $('.main-nav').outerHeight(true);
            var mota = $('#mota').outerHeight(true);
            var specs  = $('#specs').outerHeight(true);
            var reviewbox  = $('#reviewbox').outerHeight(true);
            return (mainNav+mota+specs+reviewbox+150);
        }

    }

    /* SUBSCRIBE */
    $('.popup-with-form').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#newsletter-popup',

        // When elemened is focused, some mobile browsers in some cases zoom in
        // It looks not nice, so we disable it:
        callbacks: {
            beforeOpen: function() {
                if($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            }
        }
    });

    var popDisplayed = $.cookie('popDisplayed');
    if(popDisplayed == '1'){
        return false;
    }else{
        setTimeout(function(){
            // showPopup()
            $('#popup-with-form').click();
        }, 4000);
        //expires in 1 day
        $.cookie('popDisplayed', '1', { expires: 1 });
    }
    
})