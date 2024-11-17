<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Process | Codehal</title>
    <!-- Use Laravel asset() helper to link to the CSS file -->
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
</head>

<body>

    <div class="container">
        <form action="{{ route('payment.submit') }}" method="POST">
            @csrf <!-- CSRF Token for Laravel form security -->
            <div class="row">
                <div class="column">
                    <h3 class="title">Billing Address</h3>
                    <div class="input-box">
                        <span>Full Name :</span>
                        <input type="text" placeholder="Example Example" name="full_name" required>
                    </div>
                    <div class="input-box">
                        <span>Email :</span>
                        <input type="email" placeholder="example@example.com" name="email" required>
                    </div>
                    <div class="input-box">
                        <span>Address :</span>
                        <input type="text" placeholder="Room - Street - Locality" name="address" required>
                    </div>
                    <div class="input-box">
                        <span>City :</span>
                        <input type="text" placeholder="Wuhan" name="city" required>
                    </div>

                    <div class="flex">
                        <div class="input-box">
                            <span>State :</span>
                            <input type="text" placeholder="China" name="state" required>
                        </div>
                        <div class="input-box">
                            <span>Zip Code :</span>
                            <input type="number" placeholder="123 456" name="zip_code" required>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <h3 class="title">Payment</h3>
                    <div class="input-box">
                        <div class="input-box">
                            <span>Cards Accepted :</span>
                            <!-- Visa Icon -->
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa" style="width: 60px; height: auto; margin-right: 30px ; margin-left: 40px;">
                            <!-- Mastercard Icon -->
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard" style="width: 50px; height: auto; margin-right: 30px;">
                            <!-- PayPal Icon -->
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal" style="width: 50px; height: auto; margin-right: 30px;">
                        </div>
                    </div>
                    <div class="input-box">
                        <span>Name On Card :</span>
                        <input type="text" placeholder="Mr. Name" name="name_on_card" required>
                    </div>
                    <div class="input-box">
                        <span>Credit Card Number :</span>
                        <input type="number" placeholder="1111 2222 3333 4444" name="card_number" required>
                    </div>
                    <div class="input-box">
                        <span>Exp. Month :</span>
                        <input type="text" placeholder="August" name="exp_month" required>
                    </div>

                    <div class="flex">
                        <div class="input-box">
                            <span>Exp. Year :</span>
                            <input type="number" placeholder="2040" name="exp_year" required>
                        </div>
                        <div class="input-box">
                            <span>CVV :</span>
                            <input type="number" placeholder="123" name="cvv" required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

</body>

</html>
