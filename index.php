<!DOCTYPE HTML>

<html lang="ru">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Тестове завдання</title>

        <link href="/public/css/bootstrap.min.css" rel="stylesheet">
        <script src="/public/js/bootstrap.min.js"></script>
        <script src="/public/js/validation.js"></script>

    </head>
    <body>
        <div class="container">
            <div class="row col-md-3">

            </div>
            <div class="well col-md-6">
                <h2 style="text-align: center">Укажите параметры</h2>
                <div class="form-group">
                    <form style="text-align: center" name="frm" id="create_image" action="image.php" method="get" onsubmit="return f_submit();">
                        <br>
                        <input type="number" name="width" value="" min="0" class="form-control" placeholder="Image width" required >
                        <br>
                        <input type="number" name="height" value="" min="0" class="form-control" placeholder="Image height" required >
                        <br>
                        <input type="number" name="radius" value="" min="0" class="form-control" placeholder="Circle radius" required >
                        <br>
                        <div style="text-align: left"> Количество окружностей:</div>
                        <br>
                        <select size="1" title="circle_count"  name="count" class="form-control" required >
                            <option >5</option>
                            <option >10</option>
                            <option >20</option>
                            <option >50</option>
                        </select>
                        <br>
                        <button type="submit"  class="btn btn-success">Сгенерировать изображение</button>
                    </form>
                </div>
            </div>
    </body>


</html>