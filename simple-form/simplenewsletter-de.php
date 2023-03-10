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
        .divnext {
            display: inline-block;
            padding: 17px;
        }
    </style>
</head>
<body>
<div id="form">
    <form id="nl2go_form" action=""  method="post">
        <div>
            <div class="divnext">
                <input type="text" class="form__input" id="one" name="first_name" placeholder="Vorname*" required=""/>
            </div>
            <div class="divnext">
                <input type="text" class="form__input" id="two" name="last_name" placeholder="Nachname*" required=""/>
            </div>
        </div>
        <div>
            <div class="divnext">
                <input type="email" class="form__input" id="three" name="email" placeholder="E-Mail*" required=""/>
            </div>
        </div>
        <div class="divnext">
            <input class="button-17" type="submit" name='submit' value="ABSCHICKEN">
        </div>
    </form>
</div>
    <script id="n2g_script">
        !function(e,t,n,c,r,a,i){e.Newsletter2GoTrackingObject=r,e[r]=e[r]||function(){(e[r].q=e[r].q||[]).push(arguments)},e[r].l=1*new Date,a=t.createElement(n),
            i=t.getElementsByTagName(n)[0],a.async=1,a.src=c,i.parentNode.insertBefore(a,i)}
            (window,document,"script","https://static.newsletter2go.com/utils.js","n2g");
            n2g('create', 'nug7a48j-cc3n5ro7-rkc');
        $(function (){
            $('#nl2go_form').on('submit', function(e){
                e.preventDefault();
                var recipient = {
                    email : $('input[name=email]').val(),
                    first_name : $('input[name=first_name]').val(),
                    last_name : $('input[name=last_name]').val()
                };
                var recipient = $(this).serializeArray().map(function(x){
                    this[x.name] = x.value;
                    return this;
                }.bind({}))[0];
        
            //Daten an newsletter2go senden
            n2g(
                'subscribe:send', {
                recipient : recipient
                },
                function(data){
                    if (data.status == 201){
                        $('#form').html("<h2>Anmeldung erfolgreich!</h2>");
                    } else if (data.status == 200){
                        if(data.value[0].result.error.recipients.invalid.length){
                            $('#form').html("<h2>Ihre E-Mail Adresse ist nicht valide.</h2>");
                        }
                        //Bereits angemeldet
                        $('#form').html("<h2>Du bist bereits angemdeldet!</h2>");
                    }else {
                        $('#form').html("<h2>Es ist ein Fehler aufgetreten!</h2>");
                    }
                },
                function(data) {
                    $('#form').html("<h2>Es ist ein Fehler aufgetreten!</h2>");
                }
            );
                });
            });
        </script>
</body>
</html>

