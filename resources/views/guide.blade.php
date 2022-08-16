<html>

<head>
    <title>神戸研究室 AR班</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.1.4/dist/mindar-image.prod.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.1.4/dist/mindar-image-aframe.prod.js"></script>
    <script src="https://binzume.github.io/aframe-vrm/dist/aframe-vrm.js"></script>
</head>

<body>
    <h2>音声認識サンプル</h2>
    <button id="btn">start</button>
    <div id="content"></div>

<script>

    //音声認識の準備
    const speech = new webkitSpeechRecognition();
    speech.lang = 'ja-JP';
    
    //使用する変数を用意
    const btn = document.getElementById('btn');
    const content = document.getElementById('content');
    
    
    btn.addEventListener('click' , function() {
        // 音声認識をスタート
        speech.start();
    });
    
    speech.addEventListener('result' , function(e) {
       // 音声認識で取得した情報を、コンソール画面に表示
       console.log(e);
    
        //---------------追記---------------//
        // 音声認識で取得した情報を、HTMLに表示
        const text = e.results[0][0].transcript;
        content.innerText = text;
        //--------------------------------//
    
    });
    
    </script>
<body>
<html>
