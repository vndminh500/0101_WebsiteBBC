<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <link rel="stylesheet" type="text/css" href="stylesViewContract.css">

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
    <button  name='ChuyenTrang' ><a class="addContractLink" href="./addContract.php">Thêm hợp đồng</a></button>
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
</div>
            <div class="containerUser">
            <?php
                $link = mysqli_connect("localhost", "root", "", "fullcontract");

                if ($link == false) {
                    die("Loi: Ket noi that bai. " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM  fullcontract ORDER BY ID DESC";
                $result = mysqli_query($link, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Hiển thị thông tin của mỗi hợp đồng dưới dạng card
                ?>
                        <div class="card">
                            <p class="nameContract"><?php echo $row['NameContract']; ?></p>
                            <dev class="contracts">
                                <p>Mã hợp đồng: <?php echo $row['CodeContract']; ?></p>
                                <p>Ngày tạo hợp đồng: <?php echo $row['DateCreateContract']; ?></p>
                                <p>Mã bất động sản: <?php echo $row['Property'];?> </p>
                                <p>Giá trị hợp đồng: <?php echo $row['ValueContract']; ?> VNĐ</p>
                                <p>Số tiền đặt cọc: <?php echo $row['AmountDeposit']; ?> VNĐ</p>
                                <p>Số tiền còn lại: <?php echo $row['RemainAmount']; ?> VNĐ</p>
                                <p>Trạng thái: <?php echo $row['_Status']; ?></p>

                            </dev>
                            
                            <dev class="user">
                                <p>Họ và tên người mua: <?php echo $row['NameBuyer']; ?></p>
                                <p>Sinh năm: <?php echo $row['DateBorn']; ?></p>
                                <p>Chứng minh nhân dân <?php echo $row['IDCard']; ?></p>
                                <p>Địa chỉ: <?php echo $row['_Address']; ?></p>
                                <p>Số điện thoại: <?php echo $row['PhoneNumber']; ?></p>
                            </dev>


                        </div>
                <?php
                    }
                } else {
                    echo "Lỗi: " . mysqli_error($link);
                }

                mysqli_close($link);
                ?>

            </div>

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
