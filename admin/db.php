<?php
error_reporting(E_ERROR);
error_reporting(E_ALL^E_NOTICE);
header("Content-type:text/html;charset=utf-8");
class db{
	public $conn = null;
	public $table = null;
	public $sql = null;
	
	public function __construct($table){
		$this->table = $table;
		$this->conn = mysqli_connect('localhost','root','','letucar');
		mysqli_query($this->conn,"set names utf8");
	}
	public function __destruct(){
		mysqli_close($this->conn);
	}

	//获取sql
	public function getsql(){
		echo 'SQL:'.$this->sql.'<hr>';
		echo 'Error:'.mysqli_error($this->conn).'<hr>';
	}
	//查询列表，返回二维数组
	public function select($sql){
		$this->sql = $sql;
		$list = null;
		if($result = mysqli_query($this->conn,$sql)){
			while($row = mysqli_fetch_assoc($result)){
				$list[] = $row;
			}
			return $list;
		}else{
			$this->getsql();
		}
	}
	//查询单条
	public function find($sql){
		$this->sql = $sql;
		if($result = mysqli_query($this->conn,$sql)){
			$row = mysqli_fetch_assoc($result);
			return $row;
		}else{
			$this->getsql();
		}
	}
	
	//删除
	public function delete($sql){
		$this->sql = $sql;
		if($result = mysqli_query($this->conn,$sql)){
			return $result;
		}else{
			$this->getsql();
		}
		
	}
	
	//增加
	public function add($data){
		$sql = "insert into $this->table set ";
		foreach ($data as $key=>$val){
			$sql .= "$key='$val',";
		}
		$sql = substr($sql,0,strlen($sql)-1);
		$this->sql = $sql;
		if($result = mysqli_query($this->conn,$sql)){
			return $result;
		}else{
			$this->getsql();
		}	
	}
	
	//编辑
	public function edit($data,$where){
		$sql = "update $this->table set ";
		foreach ($data as $key=>$val){
			$sql .= "$key='$val',";
		}
		$sql = substr($sql,0,strlen($sql)-1);
		$sql .= " where $where";
		$this->sql = $sql;
		if($result = mysqli_query($this->conn,$sql)){
			return $result;
		}else{
			$this->getsql();
		}
	}
}