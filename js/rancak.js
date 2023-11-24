function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
}



/* scroll script */
function all_scroll(){
  "use strict";	

  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('#btt').css("display","flex");	
    }

    else{
      $('#btt').hide();
    }
  });  
};
/* end scroll script */



function back_to_top(){
  "use strict";
  $('#btt').click(function(){
	$('body,html').scrollTop(0);
    return false;
  });	
}



function open_popup(){
  "use strict";
  $('.open-popup').click(function(){
    var get_id = $(this).attr('data-popup');
	$('.open-popup[data-popup=' + get_id +']').toggleClass('show-popup');
	$('.open-popup').not('.open-popup[data-popup=' + get_id +']').removeClass('show-popup');
    $('#popup-' + get_id).slideToggle('fast');
    $('.rancak-popup').not('#popup-' + get_id).slideUp('fast');
	return false;
  });	
}



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  open_popup();
});