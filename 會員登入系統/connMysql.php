<?php
	
	//��퓲��@ʾ
	header("Content-Type: text/html; charset=utf-8");

	//�Y�ώ����C�O��
	$db_host = "localhost";
	$db_table = "pig";
	$db_username = "pigfight2016";
	$db_password = "2016fightpig";
	
	//�O���Y���B��
	if(!mysql_connect($db_host, $db_username, $db_password)){
		die("Select FAIL!!QAO...");
	}

	//�B�Y�Y�ώ�
	if(!mysql_select_db($db_table)){
		die("Select FAIL!!QAO");
	}

	//�O����Ԫ���c�B��У��
	mysql_query("SET NAMES 'utf8'");




?>