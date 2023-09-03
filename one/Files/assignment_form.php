<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }
        .Form{
            overflow: hidden;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            background-color: #5a9500;
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .card-details {
           
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-block: 2rem;
        }

        .card-details label {
            display: block;
            margin-bottom: 5px;
        }

        .card-details input[type="text"],
        .card-details input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        .sty{
                border: 2px solid white;
                padding: 2rem;
                background-color: green;
                border-radius: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <form class="Form" action="#" method="post">
            <h1 class="steps">Step 1 Your Details</h1>
            <div class="card-details">

                <div class="form-group sty">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required placeholder="First And Last Name">
                </div>
                <div class="form-group sty">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required placeholder="Exmple@gmail.com">
                </div>
                <div class="form-group sty">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required placeholder="6987938672">
                </div>
            </div>
            <h1 class="steps">Step 2 Your Address</h1>
            <div class="form-group sty">
                <label for="address">Delivery Address:</label>
                <textarea id="address" name="address" rows="4" required></textarea>
                <br>
                <br>
                 <label for="PostCode">PostCode</label>
                <input type="number" id="PostCode" name="PostCode" required placeholder="380005">
                <br>
                 <label for="Country">Country</label>
                <input type="text" id="Country" name="namCountrye" required placeholder="">
            </div>
            <br>
            <h1 class="steps">Step 3 card-details</h1>
            <div class="card-details">
                <h3>Payment Information</h3>
                <div class="Card-Type sty">
                  <select class="form-select form-select-sm" aria-label="Small select example">
                        <option selected>Open this to select CARD</option>
                        <option value="1">VISA</option>
                        <option value="2">AMEX</option>
                        <option value="3">MASTERCARD</option>
                    </select>
                </div>
                <br>
                <div class="form-group sty">
                    <label for="card-number">Card Number:</label>
                    <input type="number" id="card-number" name="card-number" required>
                </div>
                <div class="form-group sty">
                    <label for="SecurityNumber">SecurityNumber</label>
                    <input type="number" id="SecurityNumber" name="SecurityNumber" required>
                </div>
                <div class="form-group sty">
                    <label for="nameOnCard">NameOnCard:</label>
                    <input type="text" id="nameOnCard" name="nameOnCard" required>
                </div>
            </div>
            <center>
                <button type="submit" >BUY IT!</button>
            </center>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
