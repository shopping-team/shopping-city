

$.ajax({
    url: "./../PHPMVC/index.php",
    type: "get",
    data: { 'c': 'drink', 'a': 'select', 'id': 0, 'data': 0 },
    success: function (e) {
        // debugger
        // console.log(e);
        var res = JSON.parse(e);
        // console.log(res);
        var html = '';
        for (var i = 0; i < res.length; i++) {
            if (res[i]['goods_id'] != null) {
                html += '<tr><td>' + res[i]['goods_name'] + '</td><td>' + res[i]['caketype'] + '</td><td>' + res[i]['price'] + '</td><td><button onclick="update(' + JSON.stringify(JSON.stringify(res[i])).replace(/\"/g, '\'') + ')" style="background:yellowgreen;color:white">修改</button></td><td><button onclick="del(' + res[i]['goods_id'] + ')" style="background:red;color:white">删除</button></td></tr>';
                // console.log(res[i]);
            }
        }
        // console.log(html);
        $('#tab').html(html);
    },
    error: function () {
        console.log("error");
    }
})


$('#add').on('click', function () {
    console.log(000);
    $('#addmask').show();
    $('#cancel').on('click', function () {
        $('#addmask').hide();
    });
    $('#submit').on('click', function () {
        $.ajax({
            url: "./../PHPMVC/index.php",
            type: "get",
            data: { 'c': 'drink', 'a': 'del', 'id': id, 'data': 0 },
            success: function (e) {
                console.log(e);
                var res = JSON.parse(e);
                var html = '';
                for (var i = 0; i < res.length; i++) {
                    html += 'sel';
                }
                $('#sel').html(html);
            },
            error: function () {
                console.log("error");
            }
        })
        $('#addmask').hide();
    })
})

function del(id) {
    console.log(2222);
    $('#delmask').show();
    $('#cancel_').on('click', function () {
        $('#delmask').hide();
    });
    $('#confirm').on('click', function () {
        $.ajax({
            url: "./../PHPMVC/index.php",
            type: "get",
            data: { 'c': 'drink', 'a': 'del', 'id': id, 'data': 0 },
            success: function (e) {
            },
            error: function () {
                console.log("error");
            }
        })
        $('#delmask').hide();
    })
}