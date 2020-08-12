<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
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
        <h1>img_dir1</h1>
        <table>
            <tbody>
            <tr>
                <th>src='../img_dir1/busy.png'</th>
                <th>src='ex1_image.php?p=1&f=busy&e=png'</th>
            </tr>
            <tr>
                <td>
                    <a href="../img_dir1/busy1.png"><img src="../img_dir1/busy1.png" alt="img1"></a>
                </td>
                <td>
                    <a href="ex1_image.php?p=1&f=busy1&e=png"><img src="ex1_image.php?p=1&f=busy1&e=png" alt="img2"></a>
                </td>
            </tr>
            </tbody>
        </table>

        <h1>img_dir2</h1>
        <table>
            <tbody>
            <tr>
                <th>src='img_dir2/busy.png'</th>
                <th>src='ex1_image.php?p=2&f=busy&e=png'</th>
            </tr>
            <tr>
                <td>
                    <a href="img_dir2/busy2.png"><img src="img_dir2/busy2.png" alt="img3"></a>
                </td>
                <td>
                    <a href="ex1_image.php?p=2&f=busy2&e=png"><img src="ex1_image.php?p=2&f=busy2&e=png" alt="img4"></a>
                </td>
            </tr>
            </tbody>
        </table>

        <h1>img_dir3</h1>
        <table>
            <tbody>
            <tr>
                <th>src='img_dir3/busy.png'</th>
                <th>src='ex1_image.php?p=3&f=busy&e=png'</th>
            </tr>
            <tr>
                <td>
                    <a href="img_dir3/busy3.png"><img src="img_dir3/busy3.png" alt="img5"></a>
                </td>
                <td>
                    <a href="ex1_image.php?p=3&f=busy3&e=png"><img src="ex1_image.php?p=3&f=busy3&e=png" alt="img6"></a>
                </td>
            </tr>
            </tbody>
        </table>

        <h1>img_dir4</h1>
        <table>
            <tbody>
            <tr>
                <th>src='../img_dir4/busy.png'</th>
                <th>src='ex1_image.php?p=4&f=busy&e=png'</th>
            </tr>
            <tr>
                <td>
                    <a href="../img_dir4/busy4.png"><img src="../img_dir4/busy4.png" alt="img7"></a>
                </td>
                <td>
                    <a href="ex1_image.php?p=4&f=busy4&e=png"><img src="ex1_image.php?p=4&f=busy4&e=png" alt="img8"></a>
                </td>
            </tr>
            </tbody>
        </table>

        <h1>img_dir5</h1>
        <table>
            <tbody>
            <tr>
                <th>src='img_dir5/busy.png'</th>
                <th>src='ex1_image.php?p=5&f=busy&e=png'</th>
            </tr>
            <tr>
                <td>
                    <a href="img_dir5/busy5.png"><img src="img_dir5/busy5.png" alt="img9"></a>
                </td>
                <td>
                    <a href="ex1_image.php?p=5&f=busy5&e=png"><img src="ex1_image.php?p=5&f=busy5&e=png" alt="img10"></a>
                </td>
            </tr>
            </tbody>
        </table>
    </section>
</main>
</body>
</html>
