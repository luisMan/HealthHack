  !function(){

   //make all inputs invisible
  

   var search_patient_button = $("#find_patient");
   var Heart_Disease_Mortality_Data_Among_US_Adults_Url = "https://chronicdata.cdc.gov/views/i2vk-mgdh/rows.json?accessType=DOWNLOAD";
   var Nutrition_Physical_Activity_and_Obesity_Url = "https://chronicdata.cdc.gov/views/hn4x-zwk7/rows.json?accessType=DOWNLOAD";

   function MakeId()
    {var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for( var i=0; i < 8; i++ )
    	{text += possible.charAt(Math.floor(Math.random() * possible.length)); }
    return text;
     }
    
  /* attach a submit handler to the form */
   search_patient_button.click(function(event) {

    /* stop form from submitting normally */
    event.preventDefault();

    //am going to send an array of data from user input as of heart rape BMI and many more
    var textInput = $('input[name="patient_name"]').val();


    if(textInput.length > 0 )
    {

          //lets get relevant information and close problem detection for patient user
          getHeart_Disease_Mortality_Data_Among_US_Adults_Url(textInput);
          getNutrition_Physical_Activity_and_Obesity_Url(textInput);

    }else{

     }
 });


   function getHeart_Disease_Mortality_Data_Among_US_Adults_Url(patient_data)
   {
   	  $.getJSON( Heart_Disease_Mortality_Data_Among_US_Adults_Url, function( data ) {
        
         console.log("heart desease mortality");
         console.log(data); 
         
      }); //close outer each function loop
   }//close export function




   function getNutrition_Physical_Activity_and_Obesity_Url(patient_data)
   {
     $.getJSON( Nutrition_Physical_Activity_and_Obesity_Url, function( data ) {
      
         console.log("nutrition physical activity and obesity");
         console.log(data);
         
      }); //close outer each function loop
   }


    

  $('.finish_input').each(function()
   {
   	$(this).click(function()
   	{
   		var reading_id = $(this).prev()[0].childNodes[1].innerHTML;
   		var heart_rate = $(this).prev()[0].childNodes[3].innerHTML;
   		var body_temperature = $(this).prev()[0].childNodes[5].innerHTML;
   		var oxygen_level = $(this).prev()[0].childNodes[7].innerHTML;
   		var not_seen = $(this).prev()[0].childNodes[9].innerHTML;
   		var date  = $(this).prev()[0].childNodes[11].innerHTML;

   		console.log(reading_id);
   		console.log(heart_rate);
   		console.log(body_temperature);
   		console.log(oxygen_level);
   		console.log(not_seen);
   		console.log(date);

     var div =$(this).next();
      //ajaxCategory($(this).html());
   	});
   });



  $('.submit').each(function()
   {
    $(this).stop().click(function(evt)
    {

      evt.preventDefault();

      var id = $(this)[0];
      var post_id = $(id).attr( "id" );
      var string_heart = "#heart"+post_id;
      var heart_rate  = $(string_heart);
     
      var string_temp = "#temperature"+post_id;
      var body_temp = $(string_temp);

      var string_gender = "#gender"+post_id;
      var body_gender = $(string_gender);

       var string_height = "#height"+post_id;
      var body_height = $(string_height);

       var string_weight = "#weight"+post_id;
      var body_weight = $(string_weight);

      var string_date = "#date"+post_id;
      var date = $(string_date);


       var fname = "fname"+post_id;
       var lname = "lname"+post_id;
       var age =  "age"+post_id;

 
      console.log($(heart_rate)[0].innerHTML);
      console.log($(body_temp)[0].innerHTML);
      console.log($(body_gender)[0].innerHTML);
      console.log($(body_height)[0].innerHTML);
      console.log($(body_weight)[0].innerHTML);
      console.log($(date)[0].innerHTML);
      var text =  { 
                        "id":post_id,
                        "name":$('input[name="'+fname+'"]').val(),
                        "last" :$('input[name="'+lname+'"]').val(),
                        "age" :$('input[name="'+age+'"]').val(),
                        "heart_rate":$(heart_rate)[0].innerHTML,
                         "body_temp":$(body_temp)[0].innerHTML,
                         "oxygen_level":"0",
                          "not_seen":"0",
                          "time":$(date)[0].innerHTML,
                          "gender":$(body_gender)[0].innerHTML,
                          "height":$(body_height)[0].innerHTML,
                          "weight":$(body_weight)[0].innerHTML};
    
   
  $.ajax({
   type: "POST",
   url: "saving.php",
   async: false,
   data: text,
  dataType: "text",
   success: function(data){
      console.log(data);
      return true;
   },
   complete: function() {},
   error: function(xhr, textStatus, errorThrown) {
     console.log('ajax loading error...'+textStatus+" error "+errorThrown);
     return false;
   }
});
     

    
   });

  });




  $("#POST_FAKE_SENSOR").stop().click(function()
  {

var text =  { "heart_rate":"140",
                         "body_temp":"37",
                         "oxygen_level":"95",
                          "not_seen":"0",
                          "time":$.now(),
                          "gender":"M",
                          "height":"200",
                          "weight":"140"};
    
   
  $.ajax({
   type: "POST",
   url: "saving.php",
   async: false,
   data: text,
  dataType: "text",
   success: function(data){
      console.log(data);
      return true;
   },
   complete: function() {},
   error: function(xhr, textStatus, errorThrown) {
     console.log('ajax loading error...'+textStatus+" error "+errorThrown);
     return false;
   }
});

  /*	 var parameters={
                'sensor_reading':"fake data",
                 'heart_rate':"140",
                 'body_temp':"37",
                 'oxygen_level':"95",
                 'not_seen':"0",
                 'time': $.now()
              };*/

              /* var text = '{ "sensor_reading" : [' +
                          '{ "heart_rate":"140" },' +
                          '{ "body_temp":"37" },' +
                          '{ "oxygen_level":"95"},'+
                          '{ "not_seen":"0"},'+
                          '{"time":'+$.now()+'},'+
                          '{"gender":'+'"M"},'+
                          '{"height":'+'"200"},'+
                          '{"weight":'+'"140"}]}';

                
                //console.log(obj);

              var ajaxPostData  =  $.post("saving.php",
              {text
               });
              ajaxPostData.done(function(data) {
               //this ajax post has done
              if(data==-1){
  
                }else{
                 console.log(data);         
              }
            });
              ajaxPostData.fail(function(dataError) {
              console.log(dataError)
            });
            //this function will always listen to the post request if done succefully this can update the div 
              ajaxPostData.always(function(data) {
            

           });*/
  

  });



//close of anonymous function
    


}();