// Récupération de tous les boutons d'envoi de formulaire ayant la classe "form-validate"
const formSubmitButtons = document.querySelectorAll('.form-validate[type="submit"]');

// Ajout de l'événement "click" pour chaque bouton
formSubmitButtons.forEach(button => {
  button.addEventListener('click', event => {
    // Empêcher la soumission du formulaire par défaut
    event.preventDefault();

    // Demander une confirmation avant de soumettre le formulaire
    const confirmation = confirm("Confirmez-vous cette action ?");
    
    // Si l'utilisateur a confirmé, soumettre le formulaire
    if (confirmation) {
      event.target.form.submit();
    }
  });
});

