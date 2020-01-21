<!DOCTYPE html>
<html>
<head>
  <title>UNIBOOKSTORE</title>
  <link rel="icon" type="image/png" href="../icon/rwby-icon2.png">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="header">
    <img src="rwby-icon.png" width="100px" height="100px">
    <h1>UNIBOOKSTORE</h1> 
  </div>

  <div class="topnav">
    <a href="index.php"><i class="material-icons">home</i>HOME</a>
    <a href="admin.php" target="_blank"><i class="material-icons">face</i>ADMIN</a>
    <a href="pengadaan.php" target="_blank"><i class="material-icons">book</i>PENGADAAN</a>
  </div>

  <div class="row">
    <div class="column side">
     
    </div>

    <div class="column middle">
      <form action="caribuku.php" method="post" id="namabuku">
        <input type="text" placeholder="Cari Buku" name="namabuku" >
      </form>
 

    <?php
  // menghubungkan dengan koneksi
    include 'koneksi.php';

    $sql = "SELECT * FROM data.tabel_buku"; /*%$search harus sesuai dengan $search*/
    if($result = mysqli_query($koneksi, $sql)){
      if(mysqli_num_rows($result) > 0){
        echo "<table border=1 width=80% align=center>";
        echo "<tr>";
        echo "<th>ID buku</th>";
        echo "<th>Kategori</th>";
        echo "<th>Nama Buku</th>";
        echo "<th>Harga </th>";
        echo "<th>Stok</th>";
        echo "<th>Penerbit</th>";
        echo "</tr>";    

        while($row = mysqli_fetch_array($result))
        {
          echo "<tr>";
          echo "<td>" . $row['idbuku'] . "</td>";
          echo "<td>" . $row['kategori'] . "</td>";
          echo "<td>" . $row['namabuku'] . "</td>";
          echo "<td>" . $row['harga'] . "</td>";
          echo "<td>" . $row['stok'] . "</td>";
          echo "<td>" . $row['penerbit'] . "</td>";
          echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
      } else {
        echo "No records matching your query were found.";
      }
    } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
    }

// Close connection
    mysqli_close($koneksi);
    ?>
   </div>

    <div class="column side">
      
    </div>
  </div>


  <div class="footer">
    <i class="material-icons">copyright</i>
    <p>Inggrid Suryani</p>
  </div>



</body>
</html>