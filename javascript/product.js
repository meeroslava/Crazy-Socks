
//change displayed items base on selection
document.querySelector('.rating').onclick = function (e) {
    if(e.target.nodeName === "INPUT") {
        document.getElementById('form-rating').submit();
    }
};