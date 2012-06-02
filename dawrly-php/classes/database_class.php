<?php
class database
{
/* --------------- variables ------------------ */	
	private $connection;
/* ------------- constructor ------------------ */	
	function __construct(){
		$this->connect();
		}
/* ---------- connect to server --------------- */	
	private function connect(){
			$this->connection = mysql_connect(_SERVER,_DBUSER,_DBPASS) or die('Cannot connect to server: '.mysql_error());
			$database = mysql_select_db(_DBNAME) or die('Cannot connect to database: '.mysql_error());		
		}
/* ----------- select a record ---------------- */
	public function select($table,$fields,$order=''){
			$data = array();
			$query = "Select $fields from $table $order";
			$sql = mysql_query($query) or die("Error in your query in select function: ".mysql_error());	
			while ($row = mysql_fetch_assoc($sql)){
				$result = array();
				foreach ($row as $key=>$value){
					if (gettype($key) != "Integer")
						{
						$result[$key] = stripslashes($value);
						}
					}
				$data[] = $result;
				}
				return $data;		
		}
/* ----------- select where record ------------- */
	public function selectWhere($table,$fields,$where){
			$data = array();
			$query = "Select $fields from $table where $where";
			$sql = mysql_query($query) or die("Error in your query in select where function: ".mysql_error());
			while ($row = mysql_fetch_assoc($sql)){
				$result = array();
				foreach ($row as $key=>$value){
					if (gettype($key) != "Integer")
						{
						$result[$key] = stripslashes($value);
						}
					}
				$data[] = $result;
				}
				return $data;			
		}
/* ----------- insert a record ---------------- */		
	public function insert($table,$fields,$values){
			$query = "insert into $table ($fields) values ($values)";
			return mysql_query($query) or die("Database insertion error: ".mysql_error());
		}
/* ----------- update a record ---------------- */
	public function update($table,$values,$where){
			$query = "update ".$table." set ".$values." where ".$where;
			return mysql_query($query) or die("Update error: ".mysql_error());
		}
/* ----------- delete a record ---------------- */
	public function delete($table,$where){
			$query = "delete from ".$table." where ".$where;
			return mysql_query($query);
		}
/* -------------- destructor ------------------ */		
	public function __destruct(){
        mysql_close($this->connection);
    }
	
}

?>