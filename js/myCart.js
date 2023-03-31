function addToCart(id){
    console.log('add ' + id);
    $.ajax({
        async: false,
        type: "POST",
        url: "../ajax/cart.php",
        dataType: "text",
        data: 'action=add&id=' + id,
        error: function () {
            alert("Не удалось добавить товар в корзину");
        },
        success: function (response){
            alert('Добавлено в корзину ');
        }
    });
}
function showCart(){
    console.log('show');
    $.ajax({
        async: false,
        type: "POST",
        url: "ajax/cart.php",
        dataType: "text",
        data: 'action=show',
        error: function () {
            alert("Произошла неизвестная ошибка");
        },
        success: function (response){
            $('#in-check').html(response);
        }
    });
}
function delFromCart(id){
    console.log('del ' + id);
    $.ajax({
        async: false,
        type: "POST",
        url: "ajax/cart.php",
        dataType: "text",
        data: 'action=del&id=' + id,
        error: function () {
            alert("Произошла ошибка");
        },
        success: function (response){
            showCart();
            console.log(response);
        }
    });
}