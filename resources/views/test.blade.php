
<?php if (Auth::check()) { ?>
    <?php if (Auth::user()->isAdmin()) { ?>
        <head>
            <meta http-equiv="refresh" content="0; URL=/admin/dashboard" />
        </head>

    <?php } ?>
    <?php if (Auth::user()->isUser()) { ?>
        <head>
            <meta http-equiv="refresh" content="0; URL=/user/dashboard" />
        </head>

    <?php } ?>
    <?php if (Auth::user()->isGuest()) { ?>
        <head>
            <meta http-equiv="refresh" content="0; URL=/guest/" />
        </head>

    <?php } ?>
<?php } else { ?>
    <head>
        <meta http-equiv="refresh" content="0; URL=/login" />
    </head>
<?php } ?>