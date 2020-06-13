$(document).ready(function(){

	// pass the YouTube video ID into the iframe template on click/tap
	$('a.video-thumb').click(function () {
		
		// Grab the video ID from the element clicked
		var id = $(this).attr('data-youtube-id');

	
		var autoplay = '?autoplay=1';
		
		// Don't show the 'Related Videos' when the video ends
		var related_no = '&rel=0';
		
		// String the ID and param variables together
		var src = '//www.youtube.com/embed/'+id+autoplay+related_no;
		
		$("#youtube").attr('src', src);
		return false;
	
	});


	/* Modal View
	-------------------------------------------------------------------------------*/
	function toggle_video_modal() {
	    
	    // Open the Video Modal
	    $(".js-trigger-modal").on("click", function(event){
	        event.preventDefault();
	        $("body").addClass("show-video-modal");
	    });

	    // Close and Reset the Video Modal
	    $('body').on('click', '.close-video-modal, .video-modal .overlay', function(event) {
	        event.preventDefault();
	        
	        $("body").removeClass("show-video-modal");
			
	
			$("#youtube").attr('src', '');
	    });
	}
	toggle_video_modal();



});