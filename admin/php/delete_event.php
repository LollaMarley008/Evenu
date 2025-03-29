<?php
    require "../../authentication/php/dbconn.php";
    session_start();
    $event_id = null;

    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["event_id"]){
        $event_id = $_POST["event_id"];
        $status = "declined";

        if($event_id){

        }

      try{
        $stmt = $conn->prepare("UPDATE events status SET status = :status WHERE id = :id");

        $stmt->bindparam(":status", $status, PDO::PARAM_STR);
        $stmt->bindparam(":id", $event_id, PDO::PARAM_INT);

        if($stmt->execute()){
            $_SESSION["success"] = "Event deleted successfully";
            header("location: allEvent.php");
        }else{
            $_SESSION["failure"] = "Error deleting event. Try again later";
            header("location: allEvent.php");
        }
      }catch(PDOExecption $e){
        echo "Error occured" .$e->getMessage();
      }

    }

?>