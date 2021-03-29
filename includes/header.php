<?php 
	include_once '../includes/connect.php';
?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script type="text/javascript" src="../js/app.js"></script>
</head>
<body onload="showMyPost();showAllPosts();">
	<ul class="nav_ul">
	  <li class="nav_li"><a class="active" href="../html/news_feed.php">Home</a></li>
	  <li class="nav_li"><a href="../html/add.php">Add</a></li>
	  <li class="nav_li" style="float:right"><a href="../php/logout.php">Log Out</a></li>
	</ul>
	<br/><hr/><br>