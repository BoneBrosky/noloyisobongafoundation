<?php
// Form
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");


// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include library files 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Newsletter

function newsletter()
{

    $firstname_lastname = $_POST['firstname-lastname'];
    $phone_number = $_POST['phone-number'];
    $email = $_POST['email'];
    $company_name = $_POST['company-name'];
    $website = $_POST['website'];
    $brand = $_POST['brand'];
    $message = $_POST['message'];
    $documents = $_FILES['documents'];

    // Create an instance; Pass `true` to enable exceptions 
    $mail = new PHPMailer(true);

    // Server settings 
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;    //Enable verbose debug output 
    $mail->isSMTP();                            // Set mailer to use SMTP 
    $mail->Host = 'mail.selectfew.co.za';           // Specify main and backup SMTP servers 
    $mail->SMTPAuth = true;                     // Enable SMTP authentication 
    $mail->Username = 'info@selectfew.co.za';       // SMTP username 
    $mail->Password = 'Thug.style123';         // SMTP password 
    $mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted 
    $mail->Port = 465;                          // TCP port to connect to 

    // Sender info 
    $mail->setFrom($email, $firstname_lastname);
    $mail->addReplyTo($email, $firstname_lastname);

    // Add a recipient 
    $mail->addAddress('rqf@selectfew.co.za');

    $mail->addCC('creativetweaks@gmail.com');
    //$mail->addBCC('bcc@example.com'); 

    // Mail subject 
    $mail->Subject = 'RFQ for: ' . $brand;

    // Mail body content 
    $bodyContent = '
    <table width="582" border="0" cellpadding="0" cellspacing="0" align="center">
        <tbody>' . '
            <tr>
                <td width="100%" valign="top" style="">
                    <table width="580" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#eeeeed">
                        <tbody>
                            <tr>
                                <td valign="top" style="padding:0">
                                    <a href="localhost:3000" target="_blank"><img src="http://localhost:10004/wp-content/uploads/2024/01/selectfew-email-template-1.jpg" alt="Inkroots Studio." title="Inkroots Studio." border="0" style="display:block"/></a>	
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <table width="582" border="0" cellpadding="0" cellspacing="0" align="center">
                <tbody>
                    <tr>
                    <td>
                    <p style="font-weight: bold;"></p>
                            <div style="font-size:15px"><b style="font-weight: bolder;color:#00796B;">Request for: </b>' . $brand . '</div>
                            <div>
                            <table width="582"  style="margin: 10px auto;">
                                <tbody>
                                    <tr>
                                        <td style="border: 1px solid #00796B; padding: 10px;">
                                            <strong style="color:#00796B;">First Name &amp; Last Name: </strong>' . $firstname_lastname . '
                                        </td>
                                        <td style="border: 1px solid #00796B; padding: 10px;">
                                            <strong style="color:#00796B;">Phone Number: </strong>' . $phone_number . '
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="border: 1px solid #00796B; padding: 10px;">
                                            <strong style="color:#00796B;">Email: </strong>' . $email . '
                                        </td>
                                        <td style="border: 1px solid #00796B; padding: 10px;">
                                            <strong style="color:#00796B;">Company Name: </strong>' . $company_name . '
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                                <p style="font-weight: bolder;">
                                    <b style="color:#00796B;">Website:</b> <span style="font-weight: normal;">' . $website . '</span>
                                </p>
                                <p style="font-weight: bolder;">
                                    <span style="font-weight: normal;">' . nl2br($message) . '</span>
                                </p>
                                <hr/>
                                <p style="text-align: center;">
                                    Copyright ' . date('Y') . ' <a href="https://www.selectfew.co.za" target="_blank">Select Few (Pty) Ltd</a>. All rights reserved.
                                </p>
                            </div>
                    </td>
                    </tr>
                </tbody>
            </table>
            <tr>
                <td width="100%" valign="top" style="">
                    <table width="580" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#eeeeed">
                        <tbody>
                            <tr>
                                <td valign="top" style="padding:0">
                                    <a style="color:#00796B;" href="localhost:3000" target="_blank"><img src="http://localhost:10004/wp-content/uploads/2024/01/selectfew-email-template-footer.jpg" alt="Inkroots Studio." title="Inkroots Studio." border="0" style="display:block"/></a>	
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>';
    $mail->Body = $bodyContent;

    // Set email format to HTML 
    $mail->isHTML(true);

    // Add attachments
    $mail->addAttachment($documents['tmp_name'], $documents['name']); // Optional name

    // Send email 
    if (!$mail->send()) {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent.';
    }

    // echo 'msg: ' . json_encode($values);
}

newsletter();
