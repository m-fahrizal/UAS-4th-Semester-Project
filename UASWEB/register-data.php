<table border="1">
    <tr>
        <th>Email</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Fakultas</th>
        <th>Program Studi</th>
        <th>No Telepon</th>
    </tr>

    <?php
        include "koneksi.php";
        $ambildata = mysqli_query($koneksi, "SELECT * FROM register");

        while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
                <tr>
                    <td>$tampil[email]</td>
                    <td>$tampil[nama]</td>
                    <td>$tampil[nim]</td>
                    <td>$tampil[fakultas]</td>
                    <td>$tampil[program_studi]</td>
                    <td>$tampil[no_telp]</td>
                <tr>
            ";
        }
    ?>
</table>