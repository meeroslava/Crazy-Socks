window.onload = function () {

    document.querySelector('.form button').addEventListener('click', function() {
        const name = document.querySelector('input[name=name]').value;
        const message = document.querySelector('input[name=message]').value;

        window.open(`https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=crazy.socks.bgu@gmail.com&subject=${name}&body=${message}`, 'blank');
    });
};