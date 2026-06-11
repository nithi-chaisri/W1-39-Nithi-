<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>สูตรคูณ – For Loop</title>
  <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Sarabun', sans-serif;
      background: #fff1f2;
      min-height: 100vh;
      padding: 48px 40px;
      color: #2d0f15;
    }

    .container {
      max-width: 520px;
      margin: 0;
      background: #ffffff;
      border-radius: 10px;
      padding: 36px 36px 44px;
      border-left: 5px solid #e11d48;
      box-shadow: 4px 4px 0px #fecdd3;
    }

    .eyebrow {
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: #e11d48;
      margin-bottom: 6px;
    }

    h1 {
      font-size: 1.45rem;
      font-weight: 700;
      color: #2d0f15;
      margin-bottom: 4px;
      line-height: 1.3;
    }

    .subtitle {
      font-size: 0.82rem;
      color: #6b7280;
      margin-bottom: 28px;
    }

    .nav-link {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      font-size: 0.82rem;
      font-weight: 600;
      color: #be123c;
      text-decoration: none;
      margin-bottom: 24px;
      padding: 4px 0;
      border-bottom: 1.5px dashed #fda4af;
    }
    .nav-link:hover {
      color: #9f1239;
      border-bottom-style: solid;
    }

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
      max-width: 320px;
    }

    .input-row input[type="number"] {
      flex: 1;
      padding: 9px 14px;
      font-family: 'Sarabun', sans-serif;
      font-size: 1rem;
      color: #2d0f15;
      background: #fff1f2;
      border: 1.5px solid #fda4af;
      border-right: none;
      border-radius: 6px 0 0 6px;
      outline: none;
      transition: border-color 0.15s, background 0.15s;
    }
    .input-row input[type="number"]:focus {
      border-color: #e11d48;
      background: #fff;
    }

    .input-row input[type="submit"] {
      padding: 9px 20px;
      font-family: 'Sarabun', sans-serif;
      font-size: 0.9rem;
      font-weight: 700;
      color: #fff;
      background: #e11d48;
      border: 1.5px solid #e11d48;
      border-radius: 0 6px 6px 0;
      cursor: pointer;
      letter-spacing: 0.03em;
      transition: background 0.15s;
      white-space: nowrap;
    }
    .input-row input[type="submit"]:hover {
      background: #be123c;
      border-color: #be123c;
    }

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
      color: #fda4af;
    }
    .result-heading .title {
      font-size: 1.15rem;
      font-weight: 700;
      color: #2d0f15;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.97rem;
    }

    thead tr {
      background: #2d0f15;
      color: #fda4af;
    }
    thead th {
      padding: 10px 18px;
      font-weight: 700;
      font-size: 0.78rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      text-align: left;
    }
    thead th:first-child { border-radius: 6px 0 0 0; }
    thead th:last-child  { border-radius: 0 6px 0 0; text-align: right; }

    tbody tr {
      border-bottom: 1px solid #ffe4e6;
      transition: background 0.1s;
    }
    tbody tr:last-child { border-bottom: none; }
    tbody tr:nth-child(even) { background: #fff1f2; }
    tbody tr:hover { background: #ffe4e6; }

    tbody td {
      padding: 10px 18px;
      color: #4a1f28;
      text-align: left;
    }
    tbody td:first-child {
      color: #6b7280;
      font-size: 0.88rem;
    }
    tbody td:last-child {
      font-weight: 700;
      color: #5f0620;
      text-align: right;
      font-size: 1.05rem;
    }
  </style>
</head>
<body>
<div class="container">

  <div class="eyebrow">เครื่องมือคณิตศาสตร์</div>
  <h1>แม่สูตรคูณ</h1>
  <div class="subtitle">นิธิ ชัยศรี &nbsp;·&nbsp; BIT2/4 &nbsp;·&nbsp; เลขที่ 39</div>

  <a href="while.php" class="nav-link">→ While Loop</a>

  <form action="">
    <div class="form-group">
      <label for="num">กรอกแม่สูตรคูณ</label>
      <div class="input-row">
        <input type="number" name="num" id="num" min="1" placeholder="ใส่เลข">
        <input type="submit" value="คำนวณ">
      </div>
    </div>
  </form>

  <?php
    if(isset($_GET["num"])){
      $num = $_GET["num"];
  ?>

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
        for($i=1; $i<=12; $i++){
          echo "<tr>
            <td>{$num} &times; {$i}</td>
            <td>" . ($num * $i) . "</td>
          </tr>";
        }
      ?>
    </tbody>
  </table>

  <?php } ?>

</div>
</body>
</html>