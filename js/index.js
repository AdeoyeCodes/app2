const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", function (e) {
    e.preventDefault();

    let handler = PaystackPop.setup({
        key: 'pk_test_a66203b1eed40865e5a58541e77c9d0dc0838502',
        email: document.getElementById("email-address").value,
        amount: 1900 * 100,
        currency: "NGN",
        ref: '' + Math.floor((Math.random() * 1000000000) + 1),
        onClose: function () {
            alert('Window closed.');
        },
        callback: function (response) {
            let message = 'Payment complete! Reference: ' + response.reference;
            alert(message);

            // Display success message and trigger redirection
            document.getElementById('successMessage').style.display = 'block';
        }
    });

    handler.openIframe();
});
