<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>
  ul{
    list-style: none;
  }

  #container{
    border: 1px gray solid; 
    width : 300px; 
    padding : 5px 5px; 
    margin : 5px 5px;
  }
</style>
<body>

  <ul>
    <h2>Daftar Buku</h2>

    @foreach ($data["data"] as $dt)
      <div id="container">
        <li>ISBN : {{ $dt["isbn"] }}</li>
        <li>Nama : {{ $dt["nama"] }}</li>
        <li>Pengarang : {{ $dt["pengarang"] }}</li>
        <li>Tahun : {{ $dt["tahun"] }}</li>
        <li>Harga : {{ $dt["harga"] }}</li>
      </div>
    @endforeach

  </ul>
</body>
</html>