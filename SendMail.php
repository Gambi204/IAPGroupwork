<?php
class SendMail {
    public function SendeMail($details = array(), $conf) {
        if (!empty($details["sendToEmail"]) && !empty($details["sendToName"]) && !empty($details["emailSubjectLine"])) {
            // Validate the email address
            if (filter_var($details["sendToEmail"], FILTER_VALIDATE_EMAIL)) {
                $headers = array         (
                    'Authorization: Bearer SG.sVr2vDzrSr6SwGLMLyS-SQ.YL4wSzwUMG4aXjbtCPrwK1nTGwy0yf5_Htyu_s4wNfY',
                    'Content-Type: application/json',
                );

                // Customize the email message
                $emailMessage = "Hello " . htmlspecialchars($details["sendToName"]) . ",\n\n";
                $emailMessage .= "You have requested an account on " . $conf["site_name"] . ".\n";
                $emailMessage .= "In order to use this account you need to click here to complete the registration process.\n";
                $emailMessage .= "Regards,\nSystems Admin.\n" . $conf["site_name"];

                $data = array(
                    "personalizations" => array(
                        array(
                            "to" => array(
                                array(
                                    "email" => $details["sendToEmail"],
                                    "name" => $details["sendToName"],
                                ),
                            ),
                        ),
                    ),
                    "from" => array(
                        "email" => $conf["au_email_address"],
                        "name" => $conf["site_name"],
                    ),
                    "subject" => $details["emailSubjectLine"],
                    "content" => array(
                        array(
                            "type" => "text/html",
                            "value" => nl2br($emailMessage),
                        ),
                    ),
                );

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);
            } else {
                die("Error: Invalid email address.");
            }
        } else {
            print_r($details);
            die("Error: Some details are missing.");
        }
    }
}
