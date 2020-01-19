function openDropdown(file_name) {
    document.getElementById(file_name).classList.toggle('show');
}

function openDropdownImg() {
    document.getElementById("ImgDropdown").classList.toggle("show");
}


window.onclick = function (event) {
    if (!event.target.matches('.drop')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}



