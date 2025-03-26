document.addEventListener("DOMContentLoaded", function () {
    const infoButton = document.getElementById("infoButton");
    
    if (infoButton) {
        infoButton.addEventListener("click", function () {
            alert("Más información sobre nuestros productos próximamente.");
        });
    }
});
