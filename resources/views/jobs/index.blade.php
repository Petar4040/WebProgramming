<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jobs List</title>
    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        <ul>
            <?php foreach ($jobs as $job) : ?>
                <li><?php echo htmlspecialchars($job, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>  