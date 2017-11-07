<title>Kullanıcı Ekle</title>
<link rel="stylesheet" href="css\app.css">
<br><br><br>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"  style="font-size: 25;">Formu Doldurunuz</div>
        <br>
        <div class="panel-body">
            <form class="form-horizontal" action="{{ url('/kaydet') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-md-4">Ad:</label>
                    <div class="col-md-4">
                        <input type="text" name="isim" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Soyad:</label>
                    <div class="col-md-4">
                        <input type="text" name="soyad" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Telefon:</label>
                    <div class="col-md-4">
                        <input type="text" name="telefonu" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Diger Telefon:</label>
                    <div class="col-md-4">
                        <input type="text" name="digertel" class="form-control">
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-md-4">Adres:</label>
                    <div class="col-md-4">
                        <input type="text" name="adresi" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">E mail:</label>
                    <div class="col-md-4">
                        <input type="text" name="email" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Resim:</label>
                    <div class="col-md-4">
                      <input type="file" name="resim" class="form-control">
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <div class="col-md-4">
                        <input type="submit" name="kaydet" class="btn btn-primary" value="Kaydet">
                    </div>
                </div>
            </form>
            <a href="/" style=" font-size: 15px; "> Anasayfa'ya Geri Dön</a>
            <br>
            <a href="/listele" style=" font-size: 15px; "> Kayıtlı Kullanıcılar</a>
        </div>
    </div>
</div>