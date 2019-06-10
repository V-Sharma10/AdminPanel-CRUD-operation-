$(document).ready(function(){

  var HideandShow = 300;
  var limit =300;
  var forSmall=300;
  var CurrentScroll = $(window).scrollTop();
    $(window).scroll(function(event){

        var NextScroll = $(this).scrollTop();

          if (NextScroll >= forSmall && NextScroll <= 50 ){
            //decrease the titlebar

              $("#logo").animate({marginLeft:'80px'},{duration:400,queue:false});
              $("#logo").animate({width:'120px'},{duration:400,queue:false});
              //  $("#logo").animate({left:'80px'},400);
              //$("#name").animate({fontSize:'25px'},{duration:400,queue:false});
              $("#name").animate({Top:'0px'},{duration:400,queue:false});
              $("#name").animate({fontSize:'28px'},{duration:400,queue:false});
              $("#titleName").animate({marginTop:'-130px'},{duration:400,queue:false});
              $("#titleName").animate({marginLeft:'-250px'},{duration:400,queue:false});
              $("#title_box").animate({paddingBottom:'0px'},{duration:400,queue:false});
              //$("#titleName").animate({Top:'0px'},{duration:400,queue:false});
        }

        else if (NextScroll < forSmall) {
                  //original size of the title bar
                  $("#logo").animate({marginLeft:'44.5%'},{duration:400,queue:false});
                  $("#logo").animate({marginRight:'50%'},{duration:400,queue:false});
                  $("#logo").animate({width:'150px'},{duration:400,queue:false});
                  $("#name").animate({fontSize:'25px'},{duration:400,queue:false});
                  $("#titleName").animate({marginTop:'00px'},{duration:400,queue:false});
                  $("#titleName").animate({marginLeft:'0px'},{duration:400,queue:false});
                  $("#title_box").animate({paddingBottom:'0px'},{duration:400,queue:false});





        }

//hiding the title bar after limit =400
if(NextScroll >= limit){
        if (NextScroll >= HideandShow  ){

           //write the codes related to down-ward scrolling here
           


           $("#logo").animate({marginLeft:'80px'},{duration:400,queue:false});
           $("#logo").animate({width:'120px'},{duration:400,queue:false});
         //  $("#logo").animate({left:'80px'},400);
           //$("#name").animate({fontSize:'25px'},{duration:400,queue:false});
             $("#name").animate({Top:'0px'},{duration:400,queue:false});
             $("#name").animate({fontSize:'28px'},{duration:400,queue:false});
             $("#titleName").animate({marginTop:'-130px'},{duration:400,queue:false});
             $("#titleName").animate({marginLeft:'-250px'},{duration:400,queue:false});
             $("#title_box").animate({paddingBottom:'40px'},{duration:400,queue:false});
             //

           HideandShow = NextScroll;
        }
        else {
           //write the codes related to upward-scrolling here
          


           $("#logo").animate({marginLeft:'80px'},{duration:400,queue:false});
           $("#logo").animate({width:'120px'},{duration:400,queue:false});
         //  $("#logo").animate({left:'80px'},400);
           //$("#name").animate({fontSize:'25px'},{duration:400,queue:false});
             $("#name").animate({Top:'0px'},{duration:400,queue:false});
             $("#name").animate({fontSize:'28px'},{duration:400,queue:false});
             $("#titleName").animate({marginTop:'-130px'},{duration:400,queue:false});
             $("#titleName").animate({marginLeft:'-250px'},{duration:400,queue:false});
             $("#title_box").animate({paddingBottom:'40px'},{duration:400,queue:false});
             //

           HideandShow = NextScroll;
        }

}

    });
});
