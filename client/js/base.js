if (window.matchMedia('(min-width: 620px)').matches) {
    const advert = document.getElementById('adblock');
    const hideClasses = [
        'hidden',
        'd-none',
        'invisible',
        'dontshow',
        'noshow'
    ]
    if (advert) {
        hideClasses.forEach(hideClass => {
            advert.classList.remove(hideClass)
        });
    }
}
