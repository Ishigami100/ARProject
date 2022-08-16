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
    <!-- ※1 a-scene に mindar-image 属性を追加しマーカーファイル（.mindファイル）のパスを記載-->
     <a-scene mindar-image="imageTargetSrc: ./web_img/model/targets.mind;" color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">
      <!--<a-assets timeout="1000">
      </a-assets>-->
          <!-- ※1 a-scene に mindar-image 属性を追加しマーカーファイル（.mindファイル）のパスを記載-->
      <a-camera position="0 0 0" look-controls="enabled: false" cursor="fuse: false; rayOrigin: mouse;" raycaster="far: 10000; objects: .clickable"></a-camera>
        <!-- ※2 mindar-image-target 属性をつけることでマーカーと対応するentityを作れる -->
         <a-entity mindar-image-target="targetIndex: 0">
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
          <a-plane id="Button1" class="clickable" color="white" opaciy="0.5" position="0.4 1.0 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
          <a-text id="word" value="workshop" position="0.15 1.0 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
          <a-plane id="Button2" class="clickable" color="white" opaciy="0.5" position="0.4 0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
          <a-text id="word" value="RD" position="0.15 0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
          <a-plane id="Button3" class="clickable" color="white" opaciy="0.5" position="0.4 0.0 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
          <a-text id="word" value="Kambe-Lab" position="0.15 0.0 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>

        <a-entity cursor="rayOrigin: mouse" id="cursor" fuse="true" fuse-timeout="1000" design="ring"   > </a-entity>
    </a-scene>

    <audio id=my_sound01 src="./voice2/voice1.wav" ></audio>
    <audio id=my_sound02 src="./voice2/voice2.wav" ></audio>
    <audio id=my_sound03 src="./voice2/voice3.wav"  ></audio>

    <script type="text/javascript">

    document.addEventListener("DOMContentLoaded", function() {

    const Button1 = document.querySelector('#Button1');
    const Button2 = document.querySelector('#Button2');
    const Button3 = document.querySelector('#Button3');

    var sound01 =document.getElementById("my_sound01");
    var sound02 =document.getElementById("my_sound02");
    var sound03 =document.getElementById("my_sound03");

    Button1.addEventListener("click", event => {
        console.log("plane click");
        sound01.play();
    });
    Button2.addEventListener("click", event => {
        console.log("plane click");
        sound02.play();
    });
    Button3.addEventListener("click", event => {
        console.log("plane click");
        sound03.play();
    });
});

</script>
</body>


</html>