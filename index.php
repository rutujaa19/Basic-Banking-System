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
                <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_158673029_9707279704500119_78594.jpg">
                <h3><span>Canva</span> bank</h3>
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
                <p><span>CANVA</span> BANK offers personal banking, corporate banking & internet banking services</p>
            </div>
            <div class="main">
                <a href="createuser.php"><div class="user">
                    <img src="https://img.pngio.com/computer-icons-user-clip-art-transparent-user-icon-png-1742152-user-icons-png-920_641.png" alt="">
                    <p>Create user</p>
                </div>
                </a>

                <a href="transfermoney.php"><div class="user">
                    <img src="data:image/png;base64,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" alt="">
                    <p>Transfer Money</p>
                </div>
                </a>

                <a href="transactionhis.php"><div class="user">
                    <img src="https://thumbs.dreamstime.com/z/business-banking-finance-icon-invoice-transaction-history-mailbox-flat-design-vector-illustration-suitable-web-139604420.jpg" alt="">
                    <p>Transaction History</p>
                </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>