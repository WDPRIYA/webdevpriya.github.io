<?php
session_start();
?>

<html>
    <body>
<form action="" method="post">
            <center>
            <h3> USER LOGIN</h3>
            
                    <label>USERNAME: </label>
                    <input type="text" name="username" ><br>
                    <br>

                    <label>PASSWORD: </label>
                    <input type="password" name="password" ><br>
                    <br>
                
                    <button type="submit" name="login" value="login">LOGIN</button>
                    <button type="rest" name="reset" value="reset">RESET</button> <a href ="login.php">
                
</center>
        </form>

        <?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "session";
			$flag=0;

			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (isset($_POST['login'])) 
			{
				$a = $_POST['Username'];
				$b = $_POST['Password'];
				
				$result = mysqli_query($conn,"SELECT * FROM Priya1");
				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					if ($a == $row["Username"] && $b == $row["Password"]) 
					{
						$_SESSION['use'] = $a;
						header("Location: index.php");
						$count=0;
						$count++;
						$flag=1;
						
					}
				}
				if($flag==0)
				{
					echo "Invalid Username Password";
				}
			}
        ?>
    </body>
</html>



