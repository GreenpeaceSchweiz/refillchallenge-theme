document.addEventListener("DOMContentLoaded", function(event) { 

    var svgTween = new TimelineMax({ delay: 2, repeat: -1 });

    svgTween.set('.t-mask', { x: 170, y: 200, opacity: 0 });
    svgTween.set('.e-mask', { x: 170, y: 150, opacity: 0 });
    svgTween.set('.i-mask', { x: 170, y: 200, opacity: 0 });
    svgTween.set('.l-mask', { x: 200, y: 100, opacity: 0 });
    svgTween.set('.e2-mask', { x: 170, y: 200, opacity: 0 });
    svgTween.set('.r-mask', { x: 120, y: 250, opacity: 0 });
    svgTween.set('.d-mask', { x: 120, y: 460, opacity: 0 });
    svgTween.set('.l2-mask', { x: 200, y: 140, opacity: 0 });

    svgTween.to('.t-mask', 1, { y: 140, opacity: 1, ease: "power3. out" })
        .to('.t-mask', 1, { y: 210, opacity: 1, ease: "power3. out" })
        .to('.e-mask', 1, { y: 50, opacity: 1, ease: "power3. out" })
        .to('.e-mask', 1, { y: 150, opacity: 1, ease: "power3. out" })
        .to('.i-mask', 1, { y: 140, opacity: 1, ease: "power3. out" })
        .to('.i-mask', 1, { y: 210, opacity: 1, ease: "power3. out" }) 
        .to('.l-mask', 1, { y: 0, opacity: 1, ease: "power3. out" })
        .to('.l-mask', 1, { y: 100, opacity: 1, ease: "power3. out" })
        .to('.e2-mask', 1, { y: 105, opacity: 1, ease: "power3. out" })
        .to('.e2-mask', 1, { y: 210, opacity: 1, ease: "power3. out" })
        .to('.r-mask', 1, { y: 50, opacity: 1, ease: "power3. out" })
        .to('.r-mask', 1, { y: 150, opacity: 1, ease: "power3. out" })
        .to('.d-mask', 1, { y: 350, opacity: 1, ease: "power3. out" })
        .to('.d-mask', 1, { y: 460, opacity: 1, ease: "power3. out" }) 
        .to('.l2-mask', 1, { y: 0, opacity: 1, ease: "power3. out" })
        .to('.l2-mask', 1, { y: 140, opacity: 1, ease: "power3. out" });

});