<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="content">
    <div class="container-fluid">
        <div class="card my-5">
            <form method="post" class="card-body">
                <div class="form-group row wrapper-nama">
                    <label class="col-form-label col-md-3">Nama Anda :</label>
                    <div class="col-md-9">
                        <input class="form-control input-nama">
                    </div>
                </div>
                <div class="form-group row wrapper-umur">
                    <label class="col-form-label col-md-3">Umur Anda :</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control input-umur">
                    </div>
                </div>
                <div class="form-group row wrapper-hobi">
                    <label class="col-form-label col-md-3">Hobi Anda :</label>
                    <div class="col-md-9">
                        <input class="form-control input-hobi">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
            <div class="result card-body">
                Nama : ''<br/>
                Umur : ''<br/>
                Hobi : ''<br/>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        var nama = umur = hobi = '';
        $('.wrapper-umur,.wrapper-hobi,.result').hide();
        $('.card-body').submit(function (e) {
            nama = $('.input-nama').val();
            umur = $('.input-umur').val();
            hobi = $('.input-hobi').val();
            console.log(nama,umur);

            if (nama.length > 0 ) {
                $('.wrapper-umur').show();
            } else {
                $('.wrapper-umur').hide();
            }
            if (umur.length > 0) {
                $('.wrapper-hobi').show();
            } else {
                $('.wrapper-hobi').hide();
            }
            if (nama.length > 0 && umur.length > 0 && hobi.length > 0) {
                const el = $('.result');
                el.html('');
                el.append(`Nama : ${nama}<br/>`);
                el.append(`Umur : ${umur}<br/>`);
                el.append(`Hobi : ${hobi}`);
                $('.wrapper-hobi,.wrapper-umur,.wrapper-nama,.btn-primary').hide();
                $('.result').show();
            }
            return false;
        });
    </script>
</div>

</body>
</html>