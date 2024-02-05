
<?php
	$host='localhost';
	$user='root';
	$pass='';
	$name='room';

	$conn= mysqli_connect($host,$user,$pass,$name);
    
    if (isset($_POST['availability'])) {
        $from=$_POST['email'];
        $room= $_POST['rooms'];
        $roomtype= $_POST['roomtype'];
        $chekindate= $_POST['chekin-date'];
        $chekoutdate= $_POST['chekout-date'];
        $query= "INSERT INTO `availability`( `roomtype`, `chekin-date`, `chekout-date`, `rooms`)  VALUES ('$roomtype','$chekindate','$chekoutdate', '$room')";
        // the message
        $msg = $name. " has booked a room. Check the database to know the details.";
        $msg1="Dear". $name. ",
        Thank you for choosing our hotel. Prepare to spend the best of your days. Your booking has been confirmed. Check your Booking details on the website.";

// use wordwrap() if lines are longer than 70 characters
         $msg = wordwrap($msg,70);
         $msg1 = wordwrap($msg,70);

// send email
        mail("darshitha.murali@gmail.com","Booking Details || Taj Hotel",$msg);
        mail($from,"Room Booking || Taj Hotel",$msg1);
        $run = mysqli_query($conn, $query);
        $query1= "SELECT `roomprice` FROM `roomprice` WHERE roomtype = '$roomtype'";
        $run1=mysqli_query($conn, $query1); 
        while($row = mysqli_fetch_array($run1)){
            $roomprice= $row['roomprice'];}
            
        if ($run){
            echo "<script> window.location.assign('roomlogin.php'); </script>";
           }
         else{
             echo "rooms are not available for the required date!";
         }
         if($run1){
            $_SESSION['roomprice']=$roomprice;
            $_SESSION['chekindate']=$chekindate;
            $_SESSION['chekoutdate']=$chekoutdate;
            $_SESSION['roomtype']=$roomtype;
             }
            else{
                 echo "hi";
            }
            function dateDiffInDays($date1, $date2) {
                // Calculating the difference in timestamps
                $diff = strtotime($date2) - strtotime($date1);
                  
                // 1 day = 24 hours
                // 24 * 60 * 60 = 86400 seconds
                return abs(round($diff / 86400));
            }
            
            // Start date
            $date1 = $_POST['chekin-date'];
              
            // End date
            $date2 = $_POST['chekout-date'];
              
            // Function call to find date difference
            $dateDiff = dateDiffInDays($date1, $date2);
            
            // Display the result
            
            
            $days = 0;
            if($dateDiff <= 0){
                $totalprice = $roomprice *1 *$room;
                $days = 1;
              }else{
                $totalprice = $roomprice * $dateDiff *$room;
                $days = $dateDiff;
              }            
        }?>