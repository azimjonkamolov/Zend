<?php
require_once "db.php";
class MAIN extends connectDatabase{
    function get_results($sql) {
        $res=mysqli_query($this->connection, $sql);
        $this->debug['QUERY']=$sql;
        $this->debug['LAST_ERROR']=mysqli_error($this->connection);
        if(!$res) return false;
        $data=array();
        $num = @count($res);
        while($row=mysqli_fetch_array($res,$num)){
            $data[]=$row;
        }
        return $data;
    }
    function get_result($sql) {
        $res=mysqli_query($this->connection, $sql);
        $this->debug['QUERY']=$sql;
        $this->debug['LAST_ERROR']=mysqli_error($this->connection);
        $data=array();
        if(!$res) return false;
        $num = @count($res);
        while($row=mysqli_fetch_array($res,$num)){
            $data[]=$row;
        }
        $data = $data[0];
        return $data;
    }
    function insert($table,$data){
        if(!is_array($data)) return false;
        $sql='';
        $fields=array();
        $values=array();
        foreach ($data AS $field => $value) {
            $fields[]=$field;
            $values[]= '\'' . $value . '\'';
        }
        $fields=implode(",", $fields);
        $values=implode(",", $values);
        $sql="INSERT INTO $table($fields) VALUES($values)";
        $this->debug['QUERY']=$sql;
        $this->debug['LAST_ERROR']=mysqli_error($this->connection);
        $res=mysqli_query($this->connection, $sql);
        if(!$res) return false;
    }
    function update($table,$data,$where=''){
        if(!is_array($data)) return false;
        $sql='';
        $fields=array();
        foreach ($data as $field => $value) {
            $fields[]="$field='".$value."'";
        }
        if($where!="") {
            $where="WHERE ".$where;
        };
        $fields=implode(",", $fields);
        $sql="UPDATE $table SET $fields $where";
        echo $sql;
        $this->debug['QUERY']=$sql;
        $this->debug['LAST_ERROR']=mysqli_error($this->connection);
        $res=mysqli_query($this->connection, $sql);
        if(!$res) return false;
    }
    function delete($table,$where=''){
        $fields=array();
        if($where!="") {
            $where = "WHERE ".$where;
        };
        $sql="DELETE FROM $table $where;";
        $this->debug['QUERY']=$sql;
        $this->debug['LAST_ERROR']=mysqli_error($this->connection);
        $res=mysqli_query($this->connection, $sql);
        if(!$res) return false;
    }
    function query($sql){
        $res=mysqli_query($this->connection,$sql);
        $this->debug['QUERY']=$sql;
        $this->debug['LAST_ERROR']=mysqli_error($this->connection);
        if(!$res) return false;
    }
}
$GLOBALS['MAIN']=new MAIN();
?>