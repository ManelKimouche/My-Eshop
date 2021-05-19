
//handeling errors
const registerForm = document.querySelector('#register_form');
const fname = document.querySelector('#fname');
const lname = document.querySelector('#lname');
const address = document.querySelector('#address');
const email = document.querySelector('#email');
const psw = document.querySelector('#psw');
const psw_1 = document.querySelector('#psw1');
const msg = document.querySelector('.msg');
const msgFname = document.querySelector('.msg_fname');
const msgLname = document.querySelector('.msg_lname');
const msgAddress = document.querySelector('.msg_address');
const msgEmail = document.querySelector('.msg_email');
const msgPsw = document.querySelector('.msg_psw');
const msgPsw1 = document.querySelector('.msg_psw1');


registerForm.addEventListener('submit', onSubmit);
function onSubmit(e) {
    e.preventDefault();

    if (fname.value === '' || lname.value === '') {
        msg.classList.add('error');
        msg.innerHTML = 'Please enter all fields';
        setTimeout(() => msg.innerHTML = '', 3000);



    }
    if (fname.value.length < 3) {
        msgFname.classList.add('error');
        msgFname.innerHTML = 'First name must be 3 caracters at least!';
        setTimeout(() => msgFname.innerHTML = ' ', 3000);
    }
    if (lname.value.length < 3) {
        msgLname.classList.add('error');
        msgLname.innerHTML = 'Last name must be 3 caracters at least!';
        setTimeout(() => msgLname.innerHTML = ' ', 3000);
    }
    if (address.value.length < 3) {
        msgAddress.classList.add('error');
        msgAddress.innerHTML = 'Invalid address!';
        setTimeout(() => msgAddress.innerHTML = ' ', 3000);
    }
    if (psw.value.length < 8) {
        msgPsw.classList.add('error');
        msgPsw.innerHTML = 'Password must be at least 8 caracters!';
        msgPsw1.classList.add('error');
        msgPsw1.innerHTML = 'Password must be at least 8 caracters!';
        setTimeout(() => msgPsw.innerHTML = ' ', 3000);
        setTimeout(() => msgPsw1.innerHTML = ' ', 3000);



    } else if (psw.value !== psw_1.value) {
        msgPsw1.classList.add('error');
        msgPsw1.innerHTML = 're-taped password must be the same!';
        setTimeout(() => msgPsw1.innerHTML = ' ', 3000);

    }

    fname.value = '';
    lname.value = '';
    email.value = '';
    address.value = '';
    psw.value = '';
    psw_1.value = '';


}





$(document).ready(function () {
    // display the Selected dropdown li
    $(".dropdown-menu li a ").click(function (e) {
        var selText = $(this).text();
        $(this).parents('.input-group').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
    });

    //slide effect
    $('.btn_2, .dropdown-toggle').click(function () {
        $(this).next('.dropdown-menu ').slideToggle(500);
    });
    //login, register & product card popup pages
    // $(".login_trigger").click(function () {
    // $('.login_form').show();
    // });
    // $(".close_btn").click(function () {
    // $('.login_form').hide();
    // });

    // $(".register_trigger").click(function () {
    // $('.register_form').show();
    // });
    // $(".close_btn").click(function () {
    // $('.register_form').hide();
    // });

    // $(".product_trigger").click(function () {
    // $('.product_detail').show();

    // });
    // $(".close_btn").click(function () {
    // $('.product_detail').hide();
    // });
    var quantitiy = 0;
    $('.quantity-right-plus').click(function (e) {

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        $('#quantity').val(quantity + 1);


        // Increment

    });

    $('.quantity-left-minus').click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        // Increment
        if (quantity > 0) {
            $('#quantity').val(quantity - 1);
        }
    });


});



//trending items effects

const tabItems = document.querySelectorAll('.tab-item')
const tabContentItems = document.querySelectorAll('.tab-content-item');

function selectItem(e) {
    removeShow();
    //add content item from dom
    const tabContentItem = document.querySelector(`#${this.id}-content`);
    //add show class
    tabContentItem.classList.add('show');
}
function removeShow() {

    tabContentItems.forEach(item => item.classList.remove('show'));

}

tabItems.forEach(item => {
    item.addEventListener('click', selectItem);

});





