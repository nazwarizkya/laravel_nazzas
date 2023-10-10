<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <title>document</title>
    </head>
    <body>
        <H1>form tambah data</H1>
        <form action="/home/simpan" method="post">
            {{csrf_field()}}
            NAMA <input type="text" name= "nama" required= "required"><br><br>
            KELAS <input type="text" name= "kelas" required= "required"><br><br>
            ALAMAT <input type="text" name= "alamat" required= "required"><br/>
           <br><input type="submit" value="simpan data"></br>
        </form>
    </body>
</html>