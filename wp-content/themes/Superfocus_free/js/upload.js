jQuery(document).ready(function() {   
        //upbottom为上传按钮的id   
        $('.up #upbottom').click(function() {   
             targetfield = $(this).prev('input');   
             tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');   
             return false;   
        });   
        
        window.send_to_editor = function(html) {   
             imgurl = $('img',html).attr('src');   
             $(targetfield).val(imgurl);   
             tb_remove();   
        }   
        
  

$(".new_pic span #pics_1").click(function() { 
      $(".new_pic").children("div").removeClass("opne");
	  $("#picss1").addClass("opne");
	  $(".new_pic span").children("a").removeClass("chouws");
       $(this).addClass("chouws")

  }); 
  
  $(".new_pic span #pics_2").click(function() { 
      $(".new_pic").children("div").removeClass("opne");
	  $("#picss2").addClass("opne");
	  $(".new_pic span").children("a").removeClass("chouws");
       $(this).addClass("chouws")

  }); 
  
  $(".new_pic span #pics_3").click(function() { 
      $(".new_pic").children("div").removeClass("opne");
	  $("#picss3").addClass("opne");
	  $(".new_pic span").children("a").removeClass("chouws");
       $(this).addClass("chouws")

  }); 
  
  $(".new_pic span #pics_4").click(function() { 
      $(".new_pic").children("div").removeClass("opne");
	  $("#picss4").addClass("opne");
	  $(".new_pic span").children("a").removeClass("chouws");
       $(this).addClass("chouws")

  }); 
  
  
  $("#pic_1").click(function() { 
      $("#wenzixiaot").children("div").removeClass("opne");
	  $("#moke1").addClass("opne");
	  $("#wenzixiaot span").children("a").removeClass("chouws");
       $(this).addClass("chouws")

  }); 
  
  $(" #pic_2").click(function() { 
      $("#wenzixiaot").children("div").removeClass("opne");
	  $("#moke2").addClass("opne");
	  $("#wenzixiaot span").children("a").removeClass("chouws");
       $(this).addClass("chouws")

  }); 
  
  $("#pic_3").click(function() { 
      $("#wenzixiaot").children("div").removeClass("opne");
	  $("#moke3").addClass("opne");
	  $("#wenzixiaot span").children("a").removeClass("chouws");
       $(this).addClass("chouws")

  }); 
  
 

 });  



