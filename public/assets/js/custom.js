$(".burger").click(function() {
    $(this).toggleClass("--open");
    $('aside').toggleClass('open');
    $(".main-mnu").slideToggle();
    return false;
  });