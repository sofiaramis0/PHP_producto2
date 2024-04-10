<?php
class Zona
{ 
	function __construct()
	{
		global $mysqli;
		$this->mysqli = $mysqli;
		$this->tabla  = "transfer_zona";
	}
	
	function get($id)
	{
		$sql = "SELECT * FROM $this->tabla WHERE id_zona = $id LIMIT 1";

		$query = $this->mysqli->query($sql);

		return $query->fetch_object();
	}
	
	function add($descripcion)
	{
		$sql = "INSERT INTO $this->tabla (descripcion) VALUES ('$descripcion');";

		$query = $this->mysqli->query($sql);

		return $this->mysqli->insert_id;
	}

	function delete($id)
	{
		$sql = "DELETE FROM $this->tabla WHERE id_zona = $id";
		$this->mysqli->query($sql);
	}
} 
?>