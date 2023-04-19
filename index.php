<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php
    if(isset($_GET['password'])){
        $caratteripassword = $_GET['password'];
    }
     
    $letter='abcdefghijklmnopqrstuvwxyz';
    $number='1234567890';
    $special='._/!&';
    $all= $letter . $number . $special;
    $arrayAll = str_split($all);

    function generatePassword($arrayAll, $caratteripassword){
        $password=[];

        for ($i =0; $i< $caratteripassword; $i++){
          $randomnumber= rand(0, count($arrayAll));
          foreach($arrayAll as $key=> $caratteri){
            if ($randomnumber==$key){
                $password[]=$caratteri;
            }
          }
        }
         return $password;
    }

    ?>





    <main>
            <div>
                <form action="index.php" method="GET">
                    <label for="password">Lunghezza Password:</label>
                    <input type="number" id="password" name="password">
                    <button>Crea Password</button>
                </form>
            </div>
    </main>
    
</body>
</html>