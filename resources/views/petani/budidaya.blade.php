<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <title>Petani</title>
</head>
<body>
    @include('petani.sidebar');
    @include('petani.navbar');
    <div class="head">
        <div class="content">
            <br><br><br><br><br>
            <!-- <a href="_tambahBudidaya.php" target="_blank"><button class="tambah"><i class="fa-solid fa-circle-plus"></i>  Tambah</button></a> -->
        </div>
    </div>
    <div class="list_content">
        <div class="list_item">
            <ul class="list_item_item">
                <li class="list_data">
                    <a href=""><img class="icon" src="{{ asset('images/icon_kopi.png') }}" alt=""></a>
                </li>
                <li class="list_data">
                    <a href="_showBudidaya.php"><img class="icon" src="{{ asset('images/icon_kakao.png') }}" alt=""></a>
                </li>
                <li class="list_data">
                    <a href=""><img class="icon" src="{{ asset('images/icon_apel.png') }}" alt=""></a>
                </li>
                <li class="list_data">
                    <a href=""><img class="icon" src="{{ asset('images/icon_anggur.png') }}" alt=""></a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>

<style>
.list_content{
    vertical-align: middle;
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    width: 30%;
    margin-left: 300px;
}
.head{
    background-color: #E9E9E9;
    height: 150px;
    width: 100%;
}
.tambah {
  background-color: #6CBB08;
  border: none;
  color: #ffffff;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
  width: 10%;
  margin-left: 400px;
  margin-top: 10px;
  
}

.tambah:hover {
  background-color: grey;
}
</style>
