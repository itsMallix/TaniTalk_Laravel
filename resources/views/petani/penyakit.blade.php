<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petani | katalog Penyakit</title>
</head>
<body>
    @include('petani.sidebar')
    @include('petani.navbar')
    <div class="container">
        <br><br><br><br><br>
        @foreach ($dataPenyakit as $row)
        <div class="cardRow">
            <div class="cardCol">
                <div class="card">
                    <h2>{{ $row->nama_penyakit }}</h2>
                    <img src="{{ route('image.display'), ['id' => $row->gambar] }}" alt="" class="thumbnail">
                    <a href="{{ route('petani.penyakitDetail', $row->id)}}">
                        <button class="detailBtn">Detail</button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>

<style>
*{
    box-sizing: border-box;
}

.tambah{
    background-color: #4CAF50;
    border: none;
    color: #242424;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    width: 50%;
    margin-left: 430px;
    margin-top: 10px;
}

.card img{
    height: 200px;
    width: 200px;
    margin: 5px;
    border-radius: 5px;
}

.cardRow{
    width: 100%;
    margin: 0 5px;
    margin-left: 300px;
}

.cardCol{
    width: 20%;
    float: left;
    padding: 15px;
    display: grid;
}

h2{
    text-align: center;
}

.card{
    background-color: white;
    padding: 20px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 2);
}


body{
    /* margin-left: 390px; */
    /* overflow-x: hidden; */
    width: 100vw;
    height: 100vh;
    max-width: 10%;
}
.detailBtn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  
}

.detailBtn:hover {
  background-color: #3e8e41;
}

</style>
