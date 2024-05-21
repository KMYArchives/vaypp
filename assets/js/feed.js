// Variable of control's of element's
var display, selected;

// Open and close the edit post box
$('.menu-top-edit-post').click(function(){
    // Actived item
    selected = 'act-item';
    
    if($('.edit-post').show()){
        // Hide all
        $('.edit-post').hide();

        // Get all class of div 
        display = $(this).parent().find(this);
        
        // Check if class 'act-edit-post-box' is enabled
		if(!(display.hasClass(selected))){
            // Add class
			display.addClass(selected);
            // Show the menu
            $('#toggle-' + $(this).attr('id')).fadeIn();
		}else{
            // Remove class
			display.removeClass(selected);
            // Hide the menu
            $('#toggle-' + $(this).attr('id')).fadeOut();
        }
    }else{
        display.removeClass(selected);
        // Hide the menu
        $('#toggle-' + $(this).attr('id')).fadeOut();
    }
});

// FEED AREA

// Open the new post modal
$('#newPostModal').click(function(){
    // Open the modal window
    $('#modalWindow').delay(200).slideDown(400);
    // Open the mask
    $('.mask').fadeIn(200);
});

// Close the new post modal
$('.mask, #closeModalWindow').click(function(){
    // Close the modal window
    $('#modalWindow').slideUp(200);
    // Close the mask
    $('.mask').delay(200).fadeOut(400);
});

// COMMENT'S AREA

// Toggle comment's area
$('#toggleComments').click(function(){
    // Actived item
    selected = 'act-item';

    // Get all class of div 
    display = $(this).parent().find(this);
    
    // Check if class 'act-edit-post-box' is enabled
    if(!(display.hasClass(selected))){
        // Add class
        display.addClass(selected);
    }else{
        // Remove class
        display.removeClass(selected);
    }
    // Toggle comment's area
    $('.comments').slideToggle();
});

// Toggle replied's
$('#toggleReplied').click(function(){
    $('.replied').slideToggle();
    $('.lm-replied').slideToggle();
});