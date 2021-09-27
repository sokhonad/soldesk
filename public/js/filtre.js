window.onload = () => {
    const FiltersForm = document.querySelector("#user");

    // On boucle sur les input
    document.querySelectorAll("#user input").forEach(input => {
        input.addEventListener("change", () => {
            // Ici on intercepte les clics
            // On récupère les données du formulaire
            const Form = new FormData(FiltersForm);

            // On fabrique la "queryString"
            const Params = new URLSearchParams();

            Form.forEach((value, key) => {
                Params.append(key, value);
            })