<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

$dir1_images = glob(__DIR__ . '/../img_dir1/*');
$dir2_images = glob(__DIR__ . '/img_dir2/*');
$dir3_images = glob(__DIR__ . '/img_dir3/*');

function convertPath(string $filename, int $path_num = 1): string
{
    $pathinfo = pathinfo($filename);
    return sprintf('ex1_image.php?p=%s&f=%s&e=%s', $path_num, $pathinfo['filename'], $pathinfo['extension']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Invisible Image URL</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid #666;
        }

        th, td {
            padding: 5px;
            border: 1px solid #666;
        }

        img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
<main>
    <section>
        <?php foreach ($dir1_images as $images):
            $url = convertPath($images, 1) ?>
            <div>
                <a href="<?= $url ?>"><img src="<?= $url ?>" alt="img"></a>
            </div>
            <hr>
        <?php endforeach; ?>
        <?php foreach ($dir2_images as $images):
            $url = convertPath($images, 2) ?>
            <div>
                <a href="<?= $url ?>"><img src="<?= $url ?>" alt="img"></a>
            </div>
            <hr>
        <?php endforeach; ?>
        <?php foreach ($dir3_images as $images):
            $url = convertPath($images, 3) ?>
            <div>
                <a href="<?= $url ?>"><img src="<?= $url ?>" alt="img"></a>
            </div>
            <hr>
        <?php endforeach; ?>
    </section>
</main>
</body>
</html>
