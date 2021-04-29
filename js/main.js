


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


});




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
