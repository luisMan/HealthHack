 
!function()
{
  

 function recursiveCheck()
  {
   

     var ajaxPostData  =  $.post("reading.php",
              {"reading": "data"
               });
              ajaxPostData.done(function(data) {
               //this ajax post has done
              if(data==-1){
                alert("bad")
              }else{
                 $("#recent_reading" ).html(data);         
              }
            });
              ajaxPostData.fail(function(dataError) {
              console.log(dataError)
            });
            //this function will always listen to the post request if done succefully this can update the div 
              ajaxPostData.always(function(data) {
            

           });
  
       //check for a recent reply 
       // var ajaxPostData  =  $.post("ajax/replyCheck.php",
       //        {"check_reply": "load_reply",
       //          "recent_post": "new_reply"
       //         });
       //        ajaxPostData.done(function(data) {
       //         //this ajax post has done
       //      });
       //        ajaxPostData.fail(function(dataError) {
       //       // console.log(dataError)
       //      });
       //      //this function will always listen to the post request if done succefully this can update the div 
       //        ajaxPostData.always(function(data) {
       //          data = data.replace("-1", "");
       //          data = jQuery.parseJSON(data);
       //          if(jQuery.isArray(data) &&data[0]!==null){
       //            getReplies(data[0][0].comment_id,data[0][0].user_id,"replyBox"+data[0][0].comment_id,data[0][0].id);
       //          }
       //      });

       //do reupdate after 3 seconds
        setTimeout(function(){recursiveCheck();}, 10000);
  
  }


//call to recursive check function
  //recursiveCheck();

}();