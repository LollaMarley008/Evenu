<?php
function reject_event_template($link = null) {
    $message = "
        <p>We regret to inform you that your event registration has not been accepted.</p>
        <p>We appreciate your interest and encourage you to apply for future events.</p>
    ";

    return $message;
}
