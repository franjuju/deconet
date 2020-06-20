$(".emotion-pin").click(function (){
  // if ($(".emotion-pin").siblings().hasClass("active")) {
  //   $(".emotion-pin").siblings().removeClass("active")
  //   $(this).siblings().addClass("active")
  //   // $(".emotion-pin").not(this).css('opacity','0.7')
  // } else {
  //   // $(".emotion-pin").not(this).css('opacity','0.7')
  //   $(this).siblings().addClass("active")
  // }
  if($(".emotion-pin").siblings().hasClass("active")) {
    $(".emotion-pin").siblings().removeClass("active")
    $(this).siblings().addClass("active")
  } else {
    $(this).siblings().addClass("active")
  }
  
})

$(".close").click(function (){
  $(".emotion-pin").siblings().removeClass("active")
})