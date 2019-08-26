
var str = location.search;
var id = str.substr(1);
// console.log(id);
// 查询
$.ajax({
    url: "./../PHPMVC/index.php",
    type: "get",
    data: { 'c': 'goods', 'a': 'select', 'id': id, 'data': 0 },
    success: function (e) {
        // debugger
        console.log(e);
        var res = JSON.parse(e);
        // console.log(res);
        var html = '';
        for (var i = 0; i < res.length; i++) {
            if (res[i]['goods_name'] != null) {
                html += '<tr><td>' + res[i]['img'] + '</td><td>' + res[i]['goods_name'] + '</td><td>' + res[i]['tastetype_name'] + '</td><td>' + res[i]['price_standard'] + '</td><td>' + res[i]['price_standard'] + '</td><td><button onclick="update(' + JSON.stringify(JSON.stringify(res[i])).replace(/\"/g, '\'') + ')" style="background:yellowgreen;color:white"><a href="update.html?' + res[i]['goods_id'] + '">修改</a></button></td><td><button onclick="del(' + res[i]['goods_id'] + ')" style="background:red;color:white">删除</button></td></tr>';
            }
        }
        // console.log(html);
        $('#tab').html(html);
    },
    error: function () {
        console.log("error");
    }
})


// 删除
function del(id) {
    // console.log($('#delmask')[0]);
    $('#delmask').show();
    $('#cancel_').on('click', function () {
        console.log(111);
        $('#delmask').hide();
    });
    $('#confirm').on('click', function () {
        $.ajax({
            url: "./../PHPMVC/index.php",
            type: "get",
            data: { 'c': 'goods', 'a': 'del', 'id': id, 'data': 0 },
            success: function (e) {
                console.log(e);
            },
            error: function () {
                console.log("error");
            }
        })
        $('#delmask').hide();
    })
}