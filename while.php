<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>สูตรคูณ</title>
<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;600;700&display=swap" rel="stylesheet">
<style>
* { box-sizing: border-box; margin: 0; padding: 0; }

body {
  font-family: 'Sarabun', sans-serif;
  background: #f0faf5;
  min-height: 100vh;
  padding: 48px 40px;
  color: #0f2d1f;
}

/* ── Layout: left-aligned, no centering ── */
.container {
  max-width: 520px;
  margin: 0;
  background: #ffffff;
  border-radius: 10px;
  padding: 36px 36px 44px;
  border-left: 5px solid #10b981;
  box-shadow: 4px 4px 0px #a7f3d0;
}

/* ── Header ── */
.eyebrow {
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #10b981;
  margin-bottom: 6px;
}

h1 {
  font-size: 1.45rem;
  font-weight: 700;
  color: #0f2d1f;
  margin-bottom: 28px;
  line-height: 1.3;
}

/* ── Nav link ── */
.nav-link {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.82rem;
  font-weight: 600;
  color: #059669;
  text-decoration: none;
  margin-bottom: 24px;
  padding: 4px 0;
  border-bottom: 1.5px dashed #6ee7b7;
}
.nav-link:hover {
  color: #047857;
  border-bottom-style: solid;
}

/* ── Form ── */
.form-group {
  display: flex;
  flex-direction: column;
  gap: 8px;
  margin-bottom: 32px;
}

.form-group label {
  font-size: 0.88rem;
  font-weight: 600;
  color: #374151;
}

.input-row {
  display: flex;
  align-items: stretch;
  gap: 0;
  width: 100%;
  max-width: 320px;
}

.input-row input[type="number"] {
  flex: 1;
  padding: 9px 14px;
  font-family: 'Sarabun', sans-serif;
  font-size: 1rem;
  color: #0f2d1f;
  background: #f0faf5;
  border: 1.5px solid #6ee7b7;
  border-right: none;
  border-radius: 6px 0 0 6px;
  outline: none;
  transition: border-color 0.15s, background 0.15s;
}
.input-row input[type="number"]:focus {
  border-color: #10b981;
  background: #fff;
}

.input-row input[type="submit"] {
  padding: 9px 20px;
  font-family: 'Sarabun', sans-serif;
  font-size: 0.9rem;
  font-weight: 700;
  color: #fff;
  background: #10b981;
  border: 1.5px solid #10b981;
  border-radius: 0 6px 6px 0;
  cursor: pointer;
  letter-spacing: 0.03em;
  transition: background 0.15s;
  white-space: nowrap;
}
.input-row input[type="submit"]:hover {
  background: #059669;
  border-color: #059669;
}

/* ── Result ── */
.result-heading {
  display: flex;
  align-items: baseline;
  gap: 8px;
  margin-bottom: 16px;
}

.result-heading .label {
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: #6ee7b7;
}

.result-heading .title {
  font-size: 1.15rem;
  font-weight: 700;
  color: #0f2d1f;
}

/* ── Table ── */
table {
  width: 100%;
  border-collapse: collapse;
  font-size: 0.97rem;
}

thead tr {
  background: #0f2d1f;
  color: #6ee7b7;
}

thead th {
  padding: 10px 18px;
  font-weight: 700;
  text-align: left;
  font-size: 0.78rem;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

thead th:first-child { border-radius: 6px 0 0 0; }
thead th:last-child  { border-radius: 0 6px 0 0; text-align: right; }

tbody tr {
  border-bottom: 1px solid #d1fae5;
  transition: background 0.1s;
}
tbody tr:last-child { border-bottom: none; }
tbody tr:nth-child(even) { background: #f0faf5; }
tbody tr:hover { background: #d1fae5; }

tbody td {
  padding: 10px 18px;
  color: #1f4a33;
  text-align: left;
}

tbody td:last-child {
  font-weight: 700;
  color: #065f46;
  text-align: right;
  font-size: 1.05rem;
}

/* row number badge */
tbody td:first-child {
  color: #6b7280;
  font-size: 0.88rem;
}
</style>
</head>
<body>
<div class="container">

  <div class="eyebrow">เครื่องมือคณิตศาสตร์</div>
  <h1>แม่สูตรคูณ</h1>

  <a href="index.php" class="nav-link">← For Loop</a>

  <form action="">
    <div class="form-group">
      <label for="num">กรอกแม่สูตรคูณ</label>
      <div class="input-row">
        <input type="number" name="num" id="num" min="1" placeholder="กรอกเลขแม่สูตรคูณ">
        <input type="submit" value="คำนวณ">
      </div>
    </div>
  </form>

  <?php if (isset($_GET["num"])): ?>
  <?php $num = $_GET["num"]; ?>

  <div class="result-heading">
    <span class="label">ผลลัพธ์</span>
    <span class="title">แม่ <?php echo $num; ?></span>
  </div>

  <table>
    <thead>
      <tr>
        <th>สูตร</th>
        <th>ผลลัพธ์</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1;
      while ($i <= 100)
      {
        echo "<tr>
          <td>{$num} &times; {$i}</td>
          <td>" . ($num * $i) . "</td>
        </tr>";
        $i++;
      }
      ?>
    </tbody>
  </table>

  <?php endif; ?>

</div>
</body>
</html>