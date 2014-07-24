function doIt(){
        /*
        VK.api('метод', {параметр: "значение"}, callback функция{
        // работаем с полученными данными
        });
        */
    this.avtosize = function() {
            var height = document.body.clientHeight > document.body.scrollHeight ? document.body.clientHeight : document.body.scrollHeight;
            VK.callMethod("resizeWindow", 607, height);
    };
    this.avtosize();
    VK.api("users.get", {fields: "photo_100"},function(data) {
        var photo_div = document.getElementById('user_photo');
        photo_div.innerHTML = "<img class='photo' src="+data.response[0].photo_100+">";
    });
    VK.api("friends.get", {fields: "photo_100"}, function(data) {
        for (var i = (Math.random()*data.response.length - 7) | 0, x=i+5; i < x; i++){
            this.create_img(data.response[i]);
        }
    }.bind(this));
    this.create_img = function (user) {
        var img = document.createElement('img');
        img.onclick = function(){
            VK.callMethod('showInviteBox');
        }.bind(VK);
        img.src = user.photo_100;
        img.title = user.first_name + ' ' + user.last_name;
        img.className = 'photo';
        img.onload = function () {
            this.avtosize();
        }.bind(this);
        document.getElementById('friends').appendChild(img);
    }.bind(this);
 }