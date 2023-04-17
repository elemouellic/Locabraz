document.getElementById("photolink").addEventListener("change", function(){
    if(this.files.length > 5){
        alert("Vous ne pouvez pas sélectionner plus de 5 fichiers.");
        this.value = "";
    };
});