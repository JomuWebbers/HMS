<?php
$pageTitle = 'OsunBiz';
$serverTime = date('F j, Y \a\t g:i:s A');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <style>
        :root {
            color-scheme: light;
            font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
            color: #242424;
            background: #f5f6f8;
        }

        body {
            min-height: 100vh;
            margin: 0;
            display: grid;
            place-items: center;
        }

        main {
            width: min(100% - 2rem, 38rem);
            padding: 2rem;
            border: 1px solid #dedfe3;
            border-radius: 0.75rem;
            background: #fff;
            box-shadow: 0 0.5rem 1.5rem rgb(0 0 0 / 5%);
        }

        h1 {
            margin-top: 0;
        }

        .status {
            display: inline-block;
            padding: 0.35rem 0.65rem;
            border-radius: 999px;
            background: #e8f5ec;
            color: #21643a;
            font-size: 0.875rem;
            font-weight: 600;
        }

        a {
            color: #174ea6;
        }
    </style>
</head>
<body>
    <main>
        <p class="status">PHP is running</p>
        <h1>Welcome to OsunBiz</h1>
        <p>This is the first server-rendered page for the Osun State business directory.</p>
        <p>Server time: <?= htmlspecialchars($serverTime, ENT_QUOTES, 'UTF-8') ?></p>
        <p><a href="Osun-BizWireframes/Osun-Biz/index.html">View the existing design previews</a></p>
    </main>
</body>
</html>
