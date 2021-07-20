<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Payment Details</title>
    <link rel="stylesheet" href="Info.css">

</head>
<body>

<div class="img">
<center><image src="logo_tsf.png" width="150" height="150"></center>
</div>

        <div class="heading">
            <h2>Please fill the information for Donation..</h2>
        </div>

<div id="smart-button-container">
    <div style="text-align: center; font-size:20px"><label for="description"><b>Reson For Donation : </b></label><input type="text" name="descriptionInput" id="description" maxlength="127" value=""></div>
      <p id="descriptionError" style="visibility: hidden; color:white; text-align: center;">Please enter a Description</p>
    <div style="text-align: center; font-size:20px"><label for="amount"><b>Amount for Donation : </b></label><input name="amountInput" type="number" id="amount" value="" ><span> USD</span></div>
      <p id="priceLabelError" style="visibility: hidden; color:white; text-align: center;">Please enter a Amount</p>
    <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value="" ></div>
      <p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>
    <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
  </div>

  <script src="https://www.paypal.com/sdk/js?client-id=AWlvZq36jUpyZ07PjdDVqgK5K3RKhP8znxDOPrtFkQmxhYkcITL9J0e63InfZQr-T2QHycx8tLIyBWJV&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script src="Payment.js"></script>
  
</body>
</html>


    
    