<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>

    <link rel="stylesheet" href="index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="bank-container">
        <div class="content">
            <!--logo-->
            <div class="logo">
                <img src="background1.jpg">
                <h3><span>Oxygen</span> bank</h3>
            </div>
            <!--navbar-->
            <nav class="navbar">
                <ul>
                    <li>
                        <span class="icon active"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="title" style="margin-left: -10rem;">Home</span>
                    </li>
                    <li>
                        <span class = "icon"><a href="createuser.php" style="color:black; text-decoration:none;"><i class="fa fa-user-o" aria-hidden="true"></i></a></span>
                        <span class="title">Create user</span>
                    </li>
                    <li>
                        <span class = "icon"><a href="transfermoney.php" style="color:black; text-decoration:none;"><i class="fa fa-university" aria-hidden="true"></i></a></span>
                        <span class="title" style="margin-left: -14.6rem;">Transfer money</span>
                    </li>
                    <li>
                        <span class = "icon"><a href="transactionhis.php" style="color:black; text-decoration:none;"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                        <span class="title">History</span>
                    </li>
                </ul>
            </nav>
            <!--Slogan-->
            <div class="slogan">
                <p><span>Oxygen</span> BANK offers personal banking, corporate banking & internet banking services</p>
            </div>
            <div class="main">
                <a href="createuser.php"><div class="user">
                    <img src="createuser.jpg" alt="">
                    <p>Create user</p>
                </div>
                </a>

                <a href="transfermoney.php"><div class="user">
                    <img src="transfermoney.jpg" alt="">
                    <p>Transfer Money</p>
                </div>
                </a>

                <a href="transactionhis.php"><div class="user">
                    <img src="createuser.jpg" alt="">
                    <p>Transaction History</p>
                </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>