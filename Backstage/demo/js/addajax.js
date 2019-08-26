

// 添加
// console.log(123);
// debugger;
// console.log(data);
// var e = JSON.parse(data);
// str = JSON.parse(data.replace(/'/g, '\"'));
// console.log(str);
(function goodsType() {
    $.ajax({
        url: "./../PHPMVC/index.php",
        type: "get",
        data: { 'c': 'admgoods', 'a': 'selectall', 'id': 0, 'data': 0 },
        success: function (e) {
            // console.log(e);
            var res = JSON.parse(e);
            // console.log(str.goods_name);
            var html = '';
            for (var i = 0; i < res.length; i++) {
                html += '<option value="' + res[i]['goodstype_id'] + '">' + res[i]['goodstype_name'] + '</option>';
            }
            // console.log(html);
            $('#sel1').html(html);
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
                // console.log(res[i]['tastetype_id']);
                    html += '<option value="' + res[i]['tastetype_id'] + '">' + res[i]['tastetype_name'] + '</option>';
                }
                $('#sel2').html(html);
            },
            error: function () {
                console.log("error");
            }
        })
    });
})

$('#submitbtn').on('click', function () {
    console.log(222);
    // console.log($('#goods_name').val());
    var standard = $('#standard').val();
    var standards = standard.split(',');
    // console.log(standard);
    var goodsoriginalprice = $('#goodsoriginalprice').val();
    var goodsoriginalprices = goodsoriginalprice.split(',');

    var goodssellingprice = $('#goodssellingprice').val();
    var goodssellingprices = goodssellingprice.split(',');

    var standards_ = '';
    var goodsoriginalprices_ = '';
    var goodssellingprices_ = '';
    var specificationval = [];
    // console.log($('#goods_name').val());
    for (var i = 0; i < standards.length; i++) {
        // standards_ += parseInt(standards[i]);
        // goodsoriginalprices_ += goodsoriginalprices[i];
        // goodssellingprices_ += goodssellingprices[i];
        specificationval.push({'standard': standards[i], 'goodsoriginalprice': parseFloat(goodsoriginalprices[i]), 'goodssellingprice': parseFloat(goodssellingprices[i])});
        // console.log(parseInt(standards[i]), goodsoriginalprices[i], goodssellingprices[i]);
    }
        // console.log(specificationval);
        // var specificationvals=JSON.stringify(specificationval);
    var data = {
        'goods_name': $('#goods_name').val(),
        'goodstype_id': $("#sel1 option:selected").val(),
        'tastetype_id': $("#sel2 option:selected").val(),
        'price_standard': [{
            'specification': $('#unit').val(), 'specificationval': specificationval
        }]
    };
    // console.log(data);
    $.ajax({
        url: "./../PHPMVC/index.php",
        type: "get",
        data: { 'c': 'goods', 'a': 'add', 'id': 0, 'data': data },
        success: function (e) {
            console.log(e);
        },
        error: function () {
            console.log("error");
        }
    })
})

$('#cancelbtn').on('click', function () {
    console.log(111);
})