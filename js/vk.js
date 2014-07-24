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
            create_img(data.response[i]);
        }
        var height=(document.body.scrollHeight > document.body.offsetHeight)?document.body.scrollHeight:document.body.offsetHeight;
        VK.callMethod('resizeWindow', 607, height+100);
    });
}
function create_img(user) {
    var img = document.createElement('img');
    img.onclick = function(){
        VK.callMethod('showInviteBox()');
    }.bind(document);
    img.src = user.photo_100;
    img.alt = user.first_name + ' ' + user.last_name;
    img.className = 'friends';
    document.getElementById('friends').appendChild(img);
}