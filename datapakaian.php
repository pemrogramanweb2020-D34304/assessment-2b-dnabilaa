<h2>pakaian</h2>
<table border="1">
    <tr><th>id produk</th><th>NAMA</th><th>harga</th>
    <?php
    include 'koneksi.php';
    $pakaian = mysqli_query($connect, "SELECT * from pakaian");
    foreach ($pakaian as $row){
        
        echo "<tr>
            <td>".$row['id_produk']."</td>
            <td>".$row['nama_produk']."</td>
            <td>".$row['harga_produk']."</td>
              </tr>";
            
              
    }
    ?>
    <form action="pesan.php" method="post">
    <input type="submit" value="pesan"><br>
    </form>
</table>