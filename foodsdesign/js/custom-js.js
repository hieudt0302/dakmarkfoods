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
    
})