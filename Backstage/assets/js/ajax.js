


$.ajax({
    url: "./../PHPMVC/controllers/adminController.php",
    type: "get",
    data: {},
    success: function (e) {
        // console.log(e);
        var res = JSON.parse(e);
        console.log(res);
        var html = '';
        for (var i = 0; i < res.length; i++) {
            html += '<tr><td>' + res[i]['user_name'] + '</td><td>' + (res[i]['userinfo_sex'] == 0 ? '女' : '男') + '</td><td>' + res[i]['userinfo_tel'] + '</td><td>' + res[i]['userinfo_date'] + '</td></tr>';
        }
        console.log(html);
        $('#tab').html(html);
    },
    error: function () {
        console.log("error");
    }
})