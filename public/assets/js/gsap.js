var tl= gsap.timeline()
let zoom = {
    scale:0,
    opacity:0,
    duration:0.3
}
gsap.from('.navbar-brand',zoom);

gsap.from('.nav-link',{
    x:-100,
    scale:0,
    opacity:0,
    duration:0.6,
    delay:0.3
})

tl.from('.res-title',zoom)
tl.from('.res-sub',{
    y:50,
    opacity:0,
    stagger:0.2
})
tl.from('#hero-button',{
    opacity:0,
    duration:0.3
})
tl.from('#features,.owl-carousel',{
    y:50,
    opacity:0
})
