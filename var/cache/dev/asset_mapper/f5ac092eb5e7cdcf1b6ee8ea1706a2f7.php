O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:92:"C:\Users\skonb\Desktop\symfony\my_project_directory\assets\build\assets\css\nucleo-icons.css";s:10:"publicPath";s:74:"/assets/build/assets/css/nucleo-icons-f40679a8bdbab7a6168a9f1cbdb1d65b.css";s:23:"publicPathWithoutDigest";s:41:"/assets/build/assets/css/nucleo-icons.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:9019:"/*--------------------------------

hermes-dashboard-icons Web Font - built using nucleoapp.com
License - nucleoapp.com/license/

-------------------------------- */
@font-face {
  font-family: 'NucleoIcons';
  src: url("../fonts/nucleo-icons-34845e4a850e92747ab07cbdc1569d60.eot");
  src: url("../fonts/nucleo-icons-34845e4a850e92747ab07cbdc1569d60.eot") format('embedded-opentype'), url("../fonts/nucleo-icons-979fb650af3d1ae251d1ee7256809c93.woff2") format('woff2'), url("../fonts/nucleo-icons-7f15da0b99d53637ea28c639d633136e.woff") format('woff'), url("../fonts/nucleo-icons-e33326da74e71984ee9d62c3ef3c3524.ttf") format('truetype'), url("../fonts/nucleo-icons-6031504ef816940b712d0dc6ac5c38ba.svg") format('svg');
  font-weight: normal;
  font-style: normal;
}

/*------------------------
    base class definition
-------------------------*/
.ni {
  display: inline-block;
  font: normal normal normal 14px/1 NucleoIcons;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/*------------------------
  change icon size
-------------------------*/
.ni-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}

.ni-2x {
  font-size: 2em;
}

.ni-3x {
  font-size: 3em;
}

.ni-4x {
  font-size: 4em;
}

.ni-5x {
  font-size: 5em;
}

/*----------------------------------
  add a square/circle background
-----------------------------------*/
.ni.square,
.ni.circle {
  padding: 0.33333333em;
  vertical-align: -16%;
  background-color: #eee;
}

.ni.circle {
  border-radius: 50%;
}

/*------------------------
  list icons
-------------------------*/
.ni-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}

.ni-ul>li {
  position: relative;
}

.ni-ul>li>.ni {
  position: absolute;
  left: -1.57142857em;
  top: 0.14285714em;
  text-align: center;
}

.ni-ul>li>.ni.lg {
  top: 0;
  left: -1.35714286em;
}

.ni-ul>li>.ni.circle,
.ni-ul>li>.ni.square {
  top: -0.19047619em;
  left: -1.9047619em;
}

/*------------------------
  spinning icons
-------------------------*/
.ni.spin {
  -webkit-animation: nc-spin 2s infinite linear;
  -moz-animation: nc-spin 2s infinite linear;
  animation: nc-spin 2s infinite linear;
}

@-webkit-keyframes nc-spin {
  0% {
    -webkit-transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
  }
}

@-moz-keyframes nc-spin {
  0% {
    -moz-transform: rotate(0deg);
  }

  100% {
    -moz-transform: rotate(360deg);
  }
}

@keyframes nc-spin {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

/*------------------------
  rotated/flipped icons
-------------------------*/
.ni.rotate-90 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}

.ni.rotate-180 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}

.ni.rotate-270 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
  -webkit-transform: rotate(270deg);
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -o-transform: rotate(270deg);
  transform: rotate(270deg);
}

.ni.flip-y {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0);
  -webkit-transform: scale(-1, 1);
  -moz-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  -o-transform: scale(-1, 1);
  transform: scale(-1, 1);
}

.ni.flip-x {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: scale(1, -1);
  -moz-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  -o-transform: scale(1, -1);
  transform: scale(1, -1);
}

/*------------------------
    font icons
-------------------------*/

.ni-active-40::before {
  content: "\ea02";
}

.ni-air-baloon::before {
  content: "\ea03";
}

.ni-album-2::before {
  content: "\ea04";
}

.ni-align-center::before {
  content: "\ea05";
}

.ni-align-left-2::before {
  content: "\ea06";
}

.ni-ambulance::before {
  content: "\ea07";
}

.ni-app::before {
  content: "\ea08";
}

.ni-archive-2::before {
  content: "\ea09";
}

.ni-atom::before {
  content: "\ea0a";
}

.ni-badge::before {
  content: "\ea0b";
}

.ni-bag-17::before {
  content: "\ea0c";
}

.ni-basket::before {
  content: "\ea0d";
}

.ni-bell-55::before {
  content: "\ea0e";
}

.ni-bold-down::before {
  content: "\ea0f";
}

.ni-bold-left::before {
  content: "\ea10";
}

.ni-bold-right::before {
  content: "\ea11";
}

.ni-bold-up::before {
  content: "\ea12";
}

.ni-bold::before {
  content: "\ea13";
}

.ni-book-bookmark::before {
  content: "\ea14";
}

.ni-books::before {
  content: "\ea15";
}

.ni-box-2::before {
  content: "\ea16";
}

.ni-briefcase-24::before {
  content: "\ea17";
}

.ni-building::before {
  content: "\ea18";
}

.ni-bulb-61::before {
  content: "\ea19";
}

.ni-bullet-list-67::before {
  content: "\ea1a";
}

.ni-bus-front-12::before {
  content: "\ea1b";
}

.ni-button-pause::before {
  content: "\ea1c";
}

.ni-button-play::before {
  content: "\ea1d";
}

.ni-button-power::before {
  content: "\ea1e";
}

.ni-calendar-grid-58::before {
  content: "\ea1f";
}

.ni-camera-compact::before {
  content: "\ea20";
}

.ni-caps-small::before {
  content: "\ea21";
}

.ni-cart::before {
  content: "\ea22";
}

.ni-chart-bar-32::before {
  content: "\ea23";
}

.ni-chart-pie-35::before {
  content: "\ea24";
}

.ni-chat-round::before {
  content: "\ea25";
}

.ni-check-bold::before {
  content: "\ea26";
}

.ni-circle-08::before {
  content: "\ea27";
}

.ni-cloud-download-95::before {
  content: "\ea28";
}

.ni-cloud-upload-96::before {
  content: "\ea29";
}

.ni-compass-04::before {
  content: "\ea2a";
}

.ni-controller::before {
  content: "\ea2b";
}

.ni-credit-card::before {
  content: "\ea2c";
}

.ni-curved-next::before {
  content: "\ea2d";
}

.ni-delivery-fast::before {
  content: "\ea2e";
}

.ni-diamond::before {
  content: "\ea2f";
}

.ni-email-83::before {
  content: "\ea30";
}

.ni-fat-add::before {
  content: "\ea31";
}

.ni-fat-delete::before {
  content: "\ea32";
}

.ni-fat-remove::before {
  content: "\ea33";
}

.ni-favourite-28::before {
  content: "\ea34";
}

.ni-folder-17::before {
  content: "\ea35";
}

.ni-glasses-2::before {
  content: "\ea36";
}

.ni-hat-3::before {
  content: "\ea37";
}

.ni-headphones::before {
  content: "\ea38";
}

.ni-html5::before {
  content: "\ea39";
}

.ni-istanbul::before {
  content: "\ea3a";
}

.ni-key-25::before {
  content: "\ea3b";
}

.ni-laptop::before {
  content: "\ea3c";
}

.ni-like-2::before {
  content: "\ea3d";
}

.ni-lock-circle-open::before {
  content: "\ea3e";
}

.ni-map-big::before {
  content: "\ea3f";
}

.ni-mobile-button::before {
  content: "\ea40";
}

.ni-money-coins::before {
  content: "\ea41";
}

.ni-note-03::before {
  content: "\ea42";
}

.ni-notification-70::before {
  content: "\ea43";
}

.ni-palette::before {
  content: "\ea44";
}

.ni-paper-diploma::before {
  content: "\ea45";
}

.ni-pin-3::before {
  content: "\ea46";
}

.ni-planet::before {
  content: "\ea47";
}

.ni-ruler-pencil::before {
  content: "\ea48";
}

.ni-satisfied::before {
  content: "\ea49";
}

.ni-scissors::before {
  content: "\ea4a";
}

.ni-send::before {
  content: "\ea4b";
}

.ni-settings-gear-65::before {
  content: "\ea4c";
}

.ni-settings::before {
  content: "\ea4d";
}

.ni-single-02::before {
  content: "\ea4e";
}

.ni-single-copy-04::before {
  content: "\ea4f";
}

.ni-sound-wave::before {
  content: "\ea50";
}

.ni-spaceship::before {
  content: "\ea51";
}

.ni-square-pin::before {
  content: "\ea52";
}

.ni-support-16::before {
  content: "\ea53";
}

.ni-tablet-button::before {
  content: "\ea54";
}

.ni-tag::before {
  content: "\ea55";
}

.ni-tie-bow::before {
  content: "\ea56";
}

.ni-time-alarm::before {
  content: "\ea57";
}

.ni-trophy::before {
  content: "\ea58";
}

.ni-tv-2::before {
  content: "\ea59";
}

.ni-umbrella-13::before {
  content: "\ea5a";
}

.ni-user-run::before {
  content: "\ea5b";
}

.ni-vector::before {
  content: "\ea5c";
}

.ni-watch-time::before {
  content: "\ea5d";
}

.ni-world::before {
  content: "\ea5e";
}

.ni-zoom-split-in::before {
  content: "\ea5f";
}

.ni-collection::before {
  content: "\ea60";
}

.ni-image::before {
  content: "\ea61";
}

.ni-shop::before {
  content: "\ea62";
}

.ni-ungroup::before {
  content: "\ea63";
}

.ni-world-2::before {
  content: "\ea64";
}

.ni-ui-04::before {
  content: "\ea65";
}


/* all icon font classes list here */";s:6:"digest";s:32:"f40679a8bdbab7a6168a9f1cbdb1d65b";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:6:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"C:\Users\skonb\Desktop\symfony\my_project_directory\assets\build\assets\fonts\nucleo-icons.eot";s:10:"publicPath";s:76:"/assets/build/assets/fonts/nucleo-icons-34845e4a850e92747ab07cbdc1569d60.eot";s:23:"publicPathWithoutDigest";s:43:"/assets/build/assets/fonts/nucleo-icons.eot";s:15:"publicExtension";s:3:"eot";s:7:"content";N;s:6:"digest";s:32:"34845e4a850e92747ab07cbdc1569d60";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:35:"build/assets/fonts/nucleo-icons.eot";}i:1;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"C:\Users\skonb\Desktop\symfony\my_project_directory\assets\build\assets\fonts\nucleo-icons.eot";s:10:"publicPath";s:76:"/assets/build/assets/fonts/nucleo-icons-34845e4a850e92747ab07cbdc1569d60.eot";s:23:"publicPathWithoutDigest";s:43:"/assets/build/assets/fonts/nucleo-icons.eot";s:15:"publicExtension";s:3:"eot";s:7:"content";N;s:6:"digest";s:32:"34845e4a850e92747ab07cbdc1569d60";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:35:"build/assets/fonts/nucleo-icons.eot";}i:2;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"C:\Users\skonb\Desktop\symfony\my_project_directory\assets\build\assets\fonts\nucleo-icons.woff2";s:10:"publicPath";s:78:"/assets/build/assets/fonts/nucleo-icons-979fb650af3d1ae251d1ee7256809c93.woff2";s:23:"publicPathWithoutDigest";s:45:"/assets/build/assets/fonts/nucleo-icons.woff2";s:15:"publicExtension";s:5:"woff2";s:7:"content";N;s:6:"digest";s:32:"979fb650af3d1ae251d1ee7256809c93";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:37:"build/assets/fonts/nucleo-icons.woff2";}i:3;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"C:\Users\skonb\Desktop\symfony\my_project_directory\assets\build\assets\fonts\nucleo-icons.woff";s:10:"publicPath";s:77:"/assets/build/assets/fonts/nucleo-icons-7f15da0b99d53637ea28c639d633136e.woff";s:23:"publicPathWithoutDigest";s:44:"/assets/build/assets/fonts/nucleo-icons.woff";s:15:"publicExtension";s:4:"woff";s:7:"content";N;s:6:"digest";s:32:"7f15da0b99d53637ea28c639d633136e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:36:"build/assets/fonts/nucleo-icons.woff";}i:4;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"C:\Users\skonb\Desktop\symfony\my_project_directory\assets\build\assets\fonts\nucleo-icons.ttf";s:10:"publicPath";s:76:"/assets/build/assets/fonts/nucleo-icons-e33326da74e71984ee9d62c3ef3c3524.ttf";s:23:"publicPathWithoutDigest";s:43:"/assets/build/assets/fonts/nucleo-icons.ttf";s:15:"publicExtension";s:3:"ttf";s:7:"content";N;s:6:"digest";s:32:"e33326da74e71984ee9d62c3ef3c3524";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:35:"build/assets/fonts/nucleo-icons.ttf";}i:5;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"C:\Users\skonb\Desktop\symfony\my_project_directory\assets\build\assets\fonts\nucleo-icons.svg";s:10:"publicPath";s:76:"/assets/build/assets/fonts/nucleo-icons-6031504ef816940b712d0dc6ac5c38ba.svg";s:23:"publicPathWithoutDigest";s:43:"/assets/build/assets/fonts/nucleo-icons.svg";s:15:"publicExtension";s:3:"svg";s:7:"content";N;s:6:"digest";s:32:"6031504ef816940b712d0dc6ac5c38ba";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:35:"build/assets/fonts/nucleo-icons.svg";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:33:"build/assets/css/nucleo-icons.css";}