// JavaScript Document
$(function(){
  var ii=0;
  var stra=$("#banner").find("li");
  var len=stra.length;
  stra.eq(0).show();
  var orager=setInterval(timesar,3000);
  function timesar(){
    ii++;
    if(ii>len-1){
    ii=0;
    }
    dig(ii);
  }
  $(".prev,.next,#stra,.btn").hover(function(){
    clearInterval(orager);
  },function(){
    orager=setInterval(timesar,5000);
  });
  function dig(ii){
    stra.eq(ii).fadeIn().siblings().fadeOut();
    $(".btn span").stop().removeClass("hover").eq(ii).stop().addClass("hover");
  }
  $(".btn span").mouseenter(function(){
    ii=$(this).index();
    dig(ii);
  });


  $(function () {
     $('.wm_footer').css('display','none');
  });




  //个人信息与捐赠的注释
  $(".u_info").hover(function() {
      $(".yw_js").show({effect: "scale", duration: 100})
  },function () {
      $(".yw_js").hide({effect: "scale", duration: 100})
  });


});
