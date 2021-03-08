<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>じゃんけんゲーム</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="wrapper">
    <header>
      <div class="header-logo">じゃんけんゲーム</div>
    </header>
    <main>
      <h1>じゃんけん</h1>
      出す手を選んで勝負してください！
      <div class="form-box">
        <form action="../php/side.php" method="POST">
          <label>
            <input type="radio" title="playerhand" name="playerhand" value="グー" checked>グー
          </label>
          <label>
            <input type="radio" title="playerhand" name="playerhand" value="チョキ">チョキ
          </label>
          <label>
            <input type="radio" title="playerhand" name="playerhand" value="パー">パー
          </label>
          <button type="submit" class="battle-button">勝負する！</button>
        </form>
      </div>
    </main>
    <footer>
      <small>
        <p>&copy;furacoco</p>
      </small>
    </footer>
  </div>
</body>

</html>