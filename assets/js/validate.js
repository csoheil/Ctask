document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector(".contact-form");

    form.addEventListener("submit", function (e) {

        const name = form.name.value.trim();
        const email = form.email.value.trim();
        const message = form.message.value.trim();

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!name || !email || !message) {
            alert("Please fill in all fields.");
            e.preventDefault();
            return;
        }

        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            e.preventDefault();
        }

    });

});