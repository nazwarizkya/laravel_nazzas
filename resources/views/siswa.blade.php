<!DOCTYPE html>
<html>
    <style>
        p {
            background-color: lightblue;
}
    </style>

    <header class="masthead">
    <CENTER><h1>BIODATA SISWA</h1></CENTER>
    <form action="/home/tambah">
        <CENTER><table border="1"></CENTER>
            <tr>
                <th>nama</th>
                <th>kelas</th>
                <th>alamat</th>
                <th>opsi</th>
            </tr>
            @foreach($siswa as $siswa)
            <tr>
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->kelas}}</td>
                <td>{{$siswa->alamat}}</td>
                

                <td>
                    <a href = "/home/edit/{{$siswa->id}}">EDIT</a>
                    <a href = "/home/hapus/{{$siswa->id}}">HAPUS</a>
                </td>
            </tr>
            @endforeach
        </table>
        <br>
        <input type="submit" value ="tambah data">
        </form>
   </body>
</html>
