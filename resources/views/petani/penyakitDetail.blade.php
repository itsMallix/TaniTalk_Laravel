<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petani | Detail Penyakit</title>
</head>
<body>
    <div class="cardRow">
        <div class="cardCol">
            <div class="card">
                <h2> {{ $dataPenyakit_->nama_penyakit }}</h2>
                <img src="" alt="" class="thumbnail">
                <p class="deskripsi"> {{ $dataPenyakit_->deskripsi }}</p>
            </div>
        </div>
    </div>
    <a class="premium" href="_premiumPage.php"><img src="../../assets/button_premium.jpg" alt=""></a>
</body>
</html>
<style>

.premium img{
    position: absolute;
    bottom: 0;
    right: 0;
    width: 15%;
}

.card img{
    border-radius: 10px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}

.cardRow{
    width: 100%;
    margin: 10px;
    display: flex;
    justify-content: center;
}

.cardCol{
    display: flex;
    justify-content: center;
    width: 70%;
    padding: 15px;
    display: grid;
}

h2, p, img{
    text-align: center;
}

</style>