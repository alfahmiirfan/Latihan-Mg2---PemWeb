<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  
  <form>
    <table align="center"> 
      <tr align="center">
        <td><h2> 
            <b>HASIL DATA</b>
        </h2></td>
    </tr>
      <tr> 
        <td>
            <div class="hasil">    
        <?php
            $nama=$_GET['xnama'];
            $nim=$_GET['xnim'];
            $email=$_GET['xemail'];
            $jurusan=$_GET['xjurusan'];

            echo"Nama : ".$nama. "<br>";
            echo"NIM : ".$nim. "<br>";
            echo"Jurusan : ".$jurusan. "<br>";
            echo"email : ".$email. "<br>";
        ?>
        </div>
      </td>
      </tr>
    </table>
  </form>

</body>
</html>
