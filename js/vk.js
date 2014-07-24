function doIt(){
        /*
        VK.api('метод', {параметр: "значение"}, callback функция{
        // работаем с полученными данными
        });
        */

    VK.api("users.get", {fields: "photo_100"},function(data) {
        var photo_div = document.getElementById('user_photo');
        photo_div.innerHTML = "<img src="+data.response[0].photo_100+">";
    });
    VK.api("friends.get", {fields: "photo_100"}, function(data) {
        for (var i = Math.random()*data.response.length - 7, x=i+6; i < x; i++){
            var friends_div = document.getElementById('friends');
            friends_div.innerHTML += '<img class="friends" src="'+data.response[i].photo_100+'">';
        }
        var height=(document.body.scrollHeight > document.body.offsetHeight)?document.body.scrollHeight:document.body.offsetHeight;
    //Проверяем элемент body на наличие.
        if (!document.getElementById('body')) {
            alert('error');
            return;
        }
        // Успешно ли подключен ВК скрипт
        if (typeof VK.callMethod != 'undefined') {
        /*
        Вызываем функцию vk js api для управления окном.
        VK.callMethod('функция', параметры)
        В данном случае у нас - VK.callMethod('изменение_размеров_окна', ширина, высота);
        Так же добавляем еще 60 пикселей что бы было небольшое расстояние.
        */
            VK.callMethod('resizeWindow', 607, document.getElementById('body').clientHeight);
        } else {
        alert('error #2');
        }
    });

}