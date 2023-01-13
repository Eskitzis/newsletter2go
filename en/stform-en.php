<?php
    session_start();
?>
<?php
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $from = $_POST['email'];
    $comp = $_POST['company'];
    $tel = $_POST['telephone'];

    $cb1 = $_POST['checkbox1'];
    $cb2 = $_POST['checkbox2'];

    if(isset($_POST['submit']))
    {
    if($cb1 == 'checkbox1'){
        header("Location: https://jdisc.eu/newsletter/en/stbackend-newsletter-en.php?fname=$fname&lname=$lname&from=$from&tel=$tel&comp=$comp", true, 301);
    }else if ($cb2 == 'checkbox2'){
        header("Location: https://jdisc.eu/newsletter/en/stbackend-newsletter-en.php?fname=$fname&lname=$lname&from=$from&tel=$tel&comp=$comp", true, 301);
    }else if ($cb1 == 'checkbox1' && $cb2 == 'checkbox2'){
        header("Location: https://jdisc.eu/newsletter/en/stbackend-newsletter-en.php?fname=$fname&lname=$lname&from=$from&tel=$tel&comp=$comp", true, 301);
    }else{
        header("Location: https://jdisc.eu/newsletter/en/stbackend-download-en.php?fname=$fname&lname=$lname&from=$from&tel=$tel&comp=$comp", true, 301);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <title></title>
    <style>
        *,
        *::after,
        *::before {
        margin: 0;
        padding: 0;
        box-sizing: inherit;
        font-size: 62,5%;
        }

        body {
        height: 100vh;
            width: 100%;
        background: #0f2027; /* fallback for old browsers */
        background: linear-gradient(to right,#2c5364, #203a43, #0f2027);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: #fff;
        }

        .form__label {
        font-family: 'Roboto', sans-serif;
        font-size: 1.2rem;
        margin-left: 2rem;
        margin-top: 0.7rem;
        display: block;
        transition: all 0.3s;
        transform: translateY(0rem);
        }

        .form__input {
        font-family: 'Roboto', sans-serif;
        color: #333;
        font-size: 1.2rem;
            margin: 0 auto;
        padding: 1.5rem 2rem;
        border-radius: 0.2rem;
        background-color: rgb(255, 255, 255);
        border: none;
        width: 90%;
        display: block;
        border-bottom: 0.3rem solid transparent;
        transition: all 0.3s;
        }

        .form__input:placeholder-shown + .form__label {
        opacity: 0;
        visibility: hidden;
        -webkit-transform: translateY(-4rem);
        transform: translateY(-4rem);
        }
        /* The container */
        .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }

        /* Hide the browser's default checkbox */
        .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input ~ .checkmark {
        background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .container input:checked ~ .checkmark {
        background-color: #2196F3;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
        content: "";
        position: absolute;
        display: none;
        }

        /* Show the checkmark when checked */
        .container input:checked ~ .checkmark:after {
        display: block;
        }

        /* Style the checkmark/indicator */
        .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        }
        .button-17 {
        align-items: center;
        appearance: none;
        background-color: #fff;
        border-radius: 24px;
        border-style: none;
        box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px,rgba(0, 0, 0, .14) 0 6px 10px 0,rgba(0, 0, 0, .12) 0 1px 18px 0;
        box-sizing: border-box;
        color: #3c4043;
        cursor: pointer;
        display: inline-flex;
        fill: currentcolor;
        font-family: "Google Sans",Roboto,Arial,sans-serif;
        font-size: 14px;
        font-weight: 500;
        height: 48px;
        justify-content: center;
        letter-spacing: .25px;
        line-height: normal;
        max-width: 100%;
        overflow: visible;
        padding: 2px 24px;
        position: relative;
        text-align: center;
        text-transform: none;
        transition: box-shadow 280ms cubic-bezier(.4, 0, .2, 1),opacity 15ms linear 30ms,transform 270ms cubic-bezier(0, 0, .2, 1) 0ms;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        width: auto;
        will-change: transform,opacity;
        z-index: 0;
        }
        .button-17:hover {
        background: #F6F9FE;
        color: #174ea6;
        }
        .button-17:active {
        box-shadow: 0 4px 4px 0 rgb(60 64 67 / 30%), 0 8px 12px 6px rgb(60 64 67 / 15%);
        outline: none;
        }
        .button-17:focus {
        outline: none;
        border: 2px solid #4285f4;
        }
        .button-17:not(:disabled) {
        box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
        }
        .button-17:not(:disabled):hover {
        box-shadow: rgba(60, 64, 67, .3) 0 2px 3px 0, rgba(60, 64, 67, .15) 0 6px 10px 4px;
        }
        .button-17:not(:disabled):focus {
        box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
        }
        .button-17:not(:disabled):active {
        box-shadow: rgba(60, 64, 67, .3) 0 4px 4px 0, rgba(60, 64, 67, .15) 0 8px 12px 6px;
        }
        .button-17:disabled {
        box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
        }
    </style>
</head>
<body>
<div id="form">
    <form id="nl2go_form" action=""  method="post">
            <input type="text" class="form__input" id="one" name="first_name" placeholder="First Name" required=""/>
            <br>
            <br>
            <input type="text" class="form__input" id="two" name="last_name" placeholder="Last Name" required=""/>
            <br>
            <br>
            <input type="email" class="form__input" id="three" name="email" placeholder="E-Mail" required=""/>
            <br>
            <br>
            <input type="text" class="form__input" id="four" name="company" placeholder="Company"/>
            <br>
            <br>
            <input type="text" class="form__input" id="five" name="telephone" placeholder="Telephone"/>
            <br>
            <label class="container">Newsletter (quarterly newsletter)
                <input type="checkbox" id="checkbox1" value="checkbox1" name="checkbox1" >
                <span class="checkmark"></span>
            </label>
            <label class="container">Build Newsletter (with release notes for each build)
                <input type="checkbox" id="checkbox2" value="checkbox2" name="checkbox2">
                <span class="checkmark"></span>
            </label>
            <br>
                <input class="button-17" type="submit" name='submit' value="SUBMIT">
    </form>
</div>
</body>
</html>