<?php
  function pdo_connection() {
    try {
    	return new PDO('mysql:host=localhost;dbname=tugas_pdo_crud;charset=utf8', 'root', '');
    } catch (PDOException $e) {
    	echo("Error : $e->getMessage()");
    }
}