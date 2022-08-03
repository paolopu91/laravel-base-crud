const { result } = require("lodash");

// console.log("Funziona!!!");
window.addEventListener("DOMContentLoaded", function() {
    const forms = document.querySelectorAll(".form-delete")

    // console.log(forms);

    for (const form of forms) {
        console.log(form);
        form.addEventListener("submit", function(e){
            e.preventDefault();
            const result = confirm("Are you sure do you want DELETE this element?");

            if(result){
                form.submit();
            }
        })
    }
});

