<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <?php
        include __DIR__ .'/header.php';

        include __DIR__ .'/../views/'.$page.'.php';

        include __DIR__.'/footer.php';
    ?>
</body>
</html>