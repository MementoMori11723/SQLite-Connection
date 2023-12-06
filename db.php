<html>
    <head><title>Output</title></head>
    <body>
        <?php 
            try {
                $pdo = new PDO("sqlite:base.db");
                $statment = $pdo->query("SELECT * FROM auth");
                $rows = $statment->fetchAll(PDO::FETCH_ASSOC);
                $email = $_POST['email'];
                $pwd = $_POST['pswd'];
                if ($rows[0]["username"] == $email && $rows[0]["passwd"] == $pwd) { 
                    echo "Login Successfully"; 
                } else { 
                    echo "Login Failed"; 
                }
                $pdo = null;
            } catch(PDOException $e) {
                echo $e -> getMessage();
            }
        ?>
    </body>
</html>