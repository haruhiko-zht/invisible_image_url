<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Invisible Image URL</title>
</head>
<body>
<main>
  <section>
    <div>
      <p>src='../img_dir1/busy.png'</p>
      <a href="../img_dir1/busy1.png"><img src="../img_dir1/busy1.png" alt="img1" width="50" height="50"></a>
    </div>
    <hr>
    <div>
      <p>src='image.php?p=1&f=busy&e=png'</p>
      <a href="image.php?p=1&f=busy1&e=png"><img src="image.php?p=1&f=busy1&e=png" alt="img2" width="50"
                                                 height="50"></a>
    </div>
    <hr>
    <div>
      <p>src='img_dir2/busy.png'</p>
      <a href="img_dir2/busy2.png"><img src="img_dir2/busy2.png" alt="img3" width="50" height="50"></a>
    </div>
    <hr>
    <div>
      <p>src='image.php?p=2&f=busy&e=png'</p>
      <a href="image.php?p=2&f=busy2&e=png"><img src="image.php?p=2&f=busy2&e=png" alt="img4" width="50"
                                                 height="50"></a>
    </div>
    <hr>
    <div>
      <p>src='img_dir3/busy.png'</p>
      <a href="img_dir3/busy3.png"><img src="img_dir3/busy3.png" alt="img5" width="50" height="50"></a>
    </div>
    <hr>
    <div>
      <p>src='image.php?p=3&f=busy&e=png'</p>
      <a href="image.php?p=3&f=busy3&e=png"><img src="image.php?p=3&f=busy3&e=png" alt="img6" width="50"
                                                 height="50"></a>
    </div>
  </section>
</main>
</body>
</html>
