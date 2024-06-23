let btnLeft = document.querySelector('#leftArr')
let btnRight = document.querySelector('#rightArr')
let carousel = document.querySelector('#carouselContainer')
let carouselItems = document.querySelectorAll('.carousel-item')

function scrollAmount(){
    let carouselContainerStyle = getComputedStyle(carousel);
    let gap = parseInt(carouselContainerStyle.gap);
    let scrollAmount = carouselItems[0].clientWidth + gap
    return scrollAmount
}

btnRight.addEventListener('click', (e) => {
    carousel.scrollBy({ left: scrollAmount(), behavior: "smooth" })
})

btnLeft.addEventListener('click', (e) => {
    carousel.scrollBy({ left: -scrollAmount(), behavior: "smooth" })
})