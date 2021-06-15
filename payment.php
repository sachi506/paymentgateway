<!DOCTYPE html>
<html lang="en">

<head>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 
   Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="payment.css">
    <title>Payment Gateway</title>
</head>

<body>
    <center>
        <div class="container-fluid">
            <a href="#" style=" text-decoration: none;">
                <h1>Checkout</h1>
            </a>
            <div class="box">
                <form action="pay.php" method="POST" style="padding:25px">
                <label><i class="fa fa-user"></i>Name</label>
                <br>
                <input type="text" required placeholder="Enter Your Full Name" required name="Fname">
                <br>
                <label><i class="fa fa-mobile"></i>Mobile Number</label>
                <br>
                <input type="number" required placeholder="Enter Your Mobile Number" required name="mobile">
                <br>
                <label><i class="fa fa-envelope"></i>Email Address</label>
                <br>
                <input type="email" required placeholder="Enter Your Email" required name="email">
                <br>
                <input type="hidden" value="<?php echo 'OID' .rand(10,100).'END';?>" name="orderid">
                <input type="hidden" value="<?php echo 1;?>" name="amount">
                <label><i class="fa fa-address-card"></i>Address</label>
                <br>
                <input type="text" required placeholder="Enter Your Address" required name="address">
                <br>
                <a href="#"><button class="btn">PAY NOW</button></a>
                </form>
            </div>
        </div>
    </center>


</body>

</html>
               
