<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Niramit:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./views/person/stylelogin.css">
</head>
<body>
    <h1 class = "headForm" align = "center" >
        Login To My Memory
    </h1>
    <form align="center" id = "nickForm" method="GET" action="">
        <div>
            <input type="text" name="nickname" placeholder="Enter Your Nickname" required>
        </div>
        <div>
            <br>
            <input type="hidden" name="controller" value ="person"/>
            <input type="submit" name = "action" value="wish">
        </div>
        
    </form>
    

</body>
</html>


