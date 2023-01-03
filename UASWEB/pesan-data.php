<table border="1">
    <tr>
        <th>Email</th>
        <th>Pesan</th>
    </tr>

    <?php
        include "koneksi.php";
        $ambildata = mysqli_query($koneksi, "SELECT * FROM masukan");

        while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
                <tr>
                    <td>$tampil[email]</td>
                    <td>$tampil[pesan]</td>
                <tr>
            ";
        }
    ?>
</table>