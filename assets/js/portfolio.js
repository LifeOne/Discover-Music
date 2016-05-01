$(document).ready(function() {
  console.log('Loaded our javascript ! :)');


  $('.size a').click(function() {
    if(clicked) {
      clicked = false;
      $('.page').addClass('page-small');
      $('.page').removeClass('page-full');
      $('.stuffs').addClass('stuffs-small');
      $('.stuffs').removeClass('stuffs-full');

      $('.size a').text('More');
    } else {
      clicked = true;
      $('.page').addClass('page-full');
      $('.page').removeClass('page-small');
      $('.stuffs').addClass('stuffs-full');
      $('.stuffs').removeClass('stuffs-small');

      $('.size a').text('Less');
    }
  });

});
