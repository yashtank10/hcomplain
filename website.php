<?PHP
   echo "hello";

   if(isset($_POST['f_name']))
   {
   
       echo "<br>";
       echo "hi";
   
       $server="localhost";
       $username="root";
       $password="";
       $db="my_website";
   
       $connect=mysqli_connect($server,$username,$password,$db);
   
   
       if(!$connect)
       {
           die(mysqli_connect_error());
       }
   
       echo "<br>";
       echo "connected";
       echo "<br>";
   
       $f_name = $_POST['f_name'];
       $l_name = $_POST['l_name'];
       $hostel_name= $_POST['hst_name'];
       $Room_no =$_POST['roomno'];
       $Enrollment_no=$_POST['enroll_no'];
       $mobile = $_POST['mobile'];
       $email = $_POST['email'];
       $DOB =$_POST['date'];
       $address = $_POST['address'];
       $Gender = $_POST['gender'];
   
      $sql = "INSERT INTO web_registration Values('$f_name','$l_name','$hostel_name',$Room_no,$Enrollment_no,$mobile,'$email','$DOB','$address','$Gender')";
   
      $query=mysqli_query($connect,$sql);
   
      if($query)
       {
           echo "Data inserted";
       }
   
   }
?>   