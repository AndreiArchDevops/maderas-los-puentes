document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("infoButton").addEventListener("click", function() {
        alert("Más información sobre nuestros productos próximamente.");
    });
    
    document.getElementById("visitButton").addEventListener("click", function() {
        window.open("https://www.google.com/maps?q=MADERAS+LOS+PUENTES", "_blank");
    });
});
