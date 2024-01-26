<?php
// Form
session_start();

// Newsletter


function newsletter()
{
    $data = file_get_contents('php://input');
    $user = json_decode($data, true);

    if (sizeof($user) == 3) {

        if (isset($_POST)) {

            // form fields
            $name = $user['name_surname'];
            $email = $user['email'];

            if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                // MailChimp API credentials
                $list_id = 'a865099696';
                $authToken = 'b5ccacc70221f312cacddeb3f5452a74-us9';

                // MailChimp API URL
                $memberID = md5(strtolower($email));
                $dataCenter = substr($authToken, strpos($authToken, '-') + 1);
                $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . $memberID;

                // member information
                $json = json_encode([
                    "email_address" => $email,
                    "status" => "subscribed",
                    "merge_fields" => [
                        "FN_LN" => $name,
                    ]
                ]);

                // send a HTTP POST request with curl
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $authToken);
                curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
                $result = curl_exec($ch);
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);

                $dataStat = json_decode($result, true);
                $dataResult = json_decode($result, true);

                // store the status message based on response code
                if ($httpCode == 200) {
                    echo '<h1 class="text-2xl">Successful.</h1>';
                } else if ($httpCode == 400) {
                    echo '<h1 class="text-lg text-red-700">' . $dataResult['detail'] . '</h1>';
                }
            }
        }
    } else if (!is_null($user['subject'])) {

        if (sizeof($user) !== 3) {

            // form fields
            $name = $user['name_surname'];
            $email = $user['email'];
            $subject = $user['subject'];
            $message = $user['message'];

            if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                // MailChimp API credentials
                $list_id = 'a865099696';
                $authToken = '7452acb6bb5ca019c285c4f1c7a1af9f-us9';

                // MailChimp API URL
                $memberID = md5(strtolower($email));
                $dataCenter = substr($authToken, strpos($authToken, '-') + 1);
                $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . $memberID;

                // member information
                $json = json_encode([
                    "email_address" => $email,
                    "status" => "subscribed",
                    "merge_fields" => [
                        "FN_LN" => $name,
                        "SUBJECT" => $subject,
                        "MESSAGE" => $message,
                    ]
                ]);

                // send a HTTP POST request with curl
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $authToken);
                curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
                $result = curl_exec($ch);
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);

                $dataStat = json_decode($result, true);
                $dataResult = json_decode($result, true);

                // store the status message based on response code
                if ($httpCode == 200) {
                    echo '<h1 class="text-2xl">Successful.</h1>';
                } else if ($httpCode == 400) {
                    echo '<h1 class="text-lg text-red-700">' . $dataResult['detail'] . '</h1>';
                }
            }
        }
    }
    // echo 'msg: ' . sizeof($user);
}

newsletter();
