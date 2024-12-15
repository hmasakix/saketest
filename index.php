<!DOCTYPE html>
<html lang="ja">
<head>  
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日本酒ブースト</title>
</head>
<body>
  <form action="create.php" method="POST">
    <fieldset>
      <legend>日本酒ブースト<span>入力画面</span></legend>
      <div>
        <p>店名</p>
        <input class="text" type="text" name="name">
      </div>
      <div>
        <p>エリア</p>
        <input class="text" type="text" name="area">
      </div>
      <div>
        <p>日本酒のおすすめの飲み方</p>
        <ul>
          <li><input type="radio" name="case" value="冷酒">冷酒</li>
          <li><input type="radio" name="case" value="燗酒">燗酒</li>
          <li><input type="radio" name="case" value="その他">その他</li>
        </ul>        
      </div>
      <div>
        <p>おすすめの日本酒</p>
        <textarea class="text" name="productname" rows="5" cols="33"></textarea>
      </div>
      <div class="btn">
        <button>送信</button>
      </div>
      <div class="btn">
        <a class="list-btn" href="read.php">一覧画面</a>
      </div>
    </fieldset>
  </form>
    
</body>
</html>