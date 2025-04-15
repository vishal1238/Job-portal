function showform(formId){
    document.querySelectorAll(".form-box").forEach(form=> form.classList.remove("active"));
    document.getElementById(formId).classList.add("active");
}