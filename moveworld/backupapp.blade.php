<html>
<head>
<title>@yield('title')</title>
<style>
body{font-size:13px; color:#999; margin:5px;}
h1{font-size:30px; text-alignl; color:ff11ff; margin:20px; letter-spacting:4px;}
ul{font-size:12px;}
tr{margin:5px;}
th{margin:5px;}
td{size:30px;margin:5px;}
hr{margin:25px; border-top:1px dashed #ddd;}
.header{font-size:50px;margin:10px;border:solid 5px #ff1; color:#f11; background:#ff1;}
.menutitle{font-size:12px;font-weight:bold;margin:1px;}
.content{margin:5px;}
.footer{text-align:right; font-size:10px;margin:10px;border-bottom:solid 1px #ccc; color:#c0c}
button{size:20px;margin:10px; text-align:center;}
</style>
</head>
<body>
@yield("header")
<h1>@yield("title")</h1>
<div class="content">
@section('menuber')
<h2 class="menutitle">menu</h2>
@yield("content")
</div>
<div class="footer">
@yield("footer")
</div>
</body>
</html>
