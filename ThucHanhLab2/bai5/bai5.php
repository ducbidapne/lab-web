<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php  
    if (isset($_POST["a"])&& isset($_POST["b"]) && isset($_POST["c"])){
        $a=filter_input(INPUT_POST,"a",FILTER_VALIDATE_FLOAT);
        $b=filter_input(INPUT_POST,"b",FILTER_VALIDATE_FLOAT);
        $c=filter_input(INPUT_POST,"c",FILTER_VALIDATE_FLOAT);
        $x;
        $x2;
        $dt;
        if ($a==0)
        {
            if ($b==0)
                $x ="Phương trình có vô số nghiệm";
            else{
                    $x = round((-($c/$b)),2);
                }
            if ($c<>0 && $b==0)
                $x ="Phương trình vô nghiệm";
            }
            
        else 
        {
            $dt = pow($b,2)-4*$a*$c;
            if ($dt < 0)
                $x="Phương trình vô nghiệm";
            if ($dt==0)
            {
                $x=-($b/2*$a);
            }
            else 
            {
                $can=sqrt($dt);
                $x1=(-$b+$can)/(2*$a);
                $x2=(-$b-$can)/(2*$a);
                $x="x1=".round($x1,2).",x2=".round($x2,2);
            }
      
        }
        
        
    }
?>
<form action="bai5.php" method="post" >
<table width="806" border="1">
<tr>
<td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
</tr>
<tr>
<td width="83">Phương trình </td>
<td width="236">
<input name="a" type="text" />
    X^2 + </td>
<td width="218"><label for="textfield3"></label>
<input type="text" name="b" id="textfield3" />
      X+</td>
<td width="241"><label for="textfield"></label>
<input type="text" name="c" id="textfield" />
      =0</td>
</tr>
<tr>
<td colspan="4">
  Nghiệm  
<label for="textfield2"></label>
<input name="textfield" type="text" id="textfield2" width="400" value="<?php if(isset($x)) echo $x ?>" /></tr>
<tr>
<td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
</tr>
</table>
</form>
</body>
</html>
