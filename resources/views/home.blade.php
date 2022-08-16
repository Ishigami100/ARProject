<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{secure_asset('css/style.css') }}">
        <title>AR神戸研　HOME</title>
    </head>
  <body>
    <!-- Header -->
    <header class="header">
        <div class="navtext-container">
          <div class="navtext">AR神戸研</div>
        </div>

        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon"><span class="navicon"></span></label>
        <ul class="menu">
          <li class="top"><a href="https://www.kamlab-ninja-map.com">home</a></li>
          <li><a href="https://www.kamlab-ninja-map.com/compass">Compass</a></li>
          <li><a href="https://www.kamlab-ninja-map.com/model">model</a></li>-->
          <li><a href="https://www.kamlab-ninja-map.com/poster">Poster</a></li>
          <li><a href="https://www.kamlab-ninja-map.com/explain">Avatar</a></li>
        </ul>
      </header>
      
      <main>
        <p class="title">ようこそ　AR神戸研へ!!</p>
        <p>AR神戸研(ARナビゲーションシステム)は、各サイトにアクセスした後、特定画像を写すことによりコンテンツを映しだすシステムです。</p>
      </main>

      <div class="grid-parent">
        <div class="child1">
          <p>コンパス機能</p>
          <p>機能</p>
          <p>下記のボタンからサイトにアクセスし、オープンキャンパスマップの地図を読み取ると<p>
            <p>ARで神戸研究室まで直線距離と方角を表示します。</p>
              <p>(パソコンからでも使用することができます。)</p>
                <p>※注意事項</p>
                  <p>・使う際は必ず位置情報をONにして使ってください。</p>
                    <p>・サイトにアクセスした後、カメラを許可してください。</p>
                      <p>・方角を示す場合は必ず歩きながら使用してください。</p>
                      <button type="button"onclick="location.href='https://www.kamlab-ninja-map.com/compass'">コンパス機能へ</button>
        </div>
        <div class="child2">
        <p>鳩山キャンパス3dモデル機能</p>
        <p>機能</p>
        <p>下記のボタンからサイトにアクセスし、オープンキャンパスマップの地図を読み取ると<p>
          <p>ARで鳩山キャンパスの3dモデルが表示されます。</p>
            <p>(パソコンからでも使用することができます。)</p>
              <p>※注意事項</p>
              <p>・サイトにアクセスした後、カメラを許可してください。</p>
                    <button type="button"onclick="location.href='https://www.kamlab-ninja-map.com/model'">3dモデル機能へ</button>
        </div>
        <div class="child3">
          <p>ポスター音声機能</p>
          <p>機能</p>
          <p>下記のボタンからサイトにアクセスし、神戸研究室に飾られているポスターを読み取ると<p>
            <p>ARでスタート、ストップボタンが表示され、押すと各ポスターの音声が流れます。</p>
              <p>(パソコンからでも使用することができます。)</p>
                <p>※注意事項</p>
                <p>・サイトにアクセスした後、カメラを許可してください。</p>
                <button type="button"onclick="location.href='https://www.kamlab-ninja-map.com/poster'">ポスター音声機能へ</button>
        </div>
        <div class="child4">
          <p>アバター案内機能</p>
          <p>機能</p>
          <p>下記のボタンからサイトにアクセスし、オープンキャンパスマップの地図を読み取ると<p>
            <p>アバターとボタンがARで表示され、ボタンを押すと案内アナウンスが流れます。</p>
              <p>(パソコンからでも使用することができます。)</p>
                <p>※注意事項</p>
                <p>・サイトにアクセスした後、カメラを許可してください。</p>
                <button type="button"onclick="location.href='https://www.kamlab-ninja-map.com/explain'">アバター案内機能へ</button>
        </div>
      </div>

      <!-- footer -->
   <footer>
    　アンケートにご協力ください。
    <button type="button"onclick="location.href='https://forms.gle/dqBYki2QWNmtinyS9'">アンケートへ</button>
  </footer>
</body>
</html>
