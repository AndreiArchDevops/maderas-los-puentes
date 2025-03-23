### script.js
```js
document.addEventListener("DOMContentLoaded", function() {
    console.log("Página cargada correctamente");

    // Efecto de desplazamiento suave para los enlaces del menú
    document.querySelectorAll("nav a").forEach(anchor => {
        anchor.addEventListener("click", function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            target.scrollIntoView({ behavior: "smooth" });
        });
    });
});
