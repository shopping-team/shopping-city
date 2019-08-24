//渲染订单所属商品
$.ajax({
    url: '../PHPMVC/index_.php',
    type: 'post',
    data: {
        'c': 'orderDetail',
        'a': 'anotherSelect',
        'sql': 'select a.orderdetail_id,d.img,d.goods_name,a.goods_num,e.goodstype_name,b.order_time,d.price_standard,c.user_name from `order_detail` as a left join `order` as b on a.order_id=b.order_id left join `user` as c on b.user_id = c.user_id left join `goods` as d  on a.goods_id = d.goods_id left join `goodstype` as e on d.goodstype_id = e.goodstype_id'
    },
    success: function(e) {
        $data = JSON.parse(e); 
        var html = "";
        var html2 = "";
        var str =$data[0]['price_standard'].replace(/'/g, '"');
        var goods_price = JSON.parse(str)[0]['size_value'][0]['shop_price'];
        for (var i = 0; i < $data.length; i++) {
            html += `<tr><td><img src="images/实验.jpg"><a>${$data[i]['goods_name']}</a><span>&emsp;规格<span>908g</span><span>(2.0英镑)</span></span></td><td><span>￥</span>${goods_price.toFixed(2)}</td><td>${$data[i]['goods_num']}</td><td><span>￥</span>${(goods_price.toFixed(2))*($data[i]['goods_num'])}</td></tr>`;
        }
        html2 = `<ul> <li>商品余额<span>￥<span>${goods_price.toFixed(2)}</span></span></li> <li>配送费<span>￥<span>00.00</span></span></li><li>实收金额<span>￥<span>${goods_price.toFixed(2)}</span></span></li><li>支付金额<span>￥<span>${goods_price.toFixed(2)}</span></span></li></ul><p>你总共需要支付  <span>￥<span>${goods_price.toFixed(2)}</span></span></p><button id='seet_accounts' onclick="userPay()">下单结算</button>`;
        $('.order_goods_good').html(html);
        $('.order_price').append(html2);
    },
    error: function() {
        console.log('服务器故障');
    }
});
//三级联动
(function province() {
    $.ajax({
        url: '../PHPMVC/index_.php',
        type: 'post',
        data: {
            'c': 'orderDetail',
            'a': 'anotherSelect',
            'sql': 'select * from `address_province`'
        },
        success: function(e) {
            var area_data = JSON.parse(e);
            var html = "";
            for (var i = 0; i < area_data.length; i++) {
                html += `<option value="${area_data[i]['province_code']}">${area_data[i]['province_name']}</option>`;
            }
            $('#address_province').html(html);
        },
        error: function() {
            console.log('服务器故障');
        }
    });
})();
$(document).ready(function() {
    $('#address_province').change(function() {
        city();
    });
    $('#address_city').change(function() {
        area();
    });
})

function city() {
    $.ajax({
        url: '../PHPMVC/index_.php',
        type: 'post',
        data: {
            'c': 'orderDetail',
            'a': 'anotherSelect',
            'sql': 'select * from `address_city` as a where  a.province_code = ' + $("#address_province option:selected").val()
        },
        success: function(e) {
            var area_data = JSON.parse(e);
            var html = "";
            for (var i = 0; i < area_data.length; i++) {
                html += `<option value="${area_data[i]['city_code']}">${area_data[i]['city_name']}</option>`;
            }
            $('#address_city').html(html);
        },
        error: function() {
            console.log('服务器故障');
        }
    });
}

function area() {
    $.ajax({
        url: '../PHPMVC/index_.php',
        type: 'post',
        data: {
            'c': 'orderDetail',
            'a': 'anotherSelect',
            'sql': 'select * from `address_town`  where  address_town.city_code =' + $("#address_city option:selected").val()
        },
        success: function(e) {
            var area_data = JSON.parse(e);
            var html = "";
            for (var i = 0; i < area_data.length; i++) {
                html += `<option value="${area_data[i]['town_code']}">${area_data[i]['town_name']}</option>`;
            }
            $('#address_area').html(html);
        },
        error: function() {
            console.log('服务器故障');
        }
    });
}

function userPay() {
    window.location.href = 'http://localhost/shopping-city/web/user_pay.html';
}
//随机生成订单号
function random_No(j) {
    var random_no = "";
    for (var i = 0; i < j; i++) //j位随机数，用以加在时间戳后面。
    {
        random_no += Math.floor(Math.random() * 10);
    }
    random_no = new Date().getTime() + random_no;
    return random_no;
};
