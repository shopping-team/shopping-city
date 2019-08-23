


$.ajax({
    url: "./../PHPMVC/index.php",
    type: "get",
    data: { 'c': 'admin', 'a': 'select', 'id': 0, 'data': 0 },
    success: function (e) {
        // debugger
        console.log(e);
        var res = JSON.parse(e);
        // console.log(res);
        var html = '';
        for (var i = 0; i < res.length; i++) {
            html += '<tr><td>' + res[i]['user_name'] + '</td><td>' + (res[i]['userinfo_sex'] == 0 ? '女' : '男') + '</td><td>' + res[i]['userinfo_tel'] + '</td><td>' + res[i]['userinfo_date'] + '</td></tr>';
        }
        // console.log(html);
        $('#tab').html(html);
    },
    error: function () {
        console.log("error");
    }
})