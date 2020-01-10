<?php

// ===========================================================
// If you require access restrictions, you can write here.
// ===========================================================


// option param
const FILE_REGEX = '@\A[a-z0-9_-]+\z@ui';
const EXT_REGEX = '@\A[a-z]+\z@ui';
const ALLOW_MIME_TYPE = [
  'gif' => 'image/gif',
  'jpg' => 'image/jpeg',
  'png' => 'image/png',
];

// get query param
$path = (int)filter_input(INPUT_GET, 'p');
$input_name = filter_input(INPUT_GET, 'f');
$input_ext = filter_input(INPUT_GET, 'e');

// switching img path
if ($path === 1) {
  $img_path = __DIR__ . 'path_to_img1';
} elseif ($path === 2) {
  $img_path = __DIR__ . 'path_to_img2';
} else {
  header('Content-Type: text/plain; charset=UTF-8', true, 400);
  exit('No such image.');
}


// ===========================================================
// If you require access restrictions for each image,
// you can write here.
// ===========================================================


// validation
if (preg_match(FILE_REGEX, $input_name) && preg_match(EXT_REGEX, $input_ext)) {
  $input_file = sprintf('%s.%s', $input_name, $input_ext);

  $finfo = new finfo(FILEINFO_MIME_TYPE);
  $mime_type = $finfo->file($img_path . $input_file);

  // response
  if ($ext = array_search($mime_type, ALLOW_MIME_TYPE, true)) {
    $filename = sprintf('%s.%s', $input_name, $ext);
    header('Content-Disposition: inline; filename="' . $filename . '"', true);
    header('Content-type:' . $mime_type, true);
    readfile($img_path . $filename);
    exit();
  }
}

// error handler
header('Content-Type: text/plain; charset=UTF-8', true, 400);
exit('No such image.');
