<?php
    session_start();
?>
<?php
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $from = $_POST['email'];
    $comp = $_POST['company'];
    $tel = $_POST['telephone'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <title></title>
</head>
<body>
    
<div id="form">
    <form id="nl2go_form" name="nl2go_form" action="" method="post" style="display:none">
        <input type="text" name="first_name" value="<?php echo $_GET['fname']; ?>" autofocus> 
        <br>
        <input type="text" name="last_name" value="<?php echo $_GET['lname']; ?>">
        <br>
        <input type="text" name="email" value="<?php echo $_GET['from'];?>">
        <br>
        <input type="submit" name='submit' value="submit" id="trigger">
    </form>
</div>
<script id="n2g_script">

    !function(e,t,n,c,r,a,i){e.Newsletter2GoTrackingObject=r,e[r]=e[r]||function(){(e[r].q=e[r].q||[]).push(arguments)},e[r].l=1*new Date,a=t.createElement(n),
    i=t.getElementsByTagName(n)[0],a.async=1,a.src=c,i.parentNode.insertBefore(a,i)}
    (window,document,"script","https://static.newsletter2go.com/utils.js","n2g");
        n2g('create', 'nug7a48j-cc3n5ro7-rkc');
        $(function (){
            $(document).ready(function(){
            $("#nl2go_form").submit();
            });
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
                        $('#form').html("<h2>Vielen Dank für die Anmeldung. Wir haben Ihnen eine E-Mail mit einem Bestätigungslink und der Downloadanleitung zugeschickt.</h2>");
                    } else if (data.status == 200){
                        if(data.value[0].result.error.recipients.invalid.length){
                            $('#form').html("<h2>Ihre E-Mail Adresse ist nicht valide.</h2>");
                        }
                        //Bereits angemeldet
                        $('#form').html("<h2>Sie sind bereits angemeldet.</h2>");
                    }else {
                        $('#form').html("<h2>Leider ist ein Fehler aufgetreten. Bitte überprüfen Sie Ihre Daten.</h2>");
                    }
                },
                function(data) {
                    $('#form').html("<h2>Leider ist ein Fehler aufgetreten. Bitte überprüfen Sie Ihre Daten.</h2>");
                }
            );
                });
            });
</script>
</body>
</html>
