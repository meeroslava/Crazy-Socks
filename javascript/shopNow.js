
//change displayed items base on selection
document.getElementById('sockType').onchange = function () {
    var high = document.getElementsByClassName('highSocks');
    var low = document.getElementsByClassName('lowSocks');

    if(this.value == 'High'){
        $(high).css('display','block');
        $(low).css('display','none');

    }
    else if (this.value == 'Low'){
        $(low).css('display','block');
        $(high).css('display','none');
    }
    else if(this.value == 'All'){
        $(high).css('display','block');
        $(low).css('display','block');
    }


}