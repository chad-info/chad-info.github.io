<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body id="compose_body">
        <form id="message_form" action="server.php" method="post">
            Subject: <br><input type="text" name="subject"/><br>
            Recipients: <br><input type="text" name="recipients"/><br>
            Body: <br><textarea name="body" rows="5" cols="50"></textarea><br>
            <input type="hidden" name="poster" value="send_message"/>
            <input type="submit" value="Send Message!"/>
        </form>
    </body>
</html>