<html>
    <head>
       <title>Bài tập 4</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
          <div class="container">
            <form action="menu.php" method="POST">
                <h1>Thực đơn</h1>
                  <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Món khai vị</h3>
                        <select multiple="multiple" name="monkhaivi[]">
                            <option>Gỏi ngó sen</option>
                            <option>Salat cá ngừ</option>
                            <option>Thịt nguội</option>
                            <option>Bò trộn rau thơm</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <h3>Món chính</h3>
                        <select multiple="multiple" name="monchinh[]">
                            <option>Bò hầm</option>
                            <option>Cá chẽm sốt cà</option>
                            <option>Tôm rang muối</option>
                            <option>Cua sốt me</option>
                            <option>Gà nướng nhà sàn</option>
                            <option>Vịt B'lao</option>
                            <option>Gà nướng muối ớt</option>
                            <option>Lẩu cá</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <h3>Món tráng miệng</h3>
                        <select multiple="multiple" name="montrangmieng[]">
                            <option>Chè hạt sen</option>
                            <option>Bánh Blan</option>
                            <option>Rau câu</option>
                        </select>
                    </div>
                </div>
                <br>
                <button type="submit" name="tim">Tìm</button>
            </form>
        </div>
    </body>
    <style>
        body{
            text-align: center;
        }
        select{
            font-size: 1.5em;
            padding: 10px;
            width: auto;
        }
    </style>
</html>