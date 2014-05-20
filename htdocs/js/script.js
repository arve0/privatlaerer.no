$("document").ready(function($){ //html-lasted ned
  // variabler
  var href = $(location).attr('href');
  var meny = $('.meny');
  var scr_w = $(window).width();
  // funksjoner
  var hideMenu = function(){
   if(scr_w < 768) $('#collapse').collapse('hide');
  }
  // bredde meny når affix
  meny.css('width', $('.slagord').width());
  $(window).resize(function() {
    meny.css('width', $('.slagord').width());
    scr_w = $(window).width();
  });
  meny.affix({ offset: meny.position() });
  $('.ytre-meny').height(meny.outerHeight() + 15);
  // scroll og skjul mobilmeny
  $('.nav a[href*="#"]').click(function() {
    hideMenu();
    var link = $(this).attr('href'),
        id = link.slice(link.indexOf('#')),
        elem = $(id);
    if (elem.length) {
      var scroll = elem.offset().top;
      $('html, body').animate({ scrollTop: scroll-50 },1000);
      return false;
    }
  });
  $('.nav a[href="/"]').click(function() {
    hideMenu();
    if ('/' == $(location).attr('pathname')) {
      $('html, body').animate({ scrollTop: 0},1000);
      return false;
    }
  });
  // scroll ved link fra annen side
  if (-1 != href.indexOf('#')) {
    var scroll = $(href.slice(href.indexOf('#'))).offset().top;
    $('html, body').animate({ scrollTop: scroll-50 },1000);
  }
  // contact form
  $('input[required]').attr("data-validation-required-message", "Feltet er obligatorisk.");
  $('textarea[required]').attr("data-validation-required-message", "Beskjed må fylles ut.");
  $('input[type=email]').attr("data-validation-email-message", "Epostadresse på formen navn@domene.no.");
  $('input,textarea').not("[type=submit]").jqBootstrapValidation({
    submitSuccess: function sendSkjema(form, event){
      event.preventDefault();
      $.post('/ajax-epost.php', form.serialize())
        .done(function(data){
          $('.modal.ok').modal();
          form.find("input,textarea").val("");
        })
        .fail(function(data){
          $('.modal.feil').modal();
        });
      
    }
  });
});
