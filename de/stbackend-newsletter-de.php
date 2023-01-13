<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php
    session_start();
?>

<input type="hidden" name="first_name" value="<?php echo $fname;?>">
<input type="hidden" name="last_name" value="<?php echo $lname;?>">
<input type="hidden" name="email" value="<?php echo $from;?>">

<?php
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $from = $_GET['from'];
    $comp = $_GET['comp'];
    $tel = $_GET['tel'];

    $subject = "Ein Kunde hat sich für die Professionelle Version entschieden";
    $message = "
    <html>
        <head>
            <title>JDisc Newsletter Submission</title>
        </head>
        <style>
        .table{
            border: 1px solid;
            text-align: left;
        }
        th, td {
            border-bottom: 1px solid #ddd;
            border: 1px solid;
            text-align: left;
            padding: 15px;
        }
        th {
            background-color: #00155c;
            color: white;
        }
        </style>
        <body>
            <table>
                <tr>
                    <th>Vorname </th>
                    <th>Nachname </th>
                    <th>E-Mail </th>
                    <th>Unternehmen </th>
                    <th>Telefonnummer </th>
                </tr>
                <tr>
                    <td>$fname</td>
                    <td>$lname</td>
                    <td>$from</td>
                    <td>$comp</td>
                    <td>$tel</td>
                </tr>
            </table>
        <br>
        <p> Best regards, </p>
        <p>JDisc GmbH  </p>
        <p>+49-7034-9992-1041   </p>
        <p>Kuppinger Weg 25, 71116 Gärtringen </p>
        <p>https://www.jdisc.com </p>
        <p>info@jdisc.com </p>
        <p>&nbsp;</p>			
        </body>
    </html>
    ";
    /////////////// MAIL TO EMPLOYEE///////////////////////////////////
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // More headers
    $headers .= 'From: <webmaster@example.com>' . "\r\n";
    $headers .= 'Cc: info@jdisc.eu' . "\r\n";
    //$to = $from;
    //mail($to,$subject,$message,$headers);
    if(mail($to,$subject,$message,$headers))
    {
        header("Location: https://jdisc.eu/newsletter/de/newsletter-de.php?fname=$fname&lname=$lname&from=$from", true, 301);
        $msg = "Your quotation has been sent successful!. Please check your email for the quotation summary. We will contact you as soon as possible!";
    }
    else
    {
        $msg = "Error, could not be Sent!";
    }
    //////////////////////////////////////////////////////////////////
?>
