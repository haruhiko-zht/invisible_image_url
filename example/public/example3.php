<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

// Example for, get from DB
$images = [
    ['path' => 1, 'file' => 'bonus1.png'],
    ['path' => 1, 'file' => 'busy1.png'],
    ['path' => 2, 'file' => 'busy2.png'],
    ['path' => 3, 'file' => 'busy3.png'],
    ['path' => 4, 'file' => 'busy4.png'],
];

function convertPath2(int $path, string $file): string
{
    $basename = basename($file);
    $name = mb_strrchr($basename, '.', true);
    $ext = mb_substr(mb_strrchr($basename, '.'), 1);
    return sprintf('ex1_image.php?p=%s&f=%s&e=%s', $path, $name, $ext);
}

$html = '';
foreach ($images as $image) {
    $url = convertPath2($image['path'], $image['file']);
    $html .= '<div>
                  <a href="' . $url . '"><img src="' . $url . '" alt="img"></a>
              </div>
              <hr>';
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
        <?= $html ?? '' ?>
    </section>
</main>
</body>
</html>
