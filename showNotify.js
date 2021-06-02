const $ = id => document.getElementById(id);


$('main-form').addEventListener('change', e => {
    let isEmail = $('userEmail').value.match(/(.+@.+\..+)/)

    if(
        $('userName').value.length != 0 &&
        $('userEmail').value.length != 0 &&
        $('userMessage').value.length != 0 &&
        isEmail
    ) {
        $('alert').hidden = false;
    }
})