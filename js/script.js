/*==========================================
# drawer js
===========================================*/
jQuery('.drawer-icon').on('click',function(e){
  e.preventDefault();
  jQuery('.drawer-icon').toggleClass('is-active');
  jQuery('.drawer-content').toggleClass('is-active');
  jQuery('.drawer-bg').toggleClass('is-active');

  return false;
});

/*==========================================
# accordion faq
===========================================*/
jQuery('.faq-question').click(function() {
  jQuery(this).next().slideToggle();
  jQuery(this).children('.faq-icon').toggleClass( 'is-open' );
});

/*==========================================
# scroll-hint
===========================================*/
window.addEventListener('DOMContentLoaded', function(){
  new ScrollHint('.js-scrollable');
});