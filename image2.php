<?php

/*
|--------------------------------------------------------------------------
| invisible_image_url
|--------------------------------------------------------------------------
|
| Hide image urls and add auth to image.
| If you not need real file check, you can use this.
|
*/

const FILE_REGEX = '@\A[a-z0-9_-]+\z@ui';
const EXT_REGEX = '@\A[a-z]+\z@u';
const ALLOW_MIME_TYPE = [
    'gif' => 'image/gif',
    'jpg' => 'image/jpeg',
    'png' => 'image/png',
    'svg' => 'image/svg+xml',
];
const IMG_PATH = [
    1 => '/path/to/image/dir1/',
    2 => '/path/to/image/dir2/',
];

// Flag
$display = true;


// =======================================================================
// If you require access restrictions, you can write here.
// if (!isLogin()) {
//     $display = false;
// }
// =======================================================================


// Get query param
$path = (int)filter_input(INPUT_GET, 'p');
$input_name = (string)filter_input(INPUT_GET, 'f');
$input_ext = strtolower((string)filter_input(INPUT_GET, 'e'));

// Switching image path
$img_path = IMG_PATH[$path] ?? '';
if (empty($img_path)) {
    $display = false;
}


// =======================================================================
// If you require access restrictions for each path, you can write here.
// if (!isSubscribe($path|$img_path)) {
//     $display = false;
// }
// =======================================================================


// Validate regex
if ($display) {
    $display = $display && (preg_match(FILE_REGEX, $input_name) === 1);
    $display = $display && (preg_match(EXT_REGEX, $input_ext) === 1);
}

// Validate whether allowed ext
if ($display) {
    $display = $display && array_key_exists($input_ext, ALLOW_MIME_TYPE);
}


// =======================================================================
// If you require access restrictions for each path, you can write here.
// if (!isSubscribe($img_path . $input_name . $input_ext)) {
//     $display = false;
// }
// =======================================================================


// Response
if ($display) {
    $filename = sprintf('%s.%s', $input_name, $input_ext);
    header('Content-Disposition: inline; filename="' . $filename . '"', true);
    header('Content-type:' . ALLOW_MIME_TYPE[$input_ext], true);
    readfile($img_path . $filename);
    exit();
}

// Error handler
header('Content-Type: text/plain; charset=UTF-8', true, 400);
exit('No such image.');
