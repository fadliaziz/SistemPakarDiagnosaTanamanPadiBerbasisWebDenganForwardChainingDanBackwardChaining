<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {

      background-color: #82CD47;
      font-family: 'Poppins', sans-serif;
    }

    .judul {
      text-align: center;
      margin-top: 30px;
      color: #000;
      padding: 10px;
      background: rgb(240, 255, 66);
      border-radius: 10px;
      margin-left: 150px;
      margin-right: 150px;
      border:4px solid #379237;
    }

    nav {
      display: flex;
      padding: 2% 6%;
      justify-content: space-between;
      align-items: center;
    }

    nav ul {
      text-align: right;
    }

    nav ul li {
      list-style: none;
      padding: 8px 12px;
      display: inline-block;
      position: relative;
    }

    nav ul li a {
      text-decoration: none;
      color: white;
      text-transform: uppercase;
      font-size: 13px;
    }

    nav ul li::after {
      content: '';
      margin: auto;
      width: 30%;
      height: 3px;
      background: rgb(240, 255, 66);
      display: block;
      transition: 1s;
    }

    nav ul li:hover::after {
      width: 100%;
    }
    nav ul li a:hover{
      text-decoration: none;
      color: white;
    }
  </style>
  <script src="bootstrap.min.js"></script>
  <title>TUGAS AKB</title>
</head>

<body>
  <nav>
    <img src="image.png" width="50" height="50" alt="">
    <ul>
      <li><a href="anggota.php"> Anggota </a></li>
      <li><a href="index.php"> Home </a></li>
    </ul>
  </nav>
  <div class="judul">
   <marque><h5>Sistem Pakar Diagnosa Penyakit Tanaman Padi Berbasis WEB Dengan Forward dan Backward Chaining</h5></marque>
  </div>
</body>

</html>