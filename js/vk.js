function doIt(){
        /*
        VK.api('метод', {параметр: "значение"}, callback функция{
        // работаем с полученными данными
        });
        */

    VK.api("users.get", function(data) {
                        var photo_div = document.getElementById('user_photo');
                        photo_div.innerHTML = "<img src="+data.response[0].photo_100+">";
    });
}