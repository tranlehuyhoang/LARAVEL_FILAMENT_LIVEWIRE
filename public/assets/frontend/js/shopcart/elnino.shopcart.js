function PostShopcart()
{
    window.location.href = "/gio-hang";
}
function LoadBigCart()
{
    $.ajax({
        url: '/Tool/ShowBigCart.aspx',
        data: '',
        dataType: 'text',
        type: 'GET',
        cache: false,
        success: function (result) {
            $("#showcart").html(result);
            LoadNumber();
            if (result != "<div class='alert alert-danger'>Không có sản phẩm nào</div>") {
                $("#regtongtin").removeClass("hide");
            }
        }
    });
}
function AddShopCart(_id, _name, _price, _num) {
    $.ajax({
        url: '/Tool/AddToCart.aspx',
        data: '_id=' + _id + '&_name=' + _name + '&_price=' + _price + '&_num=' + _num,
        dataType: 'text',
        type: 'GET',
        cache: false,
        success: function (result) {
            $("#myModal").modal("show");
            LoadShopCart(); LoadNumber();
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
}
function LoadShopCart() {
    $.ajax({
        url: '/Tool/ShowCart.aspx',
        data: '',
        dataType: 'text',
        type: 'GET',
        cache: false,
        success: function (result) {
            $("#showCrt").html(result);
        }
    });
}
function LoadNumber()
{
    $.ajax({
        url: '/Tool/CountItemShopCart.aspx',
        data: '',
        dataType: 'text',
        type: 'GET',
        cache: false,
        success: function (result) {
            $("#numcart").html(result); $("#numcart1").html(result);
        }
    });
}
function DeleteShpCrt(id) {
    $.ajax({
        url: '/Tool/DeleteShopCart.aspx',
        data: '_id=' + id,
        type: 'GET',
        cache: false,
        success: function (result) {
            if (result == 1) {
                LoadShopCart(); LoadNumber(); LoadBigCart();
                if($("#numcart1").html()=="1"){$("#regtongtin").addClass("hide");}
            }
        }
    });
}