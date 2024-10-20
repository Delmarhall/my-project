$(document).ready(function(){ 
  var touch   = $('#resp-menu');
  var menu    = $('.menu');

  $(touch).on('click', function(e) {
      e.preventDefault();
      menu.slideToggle();
  });
  
  $(window).resize(function(){
      var w = $(window).width();
      if(w > 767 && menu.is(':hidden')) {
          menu.removeAttr('style');
      }
  });
  
});
/*------------ Home Page Counter js------------*/
$('.stat-number').each(function () {
  var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
  $(this).prop('Counter', 0).animate({
     Counter: $(this).text()
  }, {
     duration: 5000,
     step: function (func) {
        $(this).text(parseFloat(func).toFixed(size));
     }
  });
}); 
/*------------ Home Page Counter js------------*/
/*------------ Tooltip  js-------------*/
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
/*------------ Tooltip  js-------------*/



/*----------- Screen reader acess js ------------*/
//For Making Screen Reader On
function responVoiceOn(){ 
  // var htmlString = $('body').text();
  // var plainText = htmlString.replace(/<[^>]+>/g, '');
  var fintext = [''];
  
  fintext.push($.trim($('.topbar_rightsec').text().replace(/\s+/g, ' ')));
  fintext.push('e-Amrit Logo and e-Amrit Header Image');
  $('body nav ul li a').each(function(){
    fintext.push($.trim($(this).text().replace(/\s+/g, ' ')));
  });
  
  fintext.push($.trim($('.ongoing-sec-bg').text().replace(/\s+/g, ' ')));
  fintext.push($.trim($('.banner-title, .banner_quates_txt, .banner-honour-txt, .banner-para, .e-mobility-sec-bg, .ourtools_box, .whatsnew_sec_head, .whatsnew_sec_para, .whatsnew_slide, .followus_sec, .importantlonks_head, .imp-link-title, .ecpowerdSec_head, .footer-head, .footer_links').text().replace(/\s+/g, ' ')));
  
  responsiveVoice.setTextReplacements([{
    searchvalue: "e-Amrit",
    newvalue: "Accelerated e-Mobility Revolution for USA Transportation"
  }]);
  responsiveVoice.speak(fintext.join(' '),'USA Female');
  }
  
  //For Making Screen Reader Off
  function responVoiceOff(){
      // one.css("background-color","green");
      responsiveVoice.pause();
  // responsiveVoice.resume();
  }
  
  //To Resume Screen Reader Access
  function responVoiceResume(){
   responsiveVoice.resume();
  }
/*----------- Screen reader acess js ------------*/
/*----------- search toogle js-------*/
$('.search-toggle').addClass('closed');

$('.search-toggle .search-icon').click(function(e) {
  if ($('.search-toggle').hasClass('closed')) {
    $('.search-toggle').removeClass('closed').addClass('opened');
    $('.search-toggle, .search-container').addClass('opened');
    $('#search-terms').focus();
  } else {
    $('.search-toggle').removeClass('opened').addClass('closed');
    $('.search-toggle, .search-container').removeClass('opened');
  }
});

/*------------ menubar toggle --------------*/
function meutoggle(x) {
  x.classList.toggle("change");
}
