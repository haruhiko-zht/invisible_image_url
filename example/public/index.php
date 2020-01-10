<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Invisible Image URL</title>
</head>
<body>
<main>
  <section>
    <h1>Example system directory</h1>
    <pre>
invisible_image_url
|-img_dir1
| |-bonus1.png
| |-busy1.png
|
|-public [document root]
  |-img_dir2
  | |-.htaccess(deny from all)
  | |-busy2.png
  |
  |-img_dir3
  | |-busy3.png
  |
  |-index.php [here]
  |-example.php
  |-example2.php
  |-image.php
    </pre>
  </section>
  <section>
    <div>
      <a href="example.php">example1</a>
    </div>
    <div>
      <a href="example2.php">example2</a>
    </div>
  </section>
</main>
</body>
</html>
