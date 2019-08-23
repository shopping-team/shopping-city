

$.ajax({
    url: "./../PHPMVC/index.php",
    type: "get",
    data: { 'c': 'goodstype', 'a': 'selectall', 'id': 0, 'data': 0 },
    success: function (e) {
        // console.log(e);
        var res = JSON.parse(e);
        var html = '';
        for (var i = 0; i < res.length; i++) {
            html += '<li><a class="J_menuItem" href="goods.html?'+res[i]['goodstype_id']+'">'+res[i]['goodstype_name']+'</a> </li>';
        }
        // console.log(html);
        $('#goodstypemenu').html(html);
    },
    error: function () {
        console.log("error");
    }
})