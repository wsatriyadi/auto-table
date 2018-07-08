<?php
//=========================================
//  MEMBANGUN AUTO TABLE DENGAN PHP
//			8 JULI 2018
//		https://www.phpkita.me/
//=========================================

class table{
	private $simpan_koneksi;
	private $db;
	private $data;
	
	public function __construct(){
		$database['host'] 		= "localhost";
		$database['user'] 		= "root";
		$database['pass'] 		= "";
		$database['database'] 	= "tes_auto_table";
		$this->db = $database;
		$this->buat_koneksi();
	}
	
	public function __destruct(){
		mysqli_close($this->simpan_koneksi);
	}
	
	private function buat_koneksi(){
		$this->simpan_koneksi = new mysqli($this->db['host'], $this->db['user'], $this->db['pass'], $this->db['database']);
		if(mysqli_connect_error()){
			return "can not connect to database ".mysqli_connect_error();
		}
	}
	
	public function query($query){
		$this->result = $this->simpan_koneksi->query($query);
		return $this->result;
	}
	
	public function fetch(){
		if(!$this->result){
			return "no results";
		}
		while($row = $this->result->fetch_assoc()){
			$rows[] = $row;
		}
		$this->data = $rows;
		return $rows;
	}
	
	private function bikin_head(){
		$no =0;
		foreach($this->data as $key){
			foreach(array_keys($key) as $head){
				$td[$no][] = "<th>".$head."</th>";
			}
			$no++;
			$hed = implode(" ",$td[0]);
		}
		return "<thead><tr>".$hed."</tr></thead>";
	}
	
	private function bikin_isi(){
		$no = 0;
		foreach($this->data as $data){
			foreach($data as $field){
				$td[$no][] = "<td>".$field."</td>";
				$prim[$no][] = $field;
			}
			$fields[$no] = "<tr>".implode(" ",$td[$no])."</tr>";
			$no++;
		}
		return "<tbody>".implode(" ",$fields)."</tbody>";
	}
	
	function tampilkan(){
		$item[] = $this->bikin_head();
		$item[] = $this->bikin_isi();
		return "<table border='1px'>".implode(" ",$item)."</table>";
	}
}
?>