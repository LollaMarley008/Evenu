<?php

require_once __DIR__ . "/../config/mail.php";

if (!function_exists("sendMail")) {
    function sendMail($to, $subject, $message)
    {
        if (function_exists('usePHPMailer')) {
            return usePHPMailer($to, $subject, $message);
        }
    }
}

if (!function_exists("mailTemplate")) {
    function mailTemplate($title, $greeting, $body)
    {

        $template =   <<<MESSAGE
               <!DOCTYPE html>
               <html lang="en">
               <head>
                   <meta charset="UTF-8">
                   <meta name="viewport" content="width=device-width, initial-scale=1.0">
                   <title>Message</title>
                   <style>
                       body {
                           font-family: Arial, sans-serif;
                           background-color: #f4f4f4;
                           margin: 0;
                           padding: 0;
                           color: #333;
                       }
                       .container {
                           width: 100%;
                           max-width: 600px;
                           margin: 100px auto 0 auto;
                           background-color: #ffffff;
                           padding: 20px;
                           border-radius: 8px;
                       }
                       .header {
                           background-color: #136cf1;
                           color: #ffffff;
                           padding: 10px;
                           text-align: center;
                           border-top-left-radius: 8px;
                           border-top-right-radius: 8px;
                       }
                       .body {
                           padding: 20px;
                           line-height: 1.6;
                       }
                       .footer {
                           background-color: #f4f4f4;
                           text-align: center;
                           padding: 10px;
                           border-bottom-left-radius: 8px;
                           border-bottom-right-radius: 8px;
                       }
                       .button {
                           display: inline-block;
                           margin: 0 auto;
                           padding: 10px 20px;
                           color: #ffffff;
                           background-color: #136cf1;
                           text-decoration: none;
                           border-radius: 5px;
                       }

                       .button:hover{
                           background-color: #136cf1;
                        }
                   </style>
               </head>
               <body>
                   <div class="container">
                       <div class="header">
                           <h1>$title</h1>
                       </div>
                       <div class="body">
                           <p>$greeting</p>
                           <p>$body</p>
                       </div>
                       <div class="footer">
                           <p>&copy; 2025 Evenu. All rights reserved.</p>
                       </div>
                   </div>
               </body>
               </html>
               MESSAGE;


        return $template;
    }
}
