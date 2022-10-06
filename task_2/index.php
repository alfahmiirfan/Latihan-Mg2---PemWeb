<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA MAHASISWA</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  
  <form action="hasil.php" method="GET">
    <table align="center"> 
      <tr align="center">
        <td><h2> 
            <b>DATA MAHASISWA</b>
        </h2></td>
    </tr>
      <tr> 
        <td>
        <label>Nama :</label>
        <div class="nama">
        <input type="text" name="xnama" size=50 required><br>
        </div>
        <label>NIM :</label>
        <div class="nim">
        <input type="text" name="xnim" size=50 required><br>
        </div>
        <label>Email :</label>
        <div class="email">
        <input type="text" name="xemail" size=50 required><br>
        </div>

        <label>Jurusan :</label>
        <select name="xjurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
            <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
            <option value="Teknik Fisika">Teknik Fisika</option>
            <option value="Teknik Biomedis">Teknik Biomedis</option>
            <option value="Teknik Sistem Energi">Teknik Sistem Energi</option>
        </select>
        <input type="submit" name="xsubmit" value="Submit">
        </td>
      </tr>
    </table>
  </form>

</body>
</html>