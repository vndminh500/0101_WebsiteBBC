<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <link rel="stylesheet" type="text/css" href="styleAddContract.css">

</head>
<body>
    <header>
    <div class="ImageLogo"><img src="./images/PPCLogo.png" alt="Italian Trulli"></div>
        <nav class="wrapper">
            <ul class= "mainmenu">
                <li class="HomeBuy"><a href="index.php">Nhà đất bán</a></li>
                <li class="HomeRent"><a href="about.php">Nhà đất thuê</a></li>
                <li class="Project"><a href="contact.php">Dự án</a></li>
                <li class="contract"><a href="ViewContract.php">Hợp đồng</a></li>
                <li class="property"><a href="">Bất động sản</a></li>
            </ul>
        </nav>
        <button class= "login " aria-hidden="true" type="button">Log In</button>
        <button class="signup" type="button">Sign Up</button>
    </header>
    <H1>Thêm hợp đồng</H1>
    <h3>Thông tin hợp đồng</h3>

        <div class= "container_1">
            <nav class="little_menu">
            <ul class="daudong">
        <li class="PheDuyet"><a href="#"> Phê duyệt hợp đồng</a></li>
        <li class="QuanLy"><a href="#"> Quản lý hợp đồng</a></li>
        <li class="ThanhToan"><a href="#"> Thanh toán</a></li>
        <li class="BaoCao"><a href="#"> Báo cáo thống kê</a></li>
        <li class="ThietLap"><a href="#">Thiết lập cảnh báo</a></li>
            </ul>
            </nav>
        </div>
            

        <form action="insertDB.php" method="post" >
                    <div class= "containerContract">

            <p> <label for= "nameContract">Tên hợp đồng: </label> 
            <input type="text" name="nameContract" id= "nameContract"required > 
            </p>

            <p> 
                <label for= "property">Mã bất động sản: </label> 
                <select name="property" id="property">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "fullcontract");

                        if ($link == false) {
                            die("Loi: Ket noi that bai. " . mysqli_connect_error());
                        }

                        $city = "SELECT * FROM  city";
                        $result = mysqli_query($link, "Select * from  property");       
                        while($c= mysqli_fetch_array($result)){
      
                    ?>
                    <option value="<?php echo $c['Property_Code'] ?>"> <?php echo $c['Property_Code']?> </option>
                    <?php } ?>
                </select>
            </p>

            <p> 
                <label for="dateCreateContract">Ngày lập hợp đồng: </label> 
                <input type="date" name="dateCreateContract" id= "dateCreateContract" required> 
            </p>

            <p> 
                <label for= "valueContract">Giá trị hợp đồng: </label> 
                <input type="number" name="valueContract" id= "valueContract" required>
            </p> 

            <p>
                <label for= "amountDeposit" >Số tiền đặt cọc: </label> 
                <input type="number" name="amountDeposit" id= "amountDeposit" required> 
            </p>

            <p> 
                <label for= "remainAmount">Số tiền còn lại: </label> 
                <input type="number" name="remainAmount" id= "remainAmount" required>
            </p> 

<p> 
    <label for = "_status">Trạng thái: </label> 
    <select name="_status" id="_status">
        <option value="Chưa hoàn thành">Chưa hoàn thành</option>
        <option value="Đã hoàn thành">Đã hoàn thành</option>
    </select>
</p>

</div>
            <div class="containerUser">
            <p> 
                <label for= "nameBuyer">Họ tên người mua: </label> 
                <input type=“text” name="nameBuyer" id= "nameBuyer" required>
            </p>
            <p> 
                <label for= "dateBorn">Sinh năm: </label> 
                <input type="date" name="dateBorn" id= "dateBorn" required>
            </p>

            <p>
                <label for= "idCard">Căn cước CD: </label> 
                <input type="text" name="idCard" id= "idCard" required>
            </p>

            <p> 
                <label for= "address">Địa chỉ: </label> 
                <select name="address" id="address">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "fullcontract");

                        if ($link == false) {
                            die("Loi: Ket noi that bai. " . mysqli_connect_error());
                        }

                        $city = "SELECT * FROM  city";
                        $result = mysqli_query($link, "Select * from  city");       
                        while($c= mysqli_fetch_array($result)){
      
                    ?>
                    <option value="<?php echo $c['CIty_Name'] ?>"> <?php echo $c['CIty_Name']?> </option>
                    <?php } ?>
                </select>

            </p>

            <p>
                 <label for= "phoneNumber">Số điện thoại: </label> 
                <input type="text" name="phoneNumber" id="phoneNumber" required> 
            </p>
            </div>
            <button  name='submit' type="submit" value="submit">Thêm hợp đồng</button>

        </form>


<footer>
    <div class="ImageLogoDown"><img src="./images/miniLogoTeam.png" alt="Italian Trulli"></div>
    <div class="AddressCity">
        <p>CÔNG TY CỔ PHẨN MỘT THÀNH VIÊN<br> RÁNG QUA KHÚC NÀY</p>
        <p>Tầng 31, LandMak, Thành phố Hồ chí minh.</p>
        <p>SĐT: 113569872 - 114125464</p>
    </div>
    <div class="HuongDan">
        <p class="huongdanNha">HƯỚNG DẪN</p>
        <ul class="dsHuongDan">
            <li>Về chúng tôi</li>
            <li>Câu hỏi thường gặp</li>
            <li>Báo cáo và hỗ trợ</li>
            <li>Góp ý và báo lỗi</li>
            <li>Bán đồ</li>
        </ul>
    </div>
    <div class="QuyDinh">
        <p class="quydinhNha">QUY ĐỊNH</p>
        <ul class="dsQuyDinh">
            <li>Quy định đăng tin</li>
            <li>Quy định hoạt động</li>
            <li>Các điều khoản</li>
            <li>Chính sách bảo mật</li>
            <li>Giải quyết khiếu nại</li>
        </ul>
    </div>
    <div class="ImageLogoPPCDown"><img src="./images/PPCLogo.png" alt="Italian Trulli"></div>
        <div class="AddressPPC">
            <p>CÔNG TY BẤT ĐỘNG SẢN PERFECT PROPERTY</p>
            <p>Tầng 31, khu đô thị Phú Mĩ Hưng, NewYork.</p>
            <p>SĐT: 698721135 - 546411412</p>
        </div>
    </footer>


    
</body>
</html>
