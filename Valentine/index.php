<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Bấm Vào Đây Đi</title>
  <meta NAME="description" CONTENT="Linh ta linh tinh" />
  <meta property="og:title" content="Bấm Vào Đây Đi" />
  <meta property="og:type" content="website" /><meta name="author" content="Lê Anh Đức">
  <link rel="stylesheet" href="https://minhchuit.net/css/fontawesome-free-5.2.0-web/css/all.css" type="text/css" />
  <script language="javascript" src="https://minhchuit.net/js/jquery-3.3.1.min.js"></script>
<style type="text/css">
@font-face {
font-family: Pacifico;
src:url('http://css.leanhduc.pro.vn/font/Pacifico-Regular.ttf') format('truetype');
font-weight:normal;
 font-style:normal;
}
body{
  background: url(https://subtlepatterns.com/patterns/noise_lines.png);
  font-family: 'Pacifico', Tahoma;
  overflow: hidden;
  color: #fff;
}
.bgoverlay{
  background: rgb(103,58,183);
  background: rgba(103,58,183,0.7);
  position: absolute;
  top:0;
  left:0;
  right:0;
  bottom:0;
}
.container{
  position: relative;
  margin: 120px auto 0 auto;
  width: 320px;
}
 
 
.ico{
  display: block;
  width: 320px;
  height: 320px;
}
.open .ico{
  animation: open 6s;
  transform: scale(10);
    user-select: none;
}
.ico .title{
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -100px;
  margin-top: -100px;
  z-index: 4;
  font-size: 50px;
  font-family: 'Pacifico', cursive;
  color: #fff;
  cursor: pointer;
  text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
    user-select: none;
 
}
.open .ico .title{
  opacity: 0;
  transition: all 0.3s ease;
  top:-150px;
}
.ico:before,
.ico:after,
.ico2:before,
.ico2:after{
  position: absolute;
  top:0;
  left:0;
}
.ico:before,
.ico:after,
.ico2:before,
.ico2:after{
  display: block;
  font-size: 20em;
  color: #ff4081;
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  content: "\f004";
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.ico2:before,
.ico2:after{
  color: #e91e63;
}
.ico:before{
  z-index: 3;
}
.ico:after{
  animation: explode 4s infinite;
}
.ico2:before{
  animation: explodeSmall 3s infinite;
}
.ico2:after{
  animation: explodeSmall 2s infinite;
}
.endtext{
  opacity:0;
  position: absolute;
  top:-100px;
  width:100%;
    text-align: center;
}
.open .endtext{
  top:0;
  opacity: 1;
  animation: show 5s;
}
.endtext .close{
  position: absolute;
  top: 0;
  right: 0;
  cursor: pointer;
  text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
}
.endtext h1,
.endtext h2,
.endtext h3{
  text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
  text-align: center;
  font-weight: normal;
}
.endtext h1{
  font-size: 50px;
}
.endtext h2{
  font-size: 30px;
}
.endtext h3{
  font-size: 20px;
}
 
 
@keyframes explode {
    from {
      transform: scale(1);
      opacity: 1;
    }
    to {
      transform: scale(1.6);
      opacity: 0;
    }
}
@keyframes explodeSmall {
    from {
      transform: scale(1);
      opacity: 1;
    }
    to {
      transform: scale(1.2);
      opacity: 0;
    }
}
@keyframes open {
    from {
      transform: scale(1);
    }
    to {
      transform: scale(10);
    }
}
 
@keyframes show {
    from {
      opacity: 0;
      top: -100px;
    }
    to {
      opacity: 1;
      top:0;
    }
}
h1,h2,h3{
     user-select: none;} 
}
 
#all{
text-align: center;
width: 50%;
margin: 0 auto;
}
.a{
 background: #CC0000;
  border: none;
  font-size: 20x;
  color: #fff;
border-radius: 10px;
padding: 5px 15px 5px 15px;
margin-right: 8px;
font-weight: bold;
}
.b{
   background: #006600;
  border: none;
  font-size: 15px;
  color: #fff;
border-radius: 10px;
padding: 5px 15px 5px 15px;
margin-left: 8px;
font-weight: bold;
}
a:link {
color : #fff;
text-decoration: none;
}
a:visited {
color : #fff ;
  text-decoration: none;
}
a:hover, a:active {
color : #fff;
text-decoration: none;
}
</style>
  <script>
    $(document).ready(function(){
      $('.title').click(function(){
        $('.container').addClass('open');
      });
      $('.close').click(function(){
        $('.container').removeClass('open');
      });
    });
  </script>
</head>
<body>
  <div class="bgoverlay">
    <div class="container">
      <span class="ico">
        <span class="ico2"></span>
        <span class="title">Chạm Vào<br/>Đây</span>
      </span>
      <div class="endtext">
        <span class="close" title="Restart"><i class="fa fa-times"></i></span>  
        <h1>I love you baby</h1>
        <h2>Làm người yêu tớ nhé !</h2>
        <div id="all">
          <button class="a" onclick="alert('Cái này thêm cho vui chứ không có bấm được! Vui lòng bấm nút Đồng Ý để tiếp tục ^_^')">Không Đồng Ý</button>
          <button class="b"><a href="https://m.me/leanhduc.pro.vn">Đồng Ý</a></button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
