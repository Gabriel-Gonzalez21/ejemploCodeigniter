let logoAbire = document.getElementById('logoAbire');

//Reduce el tamaño del logo de Abire al hacer clic en el botón de toggle del sidebar
document.getElementById('sidebarToggle').addEventListener('click', function() {
    if (logoAbire.style.width === "150px") {
        logoAbire.style.width = "200px"; // Tamaño original del logo
    } else {
        logoAbire.style.width = "150px"; // Tamaño reducido del logo
    }
});