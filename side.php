<?php
$hands = ['グー', 'チョキ', 'パー'];
if (isset($_POST['playerhand'])) {
  $playerhand = $_POST['playerhand'];
  $key = array_rand($hands);
  $pchand = $hands[$key];
  if ($playerhand == $pchand) {
    $result = 'あいこ';
  } elseif ($playerhand == 'グー' && $pchand == 'チョキ') {
    $result = '勝ち';
  } elseif ($playerhand == 'チョキ' && $pchand == 'パー') {
    $result = '勝ち';
  } elseif ($playerhand == 'パー' && $pchand == 'グー') {
    $result = '勝ち';
  } else {
    $result = '負け';
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf8">
  <title>じゃんけん</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="wrapper">
    <header>
      <div class="header-logo">じゃんけんゲーム</div>
    </header>
    <main>
      <h1>結果は・・・</h1>
      <div class="result-box">
        <p class="result-word"><?= $result ?>！</p>

        あなた：<?= $playerhand ?><br>
        コンピューター：<?= $pchand ?><br>

        <p><a class="red" href="/じゃんけんゲーム/php/battle.php">>>もう一回勝負する</a></p>
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