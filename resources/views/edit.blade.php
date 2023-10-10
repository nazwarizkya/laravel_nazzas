<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <title>document</title>
    </head>
    <body>
        @foreach($siswa as $siswa)
        <form action="/home/update" method="post">
            {{csrf_field()}}
            <input type= "hidden" name="id" value= "{{$siswa->id}}"> <br/>
            NAMA <input type="text" name= "nama" value="{{$siswa->nama}}"><br><br>
            KELAS <input type="text" name= "kelas" value="{{$siswa->kelas}}"><br><br>
            ALAMAT <input type="text" name= "alamat" value="{{$siswa->alamat}}"><br/>
           <br><input type="submit" value="simpan data"></br>
        </form>
        @endforeach
    </body>
</html>