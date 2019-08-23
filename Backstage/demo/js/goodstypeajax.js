

// 查询
$.ajax({
    url: "./../PHPMVC/index.php",
    type: "get",
    data: { 'c': 'goodstype', 'a': 'selectall', 'id': 0, 'data': 0 },
    success: function (e) {
        // debugger
        // console.log(e);
        var res = JSON.parse(e);
        // console.log(res);
        var html = '';
        for (var i = 0; i < res.length; i++) {
            html += '<tr><td>' + res[i]['goodstype_name'] + '</td><td><button onclick="update(' + JSON.stringify(JSON.stringify(res[i])).replace(/\"/g, '\'') + ')" style="background:yellowgreen;color:white">修改</button></td><td><button onclick="del(' + res[i]['goodstype_id'] + ')" style="background:red;color:white">删除</button></td></tr>';
        }
        // console.log(html);
        $('#tab').html(html);
    },
    error: function () {
        console.log("error");
    }
})


// 修改
function update(data) {
    str = JSON.parse(data.replace(/'/g, '\"'));
    // console.log(str);
    $('#addmask').show();
    $('#cancel').on('click', function () {
        $('#addmask').hide();
    });
    $.ajax({
        url: "./../PHPMVC/index.php",
        type: "get",
        data: { 'c': 'goodstype', 'a': 'selectall', 'id': 0, 'data': 0 },
        success: function (e) {
            // console.log(e);
            var res = JSON.parse(e);
            // console.log(str.goodstype_name);
            $('#goodstype_name').val(str.goodstype_name);
        },
        error: function () {
            console.log("error");
        }
    })

    $('#submit').on('click', function () {
        var data = {
            'id': str.goodstype_id,
            'goodstype_name': $('#goodstype_name').val()
        };
        // console.log(data);
        $.ajax({
            url: "./../PHPMVC/index.php",
            type: "get",
            data: { 'c': 'goodstype', 'a': 'update', 'id': 0, 'data': data },
            success: function (e) {
                var str=e.substr(e.length-1);
                console.log(str);
                if(str==='0'||str==='1'){
                    alert('修改成功！');
                }else{
                    alert('修改失败！');
                }
            },
            error: function () {
                console.log("error");
            }
        })
        $('#addmask').hide();
    })
}

// 添加
$('#add').on('click', function () {
    console.log($('#goodstype_name').val());
    $('#addmask').show();
    $('#cancel').on('click', function () {
        $('#addmask').hide();
    });
    $('#submit').on('click', function () {
        var data = {
            'goodstype_name': $('#goodstype_name').val()
        };
        $.ajax({
            url: "./../PHPMVC/index.php",
            type: "get",
            data: { 'c': 'goodstype', 'a': 'add', 'id': 0, 'data': data },
            success: function (e) {
                console.log(e);
            },
            error: function () {
                console.log("error");
            }
        })
        $('#addmask').hide();
    })
})

// 删除
function del(id) {
    // console.log(id);
    $('#delmask').show();
    $('#cancel_').on('click', function () {
        $('#delmask').hide();
    });
    $('#confirm').on('click', function () {
        $.ajax({
            url: "./../PHPMVC/index.php",
            type: "get",
            data: { 'c': 'goodstype', 'a': 'del', 'id': id, 'data': 0 },
            success: function (e) {
                if(e==1){
                    alert('删除成功！');
                }else{
                    alert('删除失败！');
                }
            },
            error: function () {
                console.log("error");
            }
        })
        $('#delmask').hide();
    })
}