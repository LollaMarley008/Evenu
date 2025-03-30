<?php
    require __DIR__ ."/../../config/mail.php";
    require "../../authentication/php/dbconn.php";
    require_once __DIR__ . "/../../includes/functions.php";
    require_once __DIR__ . "/../../includes/accepted_event_template.php";

    session_start();
    $event_id = null;

    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["event_id"]){
        $event_id = $_POST["event_id"];
        $status = "accepted";

        if($event_id){

        }

      try{
        $stmt = $conn->prepare("UPDATE events status SET status = :status WHERE id = :id");

        $stmt->bindparam(":status", $status, PDO::PARAM_STR);
        $stmt->bindparam(":id", $event_id, PDO::PARAM_INT);

        if($stmt->execute()){
            $_SESSION["success"] = "Event accepted successfully";

            // Select event and send  accepted message
            $stmt = $conn->prepare("SELECT email FROM events WHERE id = :id");
            $stmt->bindParam(":id", $event_id, PDO::PARAM_INT);
            $stmt->execute();
            $event = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($event) {
                $email = $event['email']; // Event creator's email

                // Generate email content
                $title = "Event Accepted";
                $greeting = "Greetings!";
                $body = accepted_event_template();
                $message = mailTemplate($title, $greeting, $body);
                $subject = "Your Event Has Been Accepted";

                // Send email notification
                sendMail($email, $subject, $message);
            }

            header("location: allEvent.php");
        }else{
            $_SESSION["failure"] = "Error accepting event. Try again later";
            header("location: allEvent.php");
        }
      }catch(PDOExecption $e){
        echo "Error occured" .$e->getMessage();
      }

    }

?>