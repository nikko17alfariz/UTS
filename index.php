<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UTS Nikko Alfarizki</title>
</head>
<link rel="stylesheet" href="style.css">
<body>

<h2>Data Group B Piala Asia Qatar U-23</h2>
<h2>Per 07 Mei 2024 15:08:16 (Waktu dan Jam Sekarang)</h2>
<h2>Nikko Alfarizki/211011400883</h2>

<div class="form-container">
  <form class="form" action="" method="post">
    <div class="form-group">
      <label for="negara">Negara:</label>
      <input type="text" id="negara" name="negara" placeholder="Masukkan nama negara">
    </div>
    <div class="form-group">
      <label for="Pertandingan">Pertandingan:</label>
      <input type="text" id="Pertandingan" name="Pertandingan" placeholder="Masukkan nama pertandingan">
    </div>
    <div class="form-group">
      <label for="menang">Menang:</label>
      <input type="text" id="menang" name="menang" placeholder="Masukkan jumlah kemenangan">
    </div>
    <div class="form-group">
      <label for="seri">Seri:</label>
      <input type="text" id="seri" name="seri" placeholder="Masukkan jumlah seri">
    </div>
    <div class="form-group">
      <label for="kalah">Kalah:</label>
      <input type="text" id="kalah" name="kalah" placeholder="Masukkan jumlah kekalahan">
    </div>
    <button type="submit">Submit</button>
  </form>
</div>

<table class="table">
  <tr>
    <th>Negara</th>
    <th>Pertandingan</th>
    <th>Menang</th>
    <th>Seri</th>
    <th>Kalah</th>
  </tr>
  <tr>
    <td><?php echo isset($_POST['negara']) ? $_POST['negara'] : ''; ?></td>
    <td><?php echo isset($_POST['Pertandingan']) ? $_POST['Pertandingan'] : ''; ?></td>
    <td><?php echo isset($_POST['menang']) ? $_POST['menang'] : ''; ?></td>
    <td><?php echo isset($_POST['seri']) ? $_POST['seri'] : ''; ?></td>
    <td><?php echo isset($_POST['kalah']) ? $_POST['kalah'] : ''; ?></td>
  </tr>
</table>

</body>
</html>
