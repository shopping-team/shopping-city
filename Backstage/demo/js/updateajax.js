
var str = location.search;
var id = str.substr(1);
console.log(id);

// 修改
// debugger;
console.log(111);
// var e = JSON.parse(data);
// str = JSON.parse(data.replace(/'/g, '\"'));
// console.log(str);
(function goodsType() {
    $.ajax({
        url: "./../PHPMVC/index.php",
        type: "get",
        data: { 'c': 'updategoods', 'a': 'select', 'id': id, 'data': 0 },
        success: function (e) {
            console.log(e);
            var res = JSON.parse(e);
            $('#goods_name').val(res[0].goods_name);
            var html = '';
            for (var i = 0; i < res.length; i++) {
                // html += '<option value="' + res[i]['goodstype_id'] + '">' + res[i]['goodstype_name'] + '</option>';
            }
            console.log(html);
            // $('#sel1').html(html1);
        },
        error: function () {
            console.log("error");
        }
    })
})();
$(document).ready(function () {
    $('#sel1').change(function () {
        $.ajax({
            url: "./../PHPMVC/index.php",
            type: "get",
            data: { 'c': 'admgoods', 'a': 'select', 'id': $("#sel1 option:selected").val(), 'data': 0 },
            success: function (e) {
                // console.log(e);
                var res = JSON.parse(e);
                // console.log(res)
                var html = '';
                for (var i = 0; i < res.length; i++) {
                    html += '<option value="' + res[i]['caketype_id'] + '">' + res[i]['caketype'] + '</option>';
                }
                // console.log(html);
                $('#sel2').html(html);
            },
            error: function () {
                console.log("error");
            }
        })
    });
})

$('#submit').on('click', function () {
    // console.log($('#goods_name').val());
    var data = {
        'id': str.goods_id,
        'goods_name': $('#goods_name').val(),
        'price': $('#price').val(),
    };
    console.log(data);
    $.ajax({
        url: "./../PHPMVC/index.php",
        type: "get",
        data: { 'c': 'cake', 'a': 'update', 'id': 0, 'data': data },
        success: function (e) {
            console.log(e);
        }, 
        error: function () {
            console.log("error");
        }
    })
})