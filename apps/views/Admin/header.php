<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Advanced PHP OOP Bangla Tutorial</title>
<style>
body {font-family: arial;font-size: 15px;line-height: 18px;margin: 0 auto;width: 850px;}
a{color:#3399FF;}

<?php foreach($color as $key => $value){?>
body{background:<?php echo $value['color'];?>}
<?php }?>

div.headersection{background: #3399ff url("img/php.png") no-repeat scroll 25px 12px;height: 74px;overflow: hidden;padding-left: 140px;}
.headeroption h2{color: #000;font-size: 30px;padding-top: 2px;text-shadow: 0 1px 1px #fff;}
.content{background: #fff;border: 6px solid #3399ff;font-size: 16px;line-height: 22px;margin-bottom: 3px;margin-top: 3px;min-height: 380px;overflow: hidden;padding: 10px;}

.subject {border-bottom: 1px solid #3399ff;font-size: 20px;margin-bottom: 10px;padding-bottom: 10px;}
.subject p{margin:0;}

.insert{color:#06960E;font-weight:bold;}
.delete{color:#DE5A24;font-weight:bold;}

.mainleft{border-right: 1px dotted #999;float:left;margin-right:16px;width: 350px;}
.mainright{float:right;width:450px;}

.tblone{width:100%;border:1px solid #fff;}
.tblone td{padding:5px 10px;text-align:center;}

table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
table.tblone tr:nth-child(2n){background:#fdf0f1;height:30px;}

input[type="text"] {border:1px solid #ddd;margin-bottom:5px;padding:5px;width:300px;font-size:16px}
.cat{border:1px solid #ddd;margin-bottom:5px;padding:5px;width:228px;font-size:16px;cursor:pointer;}
input[type="submit"]{cursor: pointer}
.admin-panel{}
.left-side{width:220px; float:left;border-right:1px solid #ddd;padding-right:10px;}
.widget{}
.widget h3{background:#177DE3;padding: 10px;font-size: 21px; text-shadow:1px 1px 1px #fff;}
.widget ul{margin:0;padding:0;list-style:none;}
.widget ul li{background: #ccc;border-bottom:1px solid #ddd;}
.widget ul li a{text-decoration: none;color:#000;display:block;padding:3px 5px;}
.widget ul li a:hover{background: #757575;}
.right-side{width:580px; float:right;}
.right-side h2{margin-top:0;padding-bottom:15px;border-bottom:2px dashed #DDD;}
.editor{width:300px;}
.footeroption{height:90px;background:#177de3;overflow:hidden;padding-top:10px;}
.footerone {background: #3aa0ff;border-radius: 5px;float: left;font-size:18px;line-height:23px;margin-left: 10px;padding:6px 10px;text-align:center;text-shadow: 1px 0 2px #fff;width:390px;overflow: hidden;}
.footerone p{margin:0;}
</style>
</head>
<body>

 
<div class="content">
   Admin Panel <span style="float:right"><a href="<?php echo BASE_URL;?>" target="_blank">Visite Website</a></span> <hr/>
