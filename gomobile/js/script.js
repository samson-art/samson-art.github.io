/**
 * Created by artemsamsonov on 12.08.16.
 */


$(document).ready(function () {

    emailjs.init("user_keKpaaJnUstGauV1ddMed");

    $('input.form-text').keyup(function () {
        var len = $(this).val().length;
        $(this).attr({width: 'auto', size: (len > 10) ? len + 1 : 10});
    });
    $('button.send').click(function (e) {
        if (/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($('input[name="email"]').val())) {
            console.log('valid email');
            emailjs.send("gmail","template_7oUEdNjV", {
                name: $('input[name="name"]').val(),
                company: $('input[name="company"]').val(),
                target: $('input[name="target"]').val(),
                email: $('input[name="email"]').val()
            })
                .then(function(response) {
                    alert("Успешно. Мы свяжемся с Вами.");
                    location.reload();
                }, function(err) {
                    alert("FAILED. error= " + err);
                });
        } else {
            alert('Неверный email. Попробуйте снова.');
        }
    });

});