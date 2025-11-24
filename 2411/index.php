<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>

    <h1>php bài 1</h1>

    <?php
        echo "<h2>Hello World</h2><br>"; //echo in ra màn hình
        echo "<h2>PHP<h2><br>";  //echo/ECHO/Echo đều giống nhau

        $ten = "Nguyễn Văn A"; //tạo biến bằng kí tự $
        $tuoi = 20; //tên biến có phân biệt chữ hoa và chữ thường
        $mot = $somot = 1; //có thể gán giá trị nhiều biến trên cùng 1 dòng
        $themtuoi = 1; //vi du

        echo $tuoi + $themtuoi . "<br>";

        echo "Tên tôi là: " .$ten . "<br>"; //khai báo biến phải viết $
        echo "Tuổi: " . $tuoi . "<br>"; //nối chuỗi bằng dấu .

        define("PI", 3.14); //hằng số không dùng dấu $
        echo "Giá trị của hằng số PI là: " . PI . "<br>"; //gọi hằng số không dùng dấu $ mà viết tên hẳng luôn

        //dùng "" chứ không dùng ''
        echo strlen($ten) . "<br>"; //đếm độ dài chuỗi, kết quả là 15 vì kí tự UTF-8
        echo mb_strlen($ten) . "<br>"; //đếm độ dài chuỗi kết quả là 12     
        
        echo strpos($ten, "Văn") . "<br>"; //tìm vị trí chuỗi con trong chuỗi cha, kết quả là 8 
        /* hoặc
        $pos = strpos($ten, "Văn"); //tìm vị trí chuỗi con trong chuỗi cha
        echo "Vị trí của chuỗi con 'Văn' trong chuỗi cha là: " . $pos . "<br>";
        */
        echo str_replace("Nguyễn", "Trần", $ten) . "<br>"; //thay thế chuỗi con trong chuỗi cha, kết quả là Trần Văn A

        if ($tuoi >= 18) {
            echo "Không phải đi tù<br>";
        } elseif ($tuoi >= 16) {
            echo "Mấy cuốn là ít<br>";
        }   
        else {
            echo "Tử hình<br>";
        }

        //switch case
        $color = "red";
        switch ($color) {
            case "red":
                echo "Màu đỏ<br>";
                break;
            case "blue":
                echo "Màu xanh dương<br>";
                break;
            case "green":
                echo "Màu xanh lá<br>";
                break;
            default:
                echo "Không biết màu gì<br>";
        }

        //for
        $soluong = 5;
        for ($i = 1; $i <= $soluong; $i++) {
            echo "Lần thứ: " . $i . "<br>";
        }

    ?>

</body>
</html>