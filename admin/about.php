<?php
/**
 * Model: C.P.Sub 公告系統
 * Author: Cooltey Feng
 * Lastest Update: 2013/10/15
 */
 
 // include configuration file
 include_once("config/config.php");
 // include setting file
 include_once("config/settings.php");
 // include library file
 include_once("class/lib.php");
 
 $getLib = new Lib($cpsub['filter'], $cpsub['stripslashes']);
?>
	<div class="jumbotron">
	  <div class="container">
		<h1>感謝您的使用</h1>
		<p>程式資訊在此</p>
		<p><a class="btn btn-primary btn-lg" href="http://www.cooltey.org" target="_blank">前往作者網站</a></p>
	  </div>
	</div>