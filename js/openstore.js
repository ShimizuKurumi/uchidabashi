document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(ScrollTrigger);

    ScrollTrigger.create({
        trigger: ".sub-head__text",
        start: "top center",
        onEnter: () => {
            gsap.utils.toArray(".card--flex__content").forEach((el, index) => {
                gsap.to(el, {
                    opacity: 1,
                    y: 0,
                    duration: 0.2,
                    delay: index * 0.3,
                    ease: "ease",
                    markers: true,
                });
            });
        },
    });
});
