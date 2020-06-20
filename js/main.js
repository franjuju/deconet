$(".emotion-pin").click(function (){
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

var multiple = new Multiple({
  selector: '.jauge-detail',
  background: 'linear-gradient(to right, #FF0066, #33CCFF)'
});

$(".button-reduce").click(function(){
   if (!$(".jauge6").children().hasClass("active")){
    $(".jauge6").children().addClass("active")
  } else if (!$(".jauge5").children().hasClass("active")){
    $(".jauge5").children().addClass("active")
  } else if (!$(".jauge4").children().hasClass("active")){
    $(".jauge4").children().addClass("active")
  } else if (!$(".jauge3").children().hasClass("active")){
    $(".jauge3").children().addClass("active")
  } else if (!$(".jauge2").children().hasClass("active")){
    $(".jauge2").children().addClass("active")
  } else if (!$(".jauge1").children().hasClass("active")){
    $(".jauge1").children().addClass("active")
  } 
})
$(".button-add").click(function(){
  if ($(".jauge1").children().hasClass("active")){
    $(".jauge1").children().removeClass("active")
  } else if ($(".jauge2").children().hasClass("active")){
    $(".jauge2").children().removeClass("active")
  } else if ($(".jauge3").children().hasClass("active")){
    $(".jauge3").children().removeClass("active")
  } else if ($(".jauge4").children().hasClass("active")){
    $(".jauge4").children().removeClass("active")
  } else if ($(".jauge5").children().hasClass("active")){
    $(".jauge5").children().removeClass("active")
  } else if ($(".jauge6").children().hasClass("active")){
    $(".jauge6").children().removeClass("active")
  } 
})