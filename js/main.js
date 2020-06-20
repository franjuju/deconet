$(".emotion-pin").click(function (){
  if ($(this).children().hasClass("active")) {
    $(this).children().addClass("active")
  } else if ($(".emotion-pin").children().hasClass("active")) {
    $(".emotion-pin").children().removeClass("active")
    $(this).children().addClass("active")
    // $(".emotion-pin").not(this).css('opacity','0.7')
  } else {
    // $(".emotion-pin").not(this).css('opacity','0.7')
    $(this).children().addClass("active")
  }
  
})