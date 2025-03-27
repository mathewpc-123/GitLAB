<html>
<head></head>
<body align=center>
<form method="post">
Enter a Number:<input type="text" name="t1"><br><br>
<input type="submit" name="s" value="SUBMIT">
<?php
if(isset($_POST['s']))
	{
        function fact($n){
            $res=1;
            for($i=$n;$i>=1;$i--)
                $res=$res*$i;
            return $res;
        }
		$n=$_POST['t1'];
        $res=fact($n);
        echo "<br>Factorial:",$res;
	}
?>
</form>
</body>
</html>

