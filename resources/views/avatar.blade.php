<html>

<head>
    <title>神戸研究室 AR班</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.1.4/dist/mindar-image.prod.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.1.4/dist/mindar-image-aframe.prod.js"></script>
    <script src='https://unpkg.com/@turf/turf@6/turf.min.js'></script>
    <script src="https://binzume.github.io/aframe-vrm/dist/aframe-vrm.js"></script>
</head>

<body>
    <!-- ※1 a-scene に mindar-image 属性を追加しマーカーファイル（.mindファイル）のパスを記載-->
    <a-scene mindar-image="imageTargetSrc: ./voice/targets.mind;" color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">
        <a-assets timeout="20000">
            <audio id="audio01" src="./voice/19rd184.mp3" preload="auto"></audio>

        </a-assets>
        <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>
        <!-- ※2 mindar-image-target 属性をつけることでマーカーと対応するentityを作れる -->
        <a-entity mindar-image-target="targetIndex: 0">
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-sound id="my_sound01" src="#audio01" position="0 0 0" autoplay="true" loop="false"></a-sound>
        </a-entity>
    </a-scene>

</body>

</html>