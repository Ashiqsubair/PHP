<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
phone:<input type="text" name="phone"><br>
gender: <label><input type="radio" value="male" name="gender">Male</label> <label><input type="radio" value="female" name="gender">Female</label> <label><input type="radio" value="other" name="gender">Other</label> <br>
dob:<input type="date" name="date">
<input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (strlen($_POST["phone"]) == 10) {
        $timestamp = strtotime($_POST["date"]);
        $temp = date("Y", $timestamp);
        if(2023-$temp<18){
            echo "invalid DOB";
        }
        else{
            echo "<br>"."Name: ".$_POST["name"]."<br>";
            echo "Email: ".$_POST["email"]."<br>";
            echo "Phone: ".$_POST["phone"]."<br>";
            echo "Gender: ".$_POST["gender"]."<br>";
            echo "DOB: ".$_POST["date"]."<br>";
        }
    } 
    else {
        echo "invalid phone number <br>";
    }
    
}

?>
</body>
</html>