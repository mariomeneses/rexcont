$(document).ready(function(){


  $('a[href^="#"]').on('click',function (e) {
    e.preventDefault();

    var target = this.hash;
    $target = $(target);

    $('html, body').stop().animate({
      'scrollTop':  $target.offset().top
    }, 900, 'swing', function () {
      window.location.hash = target;
    });
  });



 $("#btnSubmitForm").click(function() { 
      var user_name       = $('input[name=nameInput]').val(); 
      var user_email      = $('input[name=emailInput]').val();
      var user_phone      = $('input[name=phoneInput]').val();
      var user_message    = $('textarea[name=descriptionInput]').val();
      
      //simple validation at client's end
      //we simply change border color to red if empty field using .css()
      var proceed = true;

      //everything looks good! proceed...
      if(proceed) 
      {
          //data to be sent to server
          post_data = {'nameInput':user_name, 'emailInput':user_email, 'phoneInput':user_phone,'descriptionInput':user_message};
          
          //Ajax post data to server
          $.post('function/contacto.php', post_data, function(response){  

              //load json data from server and output message     
              if(response.type == 'error')
              {
                  output = '<div class="error">'+response.text+'</div>';
              }else{
                  output = '<div class="success">'+response.text+'</div>';
                  
                  //reset values in all input fields
                  $('#contact_form input').val(''); 
                  $('#contact_form textarea').val(''); 
              }
              
              $("#result").hide().html(output).slideDown();
          }, 'json');
          
      }
  });

  //reset previously set border colors and hide all message on .keyup()
  $("#contact_form input, #contact_form textarea").keyup(function() { 
      $("#contact_form input, #contact_form textarea").css('border-color',''); 
      $("#result").slideUp();
  });


});

$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-expand-md");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});


$(document).ready(function() {
  $("#hrService").hover(
    function() {
      $("#hrHover").slideDown(500);
    }, function() {
      $("#hrHover").slideUp(500);
    });

  $("#hrService").hover(function(){
    $("#hrHover").css("display: inline-flex !important");
  }, function(){
    $("#hrHover").css("display: none");
  });

  $("#contService").hover(
    function() {
      $("#contHover").slideDown(500);
    }, function() {
      $("#contHover").slideUp(500);
    });

  $("#contService").hover(function(){
    $("#contHover").css("display: inline-flex !important");
  }, function(){
    $("#contHover").css("display: none");
  });

  $("#startService").hover(
    function() {
      $("#startHover").slideDown(500);
    }, function() {
      $("#startHover").slideUp(500);
    });

  $("#startService").hover(function(){
    $("#startHover").css("display: inline-flex !important");
  }, function(){
    $("#startHover").css("display: none");
  });

  $("#enterpriseService").hover(
    function() {
      $("#enterpriseHover").slideDown(500);
    }, function() {
      $("#enterpriseHover").slideUp(500);
    });

  $("#enterpriseService").hover(function(){
    $("#enterpriseHover").css("display: inline-flex !important");
  }, function(){
    $("#enterpriseHover").css("display: none");
  });

});

  /* FIN SCRIPT CONTACT FORM*/