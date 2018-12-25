
<!DOCTYPE HTML>  
<html>
<head>
    <link href="./css/test.css" rel="stylesheet" media="screen">
</head>
    <body>  
    <?php
        $nameErr = $emailErr = $genderErr = "";
        $name = $email = $gender = $comment ="";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "You must enter Name";
            } else {
                $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed"; 
                }
            }
            
            if (empty($_POST["email"])) {
                $emailErr = "Email must enter";
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format"; 
                }
            }
                
            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gender must check";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
    <h2>Form validtaion</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
            <tr>
                <td>Name :</td>
                <td><input type = "text" name = "name" value="<?php echo $name;?>"> </td>
                <td><span class="error-color">* <?php echo $nameErr;?></span></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type = "text" name = "email" value="<?php echo $email;?>"> </td>
                <td><span class="error-color">* <?php echo $emailErr;?></span></td>
            </tr>
            <tr>
                <td>Comment :</td>
                <td><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td> <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female 
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male 
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other 
                </td>
                <td><span class="error-color">* <?php echo $genderErr;?></span></td>
            </tr>
            <tr>
                <td>Hobby :</td>
                <td> <input type="checkbox" name="hobby[]" value="movie"> Movie
                     <input type="checkbox" name="hobby[]" value="sport"> Sport
                     <input type="checkbox" name="hobby[]" value="walk"> Walk   
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    <br><hr>
    <?php         
        echo "Name :" .  $name;
        echo "<br>";
        echo "Email :" . $email;
        echo "<br>";
        echo "Comment:" . $comment;
        echo "<br>";
        echo "Gender:". $gender;
        echo "<br>";
        echo "Hobby :" . "<br>";
        if(isset($_POST['hobby'])){
            foreach($_POST['hobby'] as $value){
                echo $value . "<br>";
            }
        }
    ?>
    </body>
</html>