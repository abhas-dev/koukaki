/**
 * Calcul la position de l'element par rapport au haut de la page
 * @param {HTMLElement} element
 * @return {number}
 */
function offsetTop(element) {
    let top = 0;
    do {
        top += element.offsetTop;
    } while (element = element.offsetParent);
    return top;
}

class CloudParallax {
    constructor(element) {
        this.element = element;
        this.ratio = 0.5;
        this.direction = 'right';
        this.isVisible = false;

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                this.isVisible = entry.isIntersecting;
                this.isVisible ? this.start() : this.stop();
            });
        }, { threshold: 0});

        observer.observe(this.element);
        document.addEventListener('scroll', this.onScroll);
    }

    onScroll = () => {
        const screenTop = window.scrollY + window.innerHeight / 2; // Calcule la position verticale du milieu de la page
        const elementOffsetTop = offsetTop(this.element); // On ajoute le 1/2 de la hauteur de l'élément pour avoir le milieu de l'élément car le offsetTop est le haut de l'élément
        const diffY = elementOffsetTop - screenTop;
        const translateX = diffY * -1 * this.ratio;

        if (Math.abs(translateX) > 300) {
            this.element.style.transform = `translateX(${300 * (translateX > 0 ? 1 : -1)}px)`;
        } else {
            this.element.style.transform = `translateX(${translateX}px)`;
        }
    };

    /**
     * Applique le parallax sur tous les éléments ayant la classe .clouds
     * @return {CloudParallax[]}
     * @static
     */
    static bind() {
        return Array.from(document.querySelectorAll('.clouds')).map(element => new CloudParallax(element)); // Retourne un tableau d'instances de CloudParallax
    };
}

CloudParallax.bind();