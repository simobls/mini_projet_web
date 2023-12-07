var updateButtons = document.querySelectorAll(".update-btn");

updateButtons.forEach(function(button) {
    button.addEventListener("click", function() {
        
        var targetId = button.getAttribute("data-target");

        
        var modal = document.getElementById(targetId);

        if (modal) {
            modal.style.display = "flex";
        }
    });
});