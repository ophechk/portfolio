function togglePDFLinks() {
    const pdfLinks = document.getElementById("pdfLinks");
    const button = document.querySelector(".toggle-btn");

    if (pdfLinks.style.display === "none" || pdfLinks.style.display === "") {
        pdfLinks.style.display = "block";
        button.textContent = "Masquer";
    } else {
        pdfLinks.style.display = "none";
        button.textContent = "Afficher";
    }
}


