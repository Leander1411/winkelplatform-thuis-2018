
   $(document).ready(function() {
       $(".sidebar").css({"width":"0px"});
$(".sidebar").children().css({"display":"none"});
  $(".sidebar_button").click(function() {
      if($(".sidebar").css('width') == '200px') {
          $(".sidebar").animate({
              width: '0px'
          },200,function(){
              $(".sidebar").children().css({"display":"none"});
          });
         // $(".sidebar_button").
         $(this).html('filters openen');
      }
      else {
          $(".sidebar").animate({
              width: '200px'
          },200,function(){
              $(this).children().css({"display":"block"});
          });
          $(this).html('Filters sluiten'); 
      }
      // $(".sidebar").animate({
      //     width: '200px'
      // });
  });
//    $(".sidebar_button").click(function() {
//        if($(".layout_container").css('grid-template-columns') == "200px 1fr 1fr 1fr") {
//            $(".layout_container").animate({
//                grid-template-columns: '0px 1fr 1fr 1fr'
//            });
//        }
//        else {
//            grid-template-columns: '200px 1fr 1fr 1fr'
//        }
//    }
});