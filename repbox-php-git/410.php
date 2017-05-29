<?php

    $page['title'] = '410';

    include $template['header.php'];
    include $template['alert'];
?>

<script>
    ga('send', 'event', '410: Download Link Expired', window.location.host)
</script>

<div class="row">
    <div class="column alert">
        <i class="warning fa fa-clock-o"></i>
    </div>
    <div class="column alert">
        <h3>Whoops! That link has expired.</h3>

    </div>
    <div class="row">
        <a class="button suggested-action" href="/">Go to Home Page</a>
    </div>
</div>

<?php
    include $template['footer'];
?>
