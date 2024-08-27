document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(ScrollTrigger);

    ScrollTrigger.create({
        trigger: ".event__title",
        start: "bottom bottom",
        onEnter: () => gsap.to(".event__info", {
            opacity: 1,
            x: 0,
            duration: 0.7
        }),
        onLeave: () => gsap.to(".event__info", {
            opacity: 0,
            x: 100,
            duration: 0.7
        }),
        onEnterBack: () => gsap.to(".event__info", {
            opacity: 1,
            x: 0,
            duration: 0.7
        }),
        onLeaveBack: () => gsap.to(".event__info", {
            opacity: 0,
            x: 100,
            duration: 0.7
        })
    });

    ScrollTrigger.create({
        trigger: ".storeInfo__title",
        start: "top center",
        onEnter: () => gsap.to(".event__info", {
            opacity: 0,
            x: 100,
            duration: 0.7
        })
    });
});
