<html>

<head>
    <title>神戸研究室 AR班</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.1.4/dist/mindar-image.prod.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.1.4/dist/mindar-image-aframe.prod.js"></script>
</head>

<body>
    <!-- ※1 a-scene に mindar-image 属性を追加しマーカーファイル（.mindファイル）のパスを記載-->
     <a-scene mindar-image="imageTargetSrc: ./web_img/model/targets.mind;" color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">
        <a-assets timeout="40000">
            <!--<a-asset-item id="avatarModel" src="./web_img/model/odm_texturing/odm_textured_model_geo.obj"></a-asset-item>
            <a-asset-item id="crate-mtl" src="./web_img/model/odm_texturing/odm_textured_model_geo.mtl"></a-asset-item>-->
             <!--<a-asset-item id="avatarModel" src="./web_img/model/3d_obj4/odm_textured_model_geo.obj"></a-asset-item>
            <a-asset-item id="crate-mtl" src="./web_img/model/3d_obj4/odm_textured_model_geo.mtl"></a-asset-item>-->
            <a-asset-items id="model" src="./web_img/model/hatoyama3dmodel6.glb" ></a-asset-items>
        </a-assets>
        <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>
        <!-- ※2 mindar-image-target 属性をつけることでマーカーと対応するentityを作れる -->
         <a-entity mindar-image-target="targetIndex: 0">
            <a-entity gltf-model="#model" scale="0.001 0.001 0.001"></a-entity>
            <!--<a-obj-model visible="true" id="model" src="#avatarModel"rotation="0 0 0" position="0 0 0" scale="0.004 0.004 0.004"></a-obj-model>-->
        </a-entity>
    </a-scene>

</body>

</html>
