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
    <a-scene mindar-image="imageTargetSrc: ./voice/targets.mind;" color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">
        <a-camera position="0 0 0" look-controls="enabled: false" cursor="fuse: false; rayOrigin: mouse;" raycaster="far: 10000; objects: .clickable"></a-camera>
        <a-entity mindar-image-target="targetIndex: 0"><!--19rd002-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton1" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton1" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 1"><!--19rd005-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton2" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton2" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 2"><!--19rd102-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton3" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton3" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 3"><!--19rd110-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton4" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton4" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 4"><!--19rd113-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton5" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton5" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 6"><!--19rd116-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton6" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton6" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 6"><!--19rd126-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton7" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton7" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 7"><!--19rd129--> 
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton8" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton8" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 8"><!--19rd136-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton9" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton9" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 9"><!--19rd147-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton10" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton10" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 10"><!--19rd154--> 
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton11" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton11" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 11"><!--19rd184--> 
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton12" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton12" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 12"><!--19rd195--> 
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton13" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton13" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 13"><!--21rmd03-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton14" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton14" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 14"><!--21rmd05-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton15" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton15" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 15"><!--21rmd09-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton16" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton16" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 16"><!--21rmd14-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton17" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton17" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 17"><!--21rmd15-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton18" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton18" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 18"><!--21rmd19-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton19" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton19" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 19"><!--21rmd021-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton20" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton20" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 20"><!--21rmd22-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton21" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton21" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 21"><!--21rmd28-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton22" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton22" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 22"><!--21rmd36-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton23" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton23" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 23"><!--21rmd38-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton24" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton24" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 24"><!--22rmd06-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton25" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton25" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 25"><!--22rmd07-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton26" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton26" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 26"><!--22rmd10-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton27" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton27" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 27"><!--22rmd12-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton28" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton28" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 28"><!--22rmd20-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton29" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton29" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 29"><!--22rmd22-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton30" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton30" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 30"><!--22rmd29-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton31" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton31" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 31"><!--22rmd33-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton32" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton32" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 32"><!--22rmd35-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton33" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton33" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity mindar-image-target="targetIndex: 33"><!--22rmd37-->
            <a-entity vrm="src:./voice/ずんだもんVRM.vrm" vrm-anim="" rotation="0 180 0"></a-entity>
            <a-plane id="startButton34" class="clickable" color="white" opaciy="0.5" position="0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="start" position="0.3 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
            <a-plane id="stopButton34" class="clickable" color="white" opaciy="0.5" position="-0.4 -0.5 0" height="0.2" width="0.5" rotation="0 0 0"></a-plane>
            <a-text id="word" value="stop" position="-0.5 -0.5 0" height="0.8" width="2.0" rotation="0 0 0" color="#000000"></a-text>
        </a-entity>
        <a-entity cursor="rayOrigin: mouse" id="cursor"

		    fuse="true" fuse-timeout="1000"
			design="ring"
				>
      </a-entity> <!-- /cursor -->
    </a-scene>

    <audio id=my_sound01 src="./voice/voice_member/19rd002.mp3" ></audio>
    <audio id=my_sound02 src="./voice/voice_member/19rd005.mp3" ></audio>
    <audio id=my_sound03 src="./voice/voice_member/19rd102.mp3"  ></audio>
    <audio id=my_sound04 src="./voice/voice_member/19rd110.mp3"  ></audio>
    <audio id=my_sound05 src="./voice/voice_member/19rd113.mp3"  ></audio>
    <audio id=my_sound06 src="./voice/voice_member/19rd116.mp3"  ></audio>
    <audio id=my_sound07 src="./voice/voice_member/19rd126.mp3"  ></audio>
    <audio id=my_sound08 src="./voice/voice_member/19rd129.mp3"  ></audio>
    <audio id=my_sound09 src="./voice/voice_member/19rd136.mp3"  ></audio>
    <audio id=my_sound10 src="./voice/voice_member/19rd147.mp3"  ></audio>
    <audio id=my_sound11 src="./voice/voice_member/19rd154.mp3"  ></audio>
    <audio id=my_sound12 src="./voice/voice_member/19rd184.mp3"  ></audio>
    <audio id=my_sound13 src="./voice/voice_member/19rd195.mp3"  ></audio>
    <audio id=my_sound14 src="./voice/voice_member/21rmd03.mp3"  ></audio>
    <audio id=my_sound15 src="./voice/voice_member/21rmd05.mp3"  ></audio>
    <audio id=my_sound16 src="./voice/voice_member/21rmd09.mp3"  ></audio>
    <audio id=my_sound17 src="./voice/voice_member/21rmd14.mp3"  ></audio>
    <audio id=my_sound18 src="./voice/voice_member/21rmd15.mp3"  ></audio>
    <audio id=my_sound19 src="./voice/voice_member/21rmd19.mp3"  ></audio>
    <audio id=my_sound20 src="./voice/voice_member/21rmd21.mp3"  ></audio>
    <audio id=my_sound21 src="./voice/voice_member/21rmd22.mp3"  ></audio>
    <audio id=my_sound22 src="./voice/voice_member/21rmd28.mp3"  ></audio>
    <audio id=my_sound23 src="./voice/voice_member/21rmd36.mp3"  ></audio>
    <audio id=my_sound24 src="./voice/voice_member/21rmd38.mp3"  ></audio>
    <audio id=my_sound25 src="./voice/voice_member/22rmd06.mp3"  ></audio>
    <audio id=my_sound26 src="./voice/voice_member/22rmd07.mp3"  ></audio>
    <audio id=my_sound27 src="./voice/voice_member/22rmd10.mp3"  ></audio>
    <audio id=my_sound28 src="./voice/voice_member/22rmd12.mp3"  ></audio>
    <audio id=my_sound29 src="./voice/voice_member/22rmd20.mp3"  ></audio>
    <audio id=my_sound30 src="./voice/voice_member/22rmd22.mp3"  ></audio>
    <audio id=my_sound31 src="./voice/voice_member/22rmd29.mp3"  ></audio>
    <audio id=my_sound32 src="./voice/voice_member/22rmd33.mp3"  ></audio>
    <audio id=my_sound33 src="./voice/voice_member/22rmd35.mp3"  ></audio>
    <audio id=my_sound34 src="./voice/voice_member/22rmd37.mp3" ></audio>

  <script type="text/javascript">

  document.addEventListener("Load", function() {
	const sceneEl = document.querySelector('a-scene');
    const startButton1 = document.querySelector('#startButton1');
    const stopButton1 = document.querySelector('#stopButton1');
    const startButton2 = document.querySelector('#startButton2');
    const stopButton2 = document.querySelector('#stopButton2');
    const startButton3 = document.querySelector('#startButton3');
    const stopButton3 = document.querySelector('#stopButton3');
    const startButton4 = document.querySelector('#startButton4');
    const stopButton4 = document.querySelector('#stopButton4');
    const startButton5 = document.querySelector('#startButton5');
    const stopButton5 = document.querySelector('#stopButton5');
    const startButton6 = document.querySelector('#startButton6');
    const stopButton6 = document.querySelector('#stopButton6');
    const startButton7 = document.querySelector('#startButton7');
    const stopButton7 = document.querySelector('#stopButton7');
    const startButton8 = document.querySelector('#startButton8');
    const stopButton8 = document.querySelector('#stopButton8');
    const startButton9 = document.querySelector('#startButton9');
    const stopButton9 = document.querySelector('#stopButton9');
    const startButton10 = document.querySelector('#startButton10');
    const stopButton10 = document.querySelector('#stopButton10');
    const startButton11 = document.querySelector('#startButton11');
    const stopButton11 = document.querySelector('#stopButton11');
    const startButton12 = document.querySelector('#startButton12');
    const stopButton12 = document.querySelector('#stopButton12');
    const startButton13 = document.querySelector('#startButton13');
    const stopButton13 = document.querySelector('#stopButton13');
    const startButton14 = document.querySelector('#startButton14');
    const stopButton14 = document.querySelector('#stopButton14');
    const startButton15 = document.querySelector('#startButton15');
    const stopButton15 = document.querySelector('#stopButton15');
    const startButton16 = document.querySelector('#startButton16');
    const stopButton16 = document.querySelector('#stopButton16');
    const startButton17 = document.querySelector('#startButton17');
    const stopButton17 = document.querySelector('#stopButton17');
    const startButton18 = document.querySelector('#startButton18');
    const stopButton18 = document.querySelector('#stopButton18');
    const startButton19 = document.querySelector('#startButton19');
    const stopButton19 = document.querySelector('#stopButton19');
    const startButton20 = document.querySelector('#startButton20');
    const stopButton20 = document.querySelector('#stopButton20');
    const startButton21 = document.querySelector('#startButton21');
    const stopButton21 = document.querySelector('#stopButton21');
    const startButton22 = document.querySelector('#startButton22');
    const stopButton22 = document.querySelector('#stopButton22');
    const startButton23 = document.querySelector('#startButton23');
    const stopButton23 = document.querySelector('#stopButton23');
    const startButton24 = document.querySelector('#startButton24');
    const stopButton24 = document.querySelector('#stopButton24');
    const startButton25 = document.querySelector('#startButton25');
    const stopButton25 = document.querySelector('#stopButton25');
    const startButton26 = document.querySelector('#startButton26');
    const stopButton26 = document.querySelector('#stopButton26');
    const startButton27 = document.querySelector('#startButton27');
    const stopButton27 = document.querySelector('#stopButton27');
    const startButton28 = document.querySelector('#startButton28');
    const stopButton28 = document.querySelector('#stopButton28');
    const startButton29 = document.querySelector('#startButton29');
    const stopButton29 = document.querySelector('#stopButton29');
    const startButton30 = document.querySelector('#startButton30');
    const stopButton30 = document.querySelector('#stopButton30');
    const startButton31 = document.querySelector('#startButton31');
    const stopButton31 = document.querySelector('#stopButton31');
    const startButton32 = document.querySelector('#startButton32');
    const stopButton32 = document.querySelector('#stopButton32');
    const startButton33 = document.querySelector('#startButton33');
    const stopButton33 = document.querySelector('#stopButton33');
    const startButton34 = document.querySelector('#startButton34');
    const stopButton34 = document.querySelector('#stopButton34');

    
	var sound01 =document.getElementById("my_sound01");
    var sound02 =document.getElementById("my_sound02");
    var sound03 =document.getElementById("my_sound03");
    var sound04 =document.getElementById("my_sound04");
    var sound05 =document.getElementById("my_sound05");
    var sound06 =document.getElementById("my_sound06");
    var sound07 =document.getElementById("my_sound07");
    var sound08 =document.getElementById("my_sound08");
    var sound09 =document.getElementById("my_sound09");
    var sound10 =document.getElementById("my_sound10");
    var sound11 =document.getElementById("my_sound11");
    var sound12 =document.getElementById("my_sound12");
    var sound13 =document.getElementById("my_sound13");
    var sound14 =document.getElementById("my_sound14");
    var sound15 =document.getElementById("my_sound15");
    var sound16 =document.getElementById("my_sound16");
    var sound17 =document.getElementById("my_sound17");
    var sound18 =document.getElementById("my_sound18");
    var sound19 =document.getElementById("my_sound19");
    var sound20 =document.getElementById("my_sound20");
    var sound21 =document.getElementById("my_sound21");
    var sound22 =document.getElementById("my_sound22");
    var sound23 =document.getElementById("my_sound23");
    var sound24 =document.getElementById("my_sound24");
    var sound25 =document.getElementById("my_sound25");
    var sound26 =document.getElementById("my_sound26");
    var sound27 =document.getElementById("my_sound27");
    var sound28 =document.getElementById("my_sound28");
    var sound29 =document.getElementById("my_sound29");
    var sound30 =document.getElementById("my_sound30");
    var sound31 =document.getElementById("my_sound31");
    var sound32 =document.getElementById("my_sound32");
    var sound33 =document.getElementById("my_sound33");
    var sound34 =document.getElementById("my_sound34");
    

    startButton1.addEventListener("click", event => {
        console.log("plane click");
        sound01.play();
    });
    stopButton1.addEventListener("click", event => {
        console.log("plane click");
        sound01.pause();
    });
    startButton2.addEventListener("click", event => {
        console.log("plane click");
        sound02.play();
    });
    stopButton2.addEventListener("click", event => {
        console.log("plane click");
        sound02.pause();
    });
    startButton3.addEventListener("click", event => {
        console.log("plane click");
        sound03.play();
    });
    stopButton3.addEventListener("click", event => {
        console.log("plane click");
        sound03.pause();
    });
    startButton4.addEventListener("click", event => {
        console.log("plane click");
        sound04.play();
    });
    stopButton4.addEventListener("click", event => {
        console.log("plane click");
        sound04.pause();
    });
    startButton5.addEventListener("click", event => {
        console.log("plane click");
        sound05.play();
    });
    stopButton5.addEventListener("click", event => {
        console.log("plane click");
        sound05.pause();
    });
    startButton6.addEventListener("click", event => {
        console.log("plane click");
        sound06.play();
    });
    stopButton6.addEventListener("click", event => {
        console.log("plane click");
        sound06.pause();
    });
    startButton7.addEventListener("click", event => {
        console.log("plane click");
        sound07.play();
    });
    stopButton7.addEventListener("click", event => {
        console.log("plane click");
        sound07.pause();
    });
    startButton8.addEventListener("click", event => {
        console.log("plane click");
        sound08.play();
    });
    stopButton8.addEventListener("click", event => {
        console.log("plane click");
        sound08.pause();
    });
    startButton9.addEventListener("click", event => {
        console.log("plane click");
        sound09.play();
    });
    stopButton9.addEventListener("click", event => {
        console.log("plane click");
        sound09.pause();
    });
    startButton10.addEventListener("click", event => {
        console.log("plane click");
        sound10.play();
    });
    stopButton10.addEventListener("click", event => {
        console.log("plane click");
        sound10.pause();
    });
    startButton11.addEventListener("click", event => {
        console.log("plane click");
        sound11.play();
    });
    stopButton11.addEventListener("click", event => {
        console.log("plane click");
        sound11.pause();
    });
    startButton12.addEventListener("click", event => {
        console.log("plane click");
        sound12.play();
    });
    stopButton12.addEventListener("click", event => {
        console.log("plane click");
        sound12.pause();
    });
    startButton13.addEventListener("click", event => {
        console.log("plane click");
        sound13.play();
    });
    stopButton13.addEventListener("click", event => {
        console.log("plane click");
        sound13.pause();
    });
    startButton14.addEventListener("click", event => {
        console.log("plane click");
        sound14.play();
    });
    stopButton14.addEventListener("click", event => {
        console.log("plane click");
        sound14.pause();
    });
    startButton15.addEventListener("click", event => {
        console.log("plane click");
        sound15.play();
    });
    stopButton15.addEventListener("click", event => {
        console.log("plane click");
        sound15.pause();
    });
    startButton16.addEventListener("click", event => {
        console.log("plane click");
        sound16.play();
    });
    stopButton16.addEventListener("click", event => {
        console.log("plane click");
        sound16.pause();
    });
    startButton17.addEventListener("click", event => {
        console.log("plane click");
        sound17.play();
    });
    stopButton17.addEventListener("click", event => {
        console.log("plane click");
        sound17.pause();
    });
    startButton18.addEventListener("click", event => {
        console.log("plane click");
        sound18.play();
    });
    stopButton18.addEventListener("click", event => {
        console.log("plane click");
        sound18.pause();
    });
    startButton19.addEventListener("click", event => {
        console.log("plane click");
        sound19.play();
    });
    stopButton19.addEventListener("click", event => {
        console.log("plane click");
        sound19.pause();
    });
    startButton20.addEventListener("click", event => {
        console.log("plane click");
        sound20.play();
    });
    stopButton20.addEventListener("click", event => {
        console.log("plane click");
        sound20.pause();
    });
    startButton21.addEventListener("click", event => {
        console.log("plane click");
        sound21.play();
    });
    stopButton21.addEventListener("click", event => {
        console.log("plane click");
        sound21.pause();
    });
    startButton22.addEventListener("click", event => {
        console.log("plane click");
        sound22.play();
    });
    stopButton22.addEventListener("click", event => {
        console.log("plane click");
        sound22.pause();
    });
    startButton23.addEventListener("click", event => {
        console.log("plane click");
        sound23.play();
    });
    stopButton23.addEventListener("click", event => {
        console.log("plane click");
        sound23.pause();
    });
    startButton24.addEventListener("click", event => {
        console.log("plane click");
        sound24.play();
    });
    stopButton24.addEventListener("click", event => {
        console.log("plane click");
        sound24.pause();
    });
    startButton25.addEventListener("click", event => {
        console.log("plane click");
        sound25.play();
    });
    stopButton25.addEventListener("click", event => {
        console.log("plane click");
        sound25.pause();
    });
    startButton26.addEventListener("click", event => {
        console.log("plane click");
        sound26.play();
    });
    stopButton26.addEventListener("click", event => {
        console.log("plane click");
        sound26.pause();
    });
    startButton27.addEventListener("click", event => {
        console.log("plane click");
        sound27.play();
    });
    stopButton27.addEventListener("click", event => {
        console.log("plane click");
        sound27.pause();
    });
    startButton28.addEventListener("click", event => {
        console.log("plane click");
        sound28.play();
    });
    stopButton28.addEventListener("click", event => {
        console.log("plane click");
        sound28.pause();
    });
    startButton29.addEventListener("click", event => {
        console.log("plane click");
        sound29.play();
    });
    stopButton29.addEventListener("click", event => {
        console.log("plane click");
        sound29.pause();
    });
    startButton30.addEventListener("click", event => {
        console.log("plane click");
        sound30.play();
    });
    stopButton30.addEventListener("click", event => {
        console.log("plane click");
        sound30.pause();
    });
    startButton31.addEventListener("click", event => {
        console.log("plane click");
        sound31.play();
    });
    stopButton31.addEventListener("click", event => {
        console.log("plane click");
        sound31.pause();
    });
    startButton31.addEventListener("click", event => {
        console.log("plane click");
        sound31.play();
    });
    stopButton31.addEventListener("click", event => {
        console.log("plane click");
        sound31.pause();
    });
    startButton32.addEventListener("click", event => {
        console.log("plane click");
        sound30.play();
    });
    stopButton32.addEventListener("click", event => {
        console.log("plane click");
        sound30.pause();
    });
    startButton33.addEventListener("click", event => {
        console.log("plane click");
        sound30.play();
    });
    stopButton33.addEventListener("click", event => {
        console.log("plane click");
        sound30.pause();
    });
    startButton34.addEventListener("click", event => {
        console.log("plane click");
        sound30.play();
    });
    stopButton34.addEventListener("click", event => {
        console.log("plane click");
        sound30.pause();
    });
    });

        </script>

</body>

</html>