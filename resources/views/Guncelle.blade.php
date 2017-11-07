<title>Kullanıcı Güncelle</title>
<link rel="stylesheet" href="\css\app.css">
<br><br><br>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"  style="font-size: 25;">Kullanıcıyı Güncelleyiniz</div>
        <br>
        <div class="panel-body">
            @if(isset($kullaniciguncelle))
                <form class="form-horizontal" action="{{ url('/guncelle') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$kullaniciguncelle->id}}">
                    <div class="form-group">
                        <label class="col-md-4">Ad:</label>
                        <div class="col-md-4">
                            <input type="text" name="adi" class="form-control"  value="{{$kullaniciguncelle->adi}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4">Soyad:</label>
                        <div class="col-md-4">
                            <input type="text" name="soyadi" class="form-control" value="{{$kullaniciguncelle->soyadi}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4">Telefon:</label>
                        <div class="col-md-4">
                            <input type="text" name="telefonu" class="form-control"  value="{{$kullaniciguncelle->telefon}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4">Diğer Telefon:</label>
                        <div class="col-md-4">
                            <input type="text" name="digertel" class="form-control"  value="{{$kullaniciguncelle->diger_telefon}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4">Adres:</label>
                        <div class="col-md-4">
                            <input type="text" name="adresi" class="form-control"  value="{{$kullaniciguncelle->adres}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4">Mail:</label>
                        <div class="col-md-4">
                            <input type="text" name="email" class="form-control"  value="{{$kullaniciguncelle->email}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4">Resim:</label>
                        <div class="col-md-4">
                            <input type="file" name="resim" class="form-control"  value="{{$kullaniciguncelle->resim}}">
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-md-4">
                            <input type="submit" name="guncelle" class="btn btn-primary" value="Guncelle">
                        </div>
                    </div>
                </form>
            @endif
            <a href="/" style=" font-size: 15px; "> Anasayfa'ya Geri Dön</a>
            <br>
            <a href="/listele" style=" font-size: 15px; "> Kayıtlı Kullanıcılar</a>
        </div>
    </div>
</div>

