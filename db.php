<?php
class db{
	function connect(){
		date_default_timezone_set('Asia/Kolkata');
		$con=mysqli_connect("localhost","admin_tylos","pnIOUD3uiT","admin_tylos");
		return $con;
	}
	function get($table,$columns,$condition){
		$con = $this->connect();
		$query="SELECT $columns FROM $table $condition";
		$sql = mysqli_query($con,$query);
		$data=array();
		while($rw=mysqli_fetch_array($sql)){
			$data['result'][] = $rw;
		}
		$data['query']=$query;
		return $data;
	}
	function insert($table,$data){
		$columns = '';
		$value = '';
		$i=0;
		foreach($data as $key=>$val){
			if($i>0){
				$columns.=',';
				$value.=',';
			}
			$columns.="`$key`";
			$value.="'$val'";
			$i++;
		}
		$con=$this->connect();
		$now=date('Y-m-d H:i:s');
		$sql="INSERT INTO $table($columns,`created_at`,`updated_at`) VALUES($value,'$now','$now')";
		mysqli_query($con,$sql);
		$id=mysqli_insert_id($con);
		return $id;
	}
	function update($table,$data,$id){
		$string='';
		$i=0;
		foreach($data as $key=>$val){
			if($i>0){
				$string.=',';
			}
			$string.="`$key`='$val'";
			$i++;
		}
		$con=$this->connect();
		$now=date("Y-m-d H:i:s");
		$sql="UPDATE $table SET $string,`updated_at`='$now' WHERE `id`=$id";
		$sql=mysqli_query($con,$sql);
	}
	function delete($table,$id){
		$con=$this->connect();
		$sql="DELETE FROM $table WHERE `id`=$id";
		$sql=mysqli_query($con,$sql);
	}
	function query($query){
		$con=$this->connect();
		$sql=mysqli_query($con,$query);
		return $sql;
	}
	function escape($string){
		$string = mysqli_real_escape_string($this->connect(),$string);
		return $string;
	}
}
?>