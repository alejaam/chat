<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Real time chat</title>
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        session_start();
        $_SESSION['username'] ="ale_jaam";
    ?>
    <div id="wrapper">
            <h1>Welcome to my chat</h1>
        <div class="chat_wraper">
            <div id="chat">

            </div>
            <form action="" method="post" id="messageFrm">
                <textarea name="" id="" cols="30" rows="10" class="textarea"></textarea>
            </form>
        </div>
    </div>
    <script>
        $(".textarea").keyup((e) => {
            if(e.which == 13){
                $("form").submit();
        }});

        $("form").submit(function(){

            var message = $(".textarea").val();
            $.post("handlers/messages.php?action=sendMessages&message=" +message, (response) => {
                if(response == 1){
                    document.getElementById("messageFrm").reset();
                }
            });
            return false;
        });
    </script>
</body>
</html>