function openForm(formID) {
    document.getElementById(formID).classList.remove('hide-form');
}

function closeForm(formID) {
    document.getElementById(formID).classList.add('hide-form');
}

function submitForm(formID) {
    document.getElementById(formID).submit();
}