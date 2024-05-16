document.addEventListener("DOMContentLoaded", function() {
    var modal = document.getElementById("cookie-settings-modal");
    var btn = document.getElementById("cookie-settings-btn");
    var closeBtn = document.getElementsByClassName("close-btn")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    closeBtn.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});
