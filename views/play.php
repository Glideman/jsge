<? /**
 * @var Application $App
 */
header("Content-Type:text/html;charset=utf-8;");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/png" href="/f/favicon.png" />
        <link rel="stylesheet" href="/css/styles.css" type="text/css" />
        <script type="text/javascript" src="/js/script.js"></script>

        <title><?=$App->currentController . "::" . $App->currentAction?></title>
    </head>


    <body>

        <div class="game-container">
            <canvas class="js-screen" id="js-screen">Обновите браузер</canvas>
        </div>

    </body>
</html>