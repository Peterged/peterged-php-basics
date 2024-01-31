<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= PROJECT_ROOT ?>/public/css/formAuth.css">
    <title>Login</title>
</head>

<body>
    <?php 
        $displayMessage = App\libraries\Session::getSessionKeyValueAndRemoveOnRefresh('displayMessage');
    ?>
    <div class="container">
        <form method="post" class="wrapper" id="form-login">
            <h1 class="title">Login</h1>
            <img class="form-image" src="<?= PROJECT_ROOT ?>/public/images/flaundry-logo-icon.png" alt="">
            <div class="input-group">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                    <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                </svg>
                <input autofocus type="text" name="username" id="username" placeholder="Username" autocomplete="off" required>
            </div>
            <div class="input-group">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                    <path d="M12 2C9.243 2 7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zm6 10 .002 8H6v-8h12zm-9-2V7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9z"></path>
                </svg>
                <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
            </div>
            <button class="submit-btn" type="submit" form="form-login" name="submit" value="submit">LOGIN</button>
            <p class="bottomDisplayMessage"><?= $displayMessage ?></p>
        </form>
        <div class="goback-btn">
            <button onclick="history.back()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                    <path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path>
                </svg>
                Return
            </button>
        </div>
    </div>

</body>

</html>
