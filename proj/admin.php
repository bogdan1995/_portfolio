<?
    header('Content-type: text/html; charset=utf-8');
    require 'php/DB.class.php';
    $ddb = new DB();
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $site_name = strip_tags($_POST['site_name']);
        $link = strip_tags($_POST['link']);

        if ($_FILES['img']['type'] != 'image/png' && $_FILES['img']['type'] != 'image/jpeg') {
            echo 'Неподходящий тип файла';
            exit;
        }

        $img_dir = 'img/portfolio/';
        $img_name = $img_dir . basename($_FILES['img']['name']);

        if (move_uploaded_file($_FILES['img']['tmp_name'], $img_name)) {
            $size = getimagesize($img_name);
            if ( round(($size[0]/$size[1]), 1) != 1.8 ) {
                echo 'Неподходящий размер файла';
                unlink($img_name);
                exit;
            }
        } else {
            echo "Загрузка не удалась";
            exit;
        }

        $img_name = '/' . $img_name;

        $db = new DB();
        $db -> add2DB($site_name, $link, $img_name);

    }
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Панель администратора</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
        .col-md-12 {
            margin-top: 100px;
        }
        label {
            width: 150px;
        }
        .form-group {
            margin-bottom: 10px !important;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <div class="col-md-12">
            <form action="admin.php" method="post" class="form-inline" ENCTYPE="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputName2">Название сайта</label>
                    <input type="text" class="form-control" id="exampleInputName2" name="site_name" placeholder="Введите название">
                </div><br>
                <div class="form-group">
                    <label for="exampleInputName2">Ссылка</label>
                    <input type="text" class="form-control" id="exampleInputName2" name="link" placeholder="Введите ссылку">
                </div><br>
                <div class="form-group">
                    <label for="exampleInputFile">Изображение</label>
                    <input type="file" id="exampleInputFile" name="img">
                </div><br>
                <input class="btn btn-success btn-lg" type="submit" value="Загрузить">
            </form>
        </div>
    </div>
</body>
</html>