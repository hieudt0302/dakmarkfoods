$(document).ready(function() {
    $('#lang-select').click(function() {
    	var langcontent = $(".lang-select-content").html()
    	console.log(langcontent)
    	var lanp = document.createElement("div")
    	lanp.innerHTML = langcontent
    	console.log(lanp)
        swal({
        	title: "Language",
        	button: false,
            content: lanp,
        });
    })
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
})