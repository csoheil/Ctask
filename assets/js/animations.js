document.addEventListener("DOMContentLoaded", () => {

    const animatedElements = document.querySelectorAll(".reveal");

    const observer = new IntersectionObserver(
        (entries) => {

            entries.forEach((entry) => {

                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                }

            });

        },
        {
            threshold: 0.15
        }
    );


    animatedElements.forEach((element) => {
        observer.observe(element);
    });

});