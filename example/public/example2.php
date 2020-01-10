<?php

$dir1_images = glob(__DIR__ . '/../img_dir1/*');
$dir2_images = glob(__DIR__ . '/img_dir2/*');
$dir3_images = glob(__DIR__ . '/img_dir3/*');

function convertPath(string $filename, int $path_num = 1): string
{
  $pathinfo = pathinfo($filename);
  return sprintf('image.php?p=%s&f=%s&e=%s', $path_num, $pathinfo['filename'], $pathinfo['extension']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Invisible Image URL</title>
</head>
<body>
<main>
  <section>
    <?php foreach ($dir1_images as $images):
      $url = convertPath($images, 1) ?>
      <div>
        <a href="<?= $url ?>"><img src="<?= $url ?>" alt="img" width="50" height="50"></a>
      </div>
      <hr>
    <?php endforeach; ?>
    <?php foreach ($dir2_images as $images):
      $url = convertPath($images, 2) ?>
      <div>
        <a href="<?= $url ?>"><img src="<?= $url ?>" alt="img" width="50" height="50"></a>
      </div>
      <hr>
    <?php endforeach; ?>
    <?php foreach ($dir3_images as $images):
      $url = convertPath($images, 3) ?>
      <div>
        <a href="<?= $url ?>"><img src="<?= $url ?>" alt="img" width="50" height="50"></a>
      </div>
      <hr>
    <?php endforeach; ?>
  </section>
</main>
</body>
</html>
