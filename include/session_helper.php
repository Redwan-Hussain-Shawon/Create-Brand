<?php
// & show Session Message
function session_message()
{
    if (isset($_SESSION['error_message']) && !empty($_SESSION['error_message'])) { ?>
        <div class="alert alert-danger">
            <?php
            echo $_SESSION['error_message'];
            unset($_SESSION['error_message']);
            ?>
        </div>

    <?php  } // end of is error checking

    if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION['success_message'];
            unset($_SESSION['success_message']);
            ?>
        </div>

<?php
    } // end of is success checking

} // end of Session Message Function
?>