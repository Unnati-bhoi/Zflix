<?php

include("header.php");
include("config.php");

?>
<span id="error" class="ss-icon" style="color: Red; display: none" ></span>
<div class="clearfix"> </div>
					<!---->
				</div>
			<div class="clearfix"> </div>
		</div>
		</div>	
 				<div class="clearfix"> </div>	
			</div>
<!---->
<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>Payment Details</h2>
				</div>
			</div>
		</div>
	</section>
<?php
global $price, $email_id, $plan_name;
include("config.php");

$sql = "select * from plan_booking where status=0";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)) {


    $plan_name = $row['plan_name'];
    $price = $row['price'];
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <title>Merchant Check Out Page</title>
    <meta name="GENERATOR" content="Evrsoft First Page">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>

<body>
    <h3>
        <center>Payment Details</center>
    </h3>
    <pre>
	</pre>
    <center>
        <table border="1" style="color:black;">
            <tbody style="color:black;">
                <tr>
                    <th>S.No</th>
                    <th>Label</th>
                    <th>Value</th>
                </tr>
                <tr style="color:black;">
                    <td style="color:black;">1</td>
                    <td style="color:black;"><label>Order id:*</label></td>
                    <td style="color:black;"><input id=" ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID"
                            autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>"
                            style="width:329px;">
                    </td>
                </tr>
                <tr>
                    <td style="color:black;">2</td>
                    <td style="color:black;"><label>Cust Id:*</label></td>

                    <td style="color:black;"><input id="CUST_ID" tabindex="2" maxlength="50" size="12" name="CUST_ID"
                            autocomplete="off" value="<?php echo $user; ?>" style="width:329px;"></td>
                </tr>
                <tr>
                    <td style="color:black;">3</td>
                    <td style="color:black;"><label>industry type id:*</label></td>
                    <td style="color:black;"><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12"
                            name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" style="width:329px;"></td>
                </tr>
                <tr>
                    <td style="color:black;">4</td>
                    <td style="color:black;"><label>Channel:*</label></td>
                    <td style="color:black;"><input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12"
                            name="CHANNEL_ID" autocomplete="off" value="WEB" style="width:329px;">
                    </td>
                </tr>
                <tr>
                    <td style="color:black;">5</td>
                    <td style="color:black;"><label>amount :*</label></td>
                    <td style="color:black;"><input title="TXN_AMOUNT" type="text" name="TXN_AMOUNT" id="TXN_AMOUNT"
                            value="<?php echo $price; ?>" style="width:329px;">
                    </td>
                </tr>

                <tr>
                    <td style="color:black;">6</td>
                    <td style="color:black;"><label> Name :*</label></td>
                    <td style="color:black;"><input title="TXN_AMOUNT" type="text" name="plan_name" id="plan_name"
                            value="<?php echo $plan_name; ?>" style="width:329px;">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input value="CheckOut" type="button" onclick="MakePayment()"></td>
                </tr>
            </tbody>
        </table>
    </center>



    <script>
    function MakePayment() {
        var orderid = $("#ORDER_ID").val();
        var email_id = $("#CUST_ID").val();
        var amount = $("#TXN_AMOUNT").val();
        var plan_name = $("#plan_name").val();
        // alert(amount)
        var options = {
            "key": "rzp_test_PLuYowOoYOglL6",

            "amount": amount * 100,

            "currency": "INR",
            "plan_name": email_id,
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            // "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step 
            // "account_id": "acc_Ef7ArAsdU5t0XL", 
            "handler": function(response) {
                // console.log(response)
                jQuery.ajax({
                    type: "POST",
                    url: "pay2.php",
                    data: "pay_id=" + response.razorpay_payment_id + "&amount=" + amount + "&email_id=" +
                        email_id + "&plan_name=" +
                        plan_name,
                    success: function(result) {
                        window.location.href = "success.php";
                    }
                });
            }
        };
        var rzp1 = new Razorpay(options);

        rzp1.open();
        // e.preventDefault();

    }
    </script>
</body>

</html>

<br><br><br><br><br>
<?php

include("footer.php");

?>