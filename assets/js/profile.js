// Fixed the sidebar's
$(window).scroll(function(){
    // Friend's of user
    var photosUser = $('#photosUser');

    // Follower's of user
    var followersUser = $('#followersUser');

    // If scrollTop is most than 440 the pin of sidebar
    if($(this).scrollTop() >= 764){
        // Photo's of user
        photosUser.css({
            position:'fixed',
            'margin-top': '-27.5em',
        });
        // Follower's of user
        followersUser.css({
            position:'fixed',
            'margin-top': '-9.5em',
        });
    // Else the sidebar will be unpin of sidebar
    }else{
        // Photo's of user
        photosUser.css({
            position: 'absolute',
            'margin-top': '24em',
        });
        // Follower's of user
        followersUser.css({
            position:'absolute',
            'margin-top': '42em'
        });
    }
});

// Variable of control's of element's
var display, selected;

// Edit cover label
$('#editCoverArea').click(function(){    
    // Selected class edit cover menu
    selected = 'actived-edit-cover-menu';

    // Get all class of div 
    display = $(this).parent().find(this);

    if(!(display.hasClass(selected))){
        // Add class
        display.addClass(selected);
    }else{
        // Remove class
        display.removeClass(selected);
    }

    // Show the menu and hide information and avatar of user
    $('#editModeCover').slideToggle();
    $('#avatarCover').fadeToggle();
    $('#infoCover').fadeToggle();
});