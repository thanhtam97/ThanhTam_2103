<html>
    <head>
       <title>Bài tập 4 MENU</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="list">
                <h1>Thực đơn đã chọn</h1>
                <table>
                    <tr>
                        <th>Món khai vị</th>
                        <th>Món chính</th>
                        <th>Món tráng miệng</th>
                    </tr>
                    <tr>
                        <td>
                            
                        <?php
                            
                            if(!empty($_POST['monkhaivi']))
                            {
                                $khaivi = $_POST['monkhaivi'];
                                for($i = 0; $i < count($khaivi); $i++)
                                {
                                    echo "<li>" . $khaivi[$i] . "</li>";
                                }
                            }
                        ?>
                            </td>
                        <td>
                            
                            <?php
                            
                            if(!empty($_POST['monchinh']))
                            {
                                $chinh = $_POST['monchinh'];
                                for($i = 0; $i < count($chinh); $i++)
                                {
                                    echo "<li>" . $chinh[$i] . "</li>";
                                }
                            }
                        ?>
                        </td>
                        <td>
                            
                        <?php
                            if(!empty($_POST['montrangmieng']))
                            {
                                $trangmieng = $_POST['montrangmieng'];
                                for($i = 0; $i < count($trangmieng); $i++)
                                {
                                    echo "<li>" . $trangmieng[$i] . "</li>";
                                }
                            }
                        ?>
                            </td>
                    </tr>
                </table>
                
            </div>
        </div>
    </body>
    <style>
        th{
            text-align: center;
            width: 500px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</html>