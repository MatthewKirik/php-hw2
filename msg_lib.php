<?php

function display_error($error)
{
    echo ('<div class="msg-error">' . $error . '</div>');
}

function display_success($message)
{
    echo ('<div class="msg-success">' . $message . '</div>');
}

?>
