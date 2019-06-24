<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <title>Document</title>
</head>
<body>
    <div class="ui container">
    <h2 class="ui header">Изменить размер изображения</h2>
        <form  enctype="multipart/form-data" method="post" id="formSize" action="">
            <div class="ui pointing below label">
                Выберите файл
            </div>
                <div class="ui fluid input">
                    <input name="fileSize" id="fileSize" type="file">
                </div>
                <br>
                <div class="ui pointing below label">
                Выберите размер
                </div>
                <div>
                    <select id="selectSize" name="selectSize" class="ui compact selection dropdown">
                        <option value="1080">1080x1080</option>
                        <option value="720">720x480</option>
                        <option value="320">320x240</option>
                    </select>
                </div>
                <br>
                <button class="ui primary button">Отправить</button>
        </form>
        <br>
        <div id="resultSize"></div>
    <h2 class="ui header">Выделить центр изображения</h2>
    <form enctype="multipart/form-data" method="post" id="formCenter" action="">
            <div class="ui pointing below label">
                Выберите файл
            </div>
                <div class="ui fluid input">
                    <input name="fileCenter" id="fileCenter" type="file">
                </div>
                <br>
                <button class="ui primary button">Отправить</button>
        </form>
        <br>
        <div id="resultCenter"></div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="main.js"></script>
</body>
</html>
