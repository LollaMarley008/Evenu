<?php
    require __DIR__ ."/../../config/mail.php";
    require "../../authentication/php/dbconn.php";
    require_once __DIR__ . "/../../includes/functions.php";
    require_once __DIR__ . "/../../includes/email_templates/rejected_event_template.php";

    session_start();
    $event_id = null;

    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["event_id"]){
        $event_id = $_POST["event_id"];
        $status = "declined";

        // if($event_id){

        // }

      try{
        $stmt = $conn->prepare("UPDATE events SET status = :status WHERE id = :id");

        $stmt->bindParam(":status", $status, PDO::PARAM_STR);
        $stmt->bindParam(":id", $event_id, PDO::PARAM_STR);

        if($stmt->execute()){
            $_SESSION["success"] = "Event deleted successfully";

             // Select event and send rejected message
             $stmt = $conn->prepare("SELECT email FROM events WHERE id = :id");
             $stmt->bindParam(":id", $event_id, PDO::PARAM_INT);
             $stmt->execute();
             $event = $stmt->fetch(PDO::FETCH_ASSOC);
 

            if ($event) {
              $email = $event['email']; // Event creator's email

              // Generate email content
              $title = "Event Rejected";
              $greeting = "Greetings!";
              $body = reject_event_template();
              $message = mailTemplate($title, $greeting, $body);
              $subject = "Your Event Has Been Rejected";

              // Send email notification
              sendMail($email, $subject, $message);
           }

            header("location: allEvent.php");
        }else{
            $_SESSION["failure"] = "Error deleting event. Try again later";
            header("location: allEvent.php");
        }
      }catch(PDOException $e){
        echo "Error occured" .$e->getMessage();
      }

    }

?>