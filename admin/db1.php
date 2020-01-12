<?php
error_reporting(E_ERROR);
header("Content-type:text/html;charset=utf-8");	
class db{
	public $conn = null;
	public $table = null;
	
	public function __construct($table){
		$this->table = $table;
		$this->conn = mysqli_connect('localhost','root','','nuomi_admin');
		mysqli_query($this->conn,"set names utf8");
	}
	//查询列表，返回二维数组
	public function select($sql){
		$result = mysqli_query($this->conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		/*mysqli_close($this->conn);*/
		return $list;
	}
	//查询单条
	public function find($sql){
		$result = mysqli_query($this->conn,$sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	
	//删除
	public function delete($sql){
		$result = mysqli_query($this->conn,$sql);
		return $result;
	}
	
	//增加
	public function add($data){
		$sql = "insert into $this->table set ";
		foreach ($data as $key=>$val){
			$sql .= "$key='$val',";
		}
		$sql = substr($sql,0,strlen($sql)-1);
		$result = mysqli_query($this->conn,$sql);
		return $result;
	}
	
	//编辑
	public function edit($data,$where){
		$sql = "update $this->table set ";
		foreach ($data as $key=>$val){
			$sql .= "$key='$val',";
		}
		$sql = substr($sql,0,strlen($sql)-1);
		$sql .= " where $where";
		$result = mysqli_query($this->conn,$sql);
		return $result;
	}
}

?>