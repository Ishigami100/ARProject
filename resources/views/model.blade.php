<html>

<head>
    <title>神戸研究室 AR班</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.1.4/dist/mindar-image.prod.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.1.4/dist/mindar-image-aframe.prod.js"></script>
    <script src='https://unpkg.com/@turf/turf@6/turf.min.js'></script>
</head>

<body>
    <!-- ※1 a-scene に mindar-image 属性を追加しマーカーファイル（.mindファイル）のパスを記載-->
    <a-scene mindar-image="imageTargetSrc: ./model/targets.mind;" color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">
        <a-assets timeout="20000">
            <a-asset-item id="avatarModel" src="./model/hatoyama3d_ver3/tdu_hatoyama.obj"></a-asset-item>
            <a-asset-item id="crate-mtl" src="./model/hatoyama3d_ver3/tdu_hatoyama.mtl"></a-asset-item>

        </a-assets>
        <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>
        <!-- ※2 mindar-image-target 属性をつけることでマーカーと対応するentityを作れる -->
        <a-entity mindar-image-target="targetIndex: 0">
            <a-obj-model visible="true" id="model" src="#avatarModel" mtl="#crate-mtl" rotation="0 0 0" position="0 0 0" scale="0.004 0.004 0.004"></a-obj-model>
        </a-entity>
    </a-scene>

</body>

</html>
