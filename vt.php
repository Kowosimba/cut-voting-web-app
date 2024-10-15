<?php

    session_start();
    $conn = mysqli_connect('127.0.0.1','root','','cut_voting');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $uid=$_GET['id'];
    $cid=$_GET['cid'];
    $pos=$_GET['pos'];
    $query = "INSERT INTO voting (regnum, cand_id, position) VALUES ('$uid', '$cid', '$pos')";
    if ($conn->query($query) === TRUE) {
           
        $cd=$cid ;
        $ssql="SELECT count(cand_id) as res FROM voting WHERE cand_id='$cd' ";
        $qresult = $conn->query($ssql);
        $rowq = mysqli_fetch_assoc($qresult); 
        //header("Location: xf.php?username=".$row['username']);
        $ucount = $rowq["res"];

        $qweuery = "INSERT INTO results(cand_id, votes) VALUES ('$cd', '$ucount') ON DUPLICATE KEY UPDATE cand_id='$cd', votes='$ucount' ";
        $conn->query($qweuery);
      
       
        //header("Location: xf.php?voting=Successfully Voted");
        echo '<script>
        alert("You have successfully cast your vote");
        setTimeout(function() {
        window.location.href = "xf.php?voting=Successfully Voted";
        }, 1000); // 1 second delay
        </script>';
        
    }
    else{
        echo ' <script> alert ("Failed to cast vote")</script>';
    }
    }
?>