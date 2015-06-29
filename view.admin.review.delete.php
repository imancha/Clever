<?php

include_once('controller.review.php');

$action = new ReviewController();

if($action->delete(please('decrypt',$_GET[')']),please('decrypt',$_GET['('])))
{
    $_SESSION['message'] = '
        <div class="alert alert-success">
            <button class="close" type="button" data-dismiss="alert">x</button>
            <strong>Well done! </strong>
            You successfully deleted the review from the Book Review.
        </div>
    ';
}
else
{
    $_SESSION['message'] = '
        <div class="alert alert-error">
            <button class="close" type="button" data-dismiss="alert">x</button>
            <strong>Oh snap! </strong>
            Delete failed.
        </div>
    ';
}

header('Location: '.$_SERVER['HTTP_REFERER']);
exit();
