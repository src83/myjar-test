<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/myjar/css/lib/bootstrap/3.3.5/bootstrap.min.css">
    <link rel="stylesheet" href="/myjar/css/lib/bootstrap/3.3.5/bootstrap-theme.min.css">

    <title>Error</title>
</head>

<body>

<div class="container col-md-10 col-md-offset-1" style="margin-top: 50px;">
    <div class="starter-template">
        <h1>Error has occurred</h1>
        <p class="lead"><? if(!empty($error_msg)) echo $error_msg; ?></p>
    </div>
</div>

</body>
</html>
