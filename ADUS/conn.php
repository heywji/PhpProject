<?php
    header ( "Content-Type:text/html charset=UTF-8");
    mysql_connect("","root","") or die("Connect Error,Please CHECK!!!");
	mysql_query("set names utf8");
    mysql_query( $sql = 'create database wwwroot' );
    mysql_query( "use wwwroot" );

