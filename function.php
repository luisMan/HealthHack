<?php
 require_once __DIR__ .'/private.php';

class final_proj
{
	    public $connection;
         
	    function __construct()
	   {
	    	 $this->initDB();
	   }
	   function __destruct()
        {
           //destructor the cleaning memory heap alloc
        	 $this->_close();
        }
       function _close() {
              mysqli_close($this->initDB());
          }
        public static function getConnection()
        {
          $connect = mysqli_connect(SERVER, USER, PASSWORD,DATABASE) or die("Problems");
          return $connect;
        }
         /*function to connect to mysql */
         function initDB()
         {
         	  $query = $this->getConnection();
           return $query;
         }

        function preventInjections($var)
             {
                  $var = strip_tags($var);
                  $var = htmlentities($var);
                  $var = stripslashes($var);
                  return mysqli_real_escape_string($this->getConnection(),$var);
                 
             }
        function execSQL($query)
        {
           if(final_proj::getConnection())
              {

                return mysqli_query(final_proj::getConnection(),$query);
              }
    
        }
      
        function getPatient_reading_data()
        {
           $query = $this->execSQL("SELECT * FROM `patient_reading` order by date desc");

            echo '<div id="reading_log">';
                       
                while($col =  mysqli_fetch_row($query))
                {
                  if($col[6]==0){
                    echo '<ul class="ul">
                           <li style="display:none;">'.$col[0].'</li>
                           <li id="heart'.$col[0].'">'.$col[1].'</li>
                           <li id="temperature'.$col[0].'"> '.$col[2].'</li>
                           <li id="gender'.$col[0].'">'.$col[3].'</li>
                           <li id="height'.$col[0].'">  '.$col[4].'</li>
                           <li id="weight'.$col[0].'"> '.$col[5].'</li>
                           <li id="date'.$col[0].'"> '.$col[7].'</li></ul>';
                          echo '<input class="finish_input" type="button" value="Request">';
                          echo '<div id="form_extra_input'.$col[0].'">
  <form action="/">
    First Name :<br />
    <input type="text" id="fname" required="true" name="fname'.$col[0].'">
    <br />
    Last Name :<br />
    <input type="text" id="lname" required="true" name="lname'.$col[0].'">
    <br />
    Age :<br />
     <input type="text" id="oxygen" required="true" name="age'.$col[0].'">
    <br />
    <input class="submit" id="'.$col[0].'" type="submit" value="Submit">
  </form> 
</div>';
                        }
                  }

            echo '<script src="js/script.js" type="text/javascript" charset="utf-8"></script>';
            echo'</div>';


        }


        function insert_into_sensor_reading($heart_rate,$body_temp,$oxygen_level,$not_seen,$time,$gender,$height,$weight)
        { 
            
            $this->execSQL("INSERT INTO patient_reading VALUES(NULL,$heart_rate,$body_temp,'$gender',$height,$weight,$not_seen,'$time')");
         
        }

        function get_from_sensor_and_send_it_to_db($id,$name,$last,$age,$heart_rate,$body_temp,$oxygen_level,$not_seen,$time,$gender,$height,$weight){
   
                 //lets update the potient reading since we will send data to queue and register it if dosnt exist on database
            $this->execSQL("UPDATE patient_reading SET NOT_SEEN=1 WHERE user_id=$id");
          
            $query =  $this->execSQL("SELECT * FROM patient WHERE Fname='$name' AND Lname='$last' AND age=$age");
           
             if(mysqli_num_rows($query) != 0){
               //since the member does not exist on our system lest populate membership table
              $this->execSQL("INSERT INTO patient VALUES('$name','$last',NULL,3232332323,$weight,'$height',$age)");
            
             }

        }

        function get_heart_decease_potential_dicease_by_reading($fname,$lname)
        {

        }
      
	
}


  $object = new final_proj();

?>