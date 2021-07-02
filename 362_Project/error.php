<?php
    require 'connection.php';
    
    if (session_status() == PHP_SESSION_NONE  || session_id() == '') // Check if a session is started before if not start session //
    {
        session_start();
    }
?>
        <div>
        <?php require 'header.php';  ?>
        <div class="panel-footer">An Error occured please go back to main page <a href="index.php">Click</a></div>
        <?php require 'footer.php'; ?>
        </div>
    </body>
</html>
