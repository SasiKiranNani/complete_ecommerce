<button id="rzp-button1" hidden>Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "{{ $response['razorpayId'] }}",
        "amount": "{{ $response['amount'] }}",
        "name": "",
        "image": "https://example.com/your_logo",
        "order_id": "{{ $response['orderID'] }}",
        "handler": function(response) {
            document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
            document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
            document.getElementById('razorpay_signature').value = response.razorpay_signature;
            document.getElementById('rzp-paymentresponse').click();

        },
        "prefill": {
            "name": "",
            "email": "",
            "contact": ""
        },
        "notes": {
            "address": "Laravel Ecommerce"
        },
        "theme": {
            "color": "#3399cc"
        }
    };
    var rzp1 = new Razorpay(options);
    window.onload = function() {

        document.getElementById('rzp-button1').click();
    };

    document.getElementById('rzp-button1').onclick = function(e) {
        rzp1.open();
        e.preventDefault();
    }
</script>
<form action="{{ url('/payment-complete') }}" method="post" hidden>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="text" id="razorpay_payment_id" name="razorpay_payment_id"><br>
    <input type="text" id="razorpay_order_id" name="razorpay_order_id"><br>
    <input type="text" id="razorpay_signature" name="razorpay_signature"><br>
    <input type="text" name="address_id" value="{{ $response['address_id'] }}"><br>
    <input type="text" name="order_total" value="{{ $response['order_total'] }}"><br>
    <input type="text" name="payment_method" value="{{ $response['payment_method'] }}"><br>
    <input type="submit" id="rzp-paymentresponse" value="Submit">
</form>


