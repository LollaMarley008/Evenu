<?php



    
    use MeSomb\Operation\PaymentOperation;
    use MeSomb\Exception\InvalidClientRequestException;

    require __DIR__ ."/../../config/mail.php";
    require "../../authentication/php/dbconn.php";
    require_once __DIR__ . "/../../includes/functions.php";
    require_once __DIR__ . "/../../includes/email_templates/accepted_event_template.php";
    require_once __DIR__ .'/../../package/mesomb-php/init.php';


    session_start();
    $event_id = null;

    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["event_id"]){
        $event_id = $_POST["event_id"];
        $status = "accepted";

        // if($event_id){

        // }

      try{

        $stmt = $conn->prepare("UPDATE events SET status = :status WHERE id = :id");
        $stmt->bindParam(":status", $status, PDO::PARAM_STR);
        $stmt->bindParam(":id", $event_id, PDO::PARAM_STR);


        if($stmt->execute()){
            $_SESSION["success"] = "Event accepted successfully";

            // Select event and send  accepted message
            $stmt = $conn->prepare("SELECT * FROM events WHERE id = :id");
            $stmt->bindParam(":id", $event_id, PDO::PARAM_STR);
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

                //---------------------------------------------------

                // Handle Payment
                // Select event_prices and handle payment
                $stmt = $conn->prepare("SELECT price FROM event_prices WHERE name = :name");
                $stmt->bindParam(":name", $event['event'], PDO::PARAM_STR);
                $stmt->execute();
                $systemEvent = $stmt->fetch(PDO::FETCH_ASSOC);

                // print_r($event);
                // exit;

                
                try {
                    $applicationKey = '';
                    $accessKey = '';
                    $secretKey = '';
                    $client = new PaymentOperation($applicationKey, $accessKey, $secretKey);

                    $response = $client->makeCollect($systemEvent['price'], $event['service'], $event['phone_number'], new DateTime(), uniqid());

                    // $response = $client->makeCollect([
                    //     'amount' => $systemEvent['price'],
                    //     'service' => $event['service'],
                    //     'payer' => $event['phone_number'],
                    //     'nonce' => RandomGenerator::nonce(),
                    //     'trxID' => $event['id']
                    // ]);
                    // $response->isOperationSuccess();

                    // echo $response->isTransactionSuccess();
                    // exit;

                    if($response->isTransactionSuccess()) {

                      $payment = 1; 
                      $amount = (float) $systemEvent['price'];
                      
                      $stmt = $conn->prepare("UPDATE events SET payment = :payment, amount = :amount WHERE id = :id");
                      
                      $stmt->bindParam(":payment", $payment, PDO::PARAM_INT); // Use INT for boolean
                      $stmt->bindParam(":amount", $amount, PDO::PARAM_STR);  // Use STR for float values
                      $stmt->bindParam(":id", $event_id, PDO::PARAM_STR);   // UUIDs are typically strings
                      $stmt->execute();

                      header("location: allEvent.php");
                    }

                }

                catch(InvalidClientRequestException $e) {
                  $payment = 0;
                  $amount = (float) $systemEvent['price']; // Ensure amount is a float

                  // Update payment state
                  $stmt = $conn->prepare("UPDATE events SET payment = :payment, amount = :amount WHERE id = :id");
                  $stmt->bindParam(":payment", $payment, PDO::PARAM_INT);
                  $stmt->bindParam(":amount", $amount, PDO::PARAM_STR);
                  $stmt->bindParam(":id", $event_id, PDO::PARAM_STR);
                  $stmt->execute();

                  header("location: allEvent.php?payment=accepted&paymentfailed");
                }
                catch(Exception $e) {

                  $payment = 0;
                  $amount = (float) $systemEvent['price']; // Ensure amount is a float
                  // Update payment state
                   $stmt = $conn->prepare("UPDATE events SET payment = :payment, amount = :amount WHERE id = :id");
                      $stmt->bindParam(":payment", $payment, PDO::PARAM_INT);
                      $stmt->bindParam(":amount", $amount, PDO::PARAM_STR);
                      $stmt->bindParam(":id", $event_id, PDO::PARAM_STR);

                      $stmt->execute();
                  header("location: allEvent.php?payment=accepted&paymentfailed");
                }              
            }
         
        }else{
            $_SESSION["failure"] = "Error accepting event. Try again later";
            header("location: allEvent.php");
        }
      }catch(PDOException $e){
        echo "Error occured" .$e->getMessage();
      }

    }

?>