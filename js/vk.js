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
        for (var i = (Math.random()*data.response.length - 7) | 0, x=i+5; i < x; i++){
            var friends_div = document.getElementById('friends');
            friends_div.innerHTML += '<img class="friends" src="'+data.response[i].photo_100+'">';
        }
        var height=(document.body.scrollHeight > document.body.offsetHeight)?document.body.scrollHeight:document.body.offsetHeight;
        VK.callMethod('resizeWindow', 607, height);
    });
}