<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <style>

    </style>
</head>
<body>
<br/>
<h3>Hien thi so NT</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input type="number" name="search1" placeholder="Nhập so luong so NT"/><br>
    <input type="submit" id="submit" value="HienThi"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers=$_POST['search1'];
    $count=0;
    $N=2;
    function checkNumber($n){
        for($i=2;$i<$n;$i++){
            if($n%$i==0){
                return false;
            }
        }
        return true;
    }
    while ($count<$numbers){
        if(checkNumber($N)){
            echo $N." ";
            $count++;
            $N++;
        }else{
            $N++;
        }
    }
}

?>
</body>
</html>