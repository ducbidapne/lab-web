<?php
class Dao{
    var $con;
    function __construct($user, $pass, $db)
    {
        $host = "localhost";
        $this->con=mysqli_connect($host, $user, $pass, $db);
        mysqli_set_charset($this->con, "utf8");
    }

    public function table($sql, $header): void
    {
        $rs = mysqli_query($this->con,$sql);
        $fieldinfo = mysqli_fetch_fields($rs);
        $str="<table><tr>";
        foreach ($fieldinfo as $val){
            $name = $val->name;
            $str.="<th>".$name."</th>";
        }
        $str.="</tr>";
        while ($r=mysqli_fetch_array($rs)){
            $str.="<tr>";
            foreach ($fieldinfo as $val){
                $name =  $val->name;
                $str.="<td>".$r[$name]."</td>";
            }
            $str.="</tr>";
        }
        $str.="</table>";
        echo "<h3>{$header}</h3>";
        echo $str;
    }
}