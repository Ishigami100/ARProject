<html>

<head>
    <title>神戸研究室 AR班</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.1.4/dist/mindar-image.prod.js"></script>
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.1.4/dist/mindar-image-aframe.prod.js"></script>
    <script src='https://unpkg.com/@turf/turf@6/turf.min.js'></script>
</head>

<style type="text/css">
#button{
  z-index: 9999;
  position: fixed;
  top: 0px;
  left: 0px;
}

</style>

<body>

    <button id="button" onclick="request_permission()">このエリアを押して モーションの利用を許可してください (iOS 13+) </button>
    <!-- ※1 a-scene に mindar-image 属性を追加しマーカーファイル（.mindファイル）のパスを記載-->
    <a-scene mindar-image="imageTargetSrc: ./web_img/compass/targets.mind;" color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">
        <a-assets>
            <a-asset-item id="avatarModel" src="./web_img/compass/obj/tinker.obj"></a-asset-item>
            <a-asset-item id="crate-mtl" src="./web_img/compass/obj/obj.mtl"></a-asset-item>

        </a-assets>
        <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>
        <!-- ※2 mindar-image-target 属性をつけることでマーカーと対応するentityを作れる -->
        <a-entity mindar-image-target="targetIndex: 0">
            <a-plane src="#card" position="0 0.75 0" height="0.2" width="1" rotation="0 0 0"></a-plane>
            <a-text id="word" value="Welcome to Kambe-Lab!!\n straight-line distance:" position="-0.5 0.75 0" height="0.21" width="1" rotation="0 0 0" color="#000000"></a-text>
            <a-obj-model visible="true" id="model" src="#avatarModel" mtl="#crate-mtl" rotation="0 0 0" position="0 0 0" scale="0.006 0.006 0.006"></a-obj-model>
        </a-entity>
    </a-scene>

    <script>
var alpha = 0, beta = 0, gamma = 0;   
var rad=0;
var length=0;          // ジャイロの値を入れる変数を3個用意
function request_permission(){
     if (
         DeviceMotionEvent &&
         DeviceMotionEvent.requestPermission &&
         typeof DeviceMotionEvent.requestPermission === 'function'
     ) {
         DeviceMotionEvent.requestPermission();
     }
     if (
         DeviceOrientationEvent &&
         DeviceOrientationEvent.requestPermission &&
         typeof DeviceOrientationEvent.requestPermission === 'function'
     ) {
         DeviceOrientationEvent.requestPermission();
     }
}

// ジャイロセンサの値が変化したら実行される deviceorientation イベント
window.addEventListener("deviceorientation", (dat) => {
    alpha = dat.alpha;  // z軸（表裏）まわりの回転の角度（反時計回りがプラス）
    beta  = dat.beta;   // x軸（左右）まわりの回転の角度（引き起こすとプラス）
    gamma = dat.gamma;  // y軸（上下）まわりの回転の角度（右に傾けるとプラス）
    change_position();
});

        var R_EARTH = 6378137; // 地球の赤道半径
        const R = Math.PI / 180;

        //位置情報取得時の関数
        function success(position) {
            //console上に表示
            console.log("緯度:" + position.coords.latitude);
            console.log("経度:" + position.coords.longitude);

            //現在地
            let latitude_departure = position.coords.latitude;
            let longitude_departure = position.coords.longitude;

            //神戸研究室の位置情報
            let latitude_arrival = 35.98587585838652;
            let longitude_arrival = 139.37184706547475;

            //距離と方角の計算
            length = distance(latitude_departure, longitude_departure, latitude_arrival, longitude_arrival);
            rad = azimuth(latitude_departure, longitude_departure, latitude_arrival, longitude_arrival);
            //距離と方角を計算した上で、矢印と表示の変更
            change_position();
        }

        //位置情報取得失敗
        function error() {
            document.write("位置情報の取得に失敗しました。お手持ちの端末の位置情報設定をONにしてください");
            return 0;
        }

        //距離を測定する関数
        function distance(lat1, lng1, lat2, lng2) {
            lat1 *= R;
            lng1 *= R;
            lat2 *= R;
            lng2 *= R;
            return 6371 * Math.acos(Math.cos(lat1) * Math.cos(lat2) * Math.cos(lng2 - lng1) + Math.sin(lat1) * Math.sin(lat2));
        }

        // 2点間の方位角を求める関数
        function azimuth(lat2, lon2, lat1, lon1) {

            //各地点の座標
            var point1 = turf.point([lat1, lon1]);
            var point2 = turf.point([lat2, lon2]);

            //角度計算
            var bearing = turf.bearing(point1, point2);
            return bearing;
        }

        //矢印の方向の変更を行う
        function change_position() {

            //方角を矢印の回り方に合わせて変換
            if(rad<0){
                rad2=360+rad;
            }
            else{
                rad2=rad;
            }

            if(rad<=parseInt(alpha)){
                rad2=parseInt(alpha)-rad;
            }else{
                rad2=360-(rad-parseInt(alpha));
            }

            if(rad2>360)rad2-=360;
            rad2=360-rad2;

            // Entityを取得
            var el = document.querySelector('#model');
            console.log(el.getAttribute('rotation'));

            //矢印の方向の変更
            el.setAttribute('rotation', {
                x: 0,
                y: 0,
                z: rad2
            });
            console.log(el.getAttribute('rotation'));


            //文字列の変更
            var str = "Welcome to Kambe-Lab!!\n straight-line distance:" + String(length.toFixed(3)) + "km";
            console.log(str);
            // Entityを取得
            var el2 = document.querySelector('#word');
            el2.setAttribute('value', str);
            console.log(el2.getAttribute('value'));
        }
        navigator.geolocation.watchPosition(success, error);
    </script>
</body>

</html>