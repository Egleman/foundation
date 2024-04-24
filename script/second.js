const calcScroll = () => {
    let div = document.createElement('div');
    div.style.width = '500px';
    div.style.height = '500px';
    div.style.overflowY = 'scroll';
    div.style.visibility = 'hidden';
    document.body.appendChild(div);
    let scrollWidth = div.offsetWidth - div.clientWidth;
    div.remove();
    return scrollWidth;
}
const blockBody = () => {
    const body = document.body;
    body.style.overflowY = 'hidden';
    body.style.touchAction = 'none';
    const bodyScroll = calcScroll();
    body.style.paddingRight = `${bodyScroll}px`;
}
const unBlockBody = () => {
    const body = document.body;
    body.style.overflowY = 'auto';
    body.style.touchAction = 'auto';
    body.style.paddingRight = `0`;
}
const header = () => {
    const headerBurgerBtn = document.querySelector('.header__burger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeMenuBtn = document.querySelector('.mobile-menu__close');

    const closeActions = (modal) => {
        if (modal.classList.contains('active')) {
            modal.classList.remove('active');
            modal.classList.add('close');
            unBlockBody();
            setTimeout(() => {
                if (modal.classList.contains('close')) {
                    modal.classList.remove('close')
                }
            }, 600)
        }
    }

    headerBurgerBtn.addEventListener('click', () => {
        mobileMenu.classList.add('active');
        blockBody();
    })

    closeMenuBtn.addEventListener('click', () => {
        closeActions(mobileMenu);
    })
    mobileMenu.addEventListener('click', (e) => {
        if (!e.target.closest('.mobile-menu__body')) {
            closeActions(mobileMenu);
        }
    })
    const scrollLinks = document.querySelectorAll('[scroll]');
    scrollLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const blockId = link.getAttribute('href');
        document.querySelector(blockId).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
        closeActions(mobileMenu)
    })
})
}
header();


const phoneInputs = document.querySelectorAll('[data-input="masked"]');
const im = new Inputmask({
    mask: '(+7|8) (999) 999-99-99',
    showMaskOnHover: false,
    showMaskOnFocus: false,
    jitMasking: true,
    inputmode: 'tel'
})
phoneInputs.forEach(input => {
    im.mask(input);
})


const servicesSlider = new Swiper('.services__swiper', {
    spaceBetween: 0,
    navigation: {
        nextEl: '.services__button.right',
        prevEl: '.services__button.left',
    },
    loop: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        606: {
            slidesPerView: 2,
        },
        960: {
            slidesPerView: 4,
        },
    },
});

class Accordion {
    constructor(target, config) {
        this._el = typeof target === 'string' ? document.querySelector(target) : target;
        const defaultConfig = {
            alwaysOpen: true,
            duration: 350
        };
        this._config = Object.assign(defaultConfig, config);
        this.addEventListener();
    }
    addEventListener() {
        this._el.addEventListener('click', (e) => {
            const elHeader = e.target.closest('.accordion__header');
            if (!elHeader) {
                return;
            }
            this.toggle(elHeader.parentElement);
        });
    }
    show(el) {
        const elBody = el.querySelector('.accordion__body');
        if (elBody.classList.contains('collapsing') || el.classList.contains('accordion__item_show')) {
            return;
        }
        elBody.style.display = 'block';
        const height = elBody.offsetHeight;
        elBody.style.height = 0;
        elBody.style.overflow = 'hidden';
        elBody.style.transition = `height ${this._config.duration}ms ease`;
        elBody.classList.add('collapsing');
        el.classList.add('accordion__item_slidedown');
        elBody.offsetHeight;
        elBody.style.height = `${height}px`;
        window.setTimeout(() => {
            elBody.classList.remove('collapsing');
            el.classList.remove('accordion__item_slidedown');
            elBody.classList.add('collapse');
            el.classList.add('accordion__item_show');
            elBody.style.display = '';
            elBody.style.height = '';
            elBody.style.transition = '';
            elBody.style.overflow = '';
        }, this._config.duration);
    }
    hide(el) {
        const elBody = el.querySelector('.accordion__body');
        if (elBody.classList.contains('collapsing') || !el.classList.contains('accordion__item_show')) {
            return;
        }
        elBody.style.height = `${elBody.offsetHeight}px`;
        elBody.offsetHeight;
        elBody.style.display = 'block';
        elBody.style.height = 0;
        elBody.style.overflow = 'hidden';
        elBody.style.transition = `height ${this._config.duration}ms ease`;
        elBody.classList.remove('collapse');
        el.classList.remove('accordion__item_show');
        elBody.classList.add('collapsing');
        window.setTimeout(() => {
            elBody.classList.remove('collapsing');
            elBody.classList.add('collapse');
            elBody.style.display = '';
            elBody.style.height = '';
            elBody.style.transition = '';
            elBody.style.overflow = '';
        }, this._config.duration);
    }
    toggle(el) {
        el.classList.contains('accordion__item_show') ? this.hide(el) : this.show(el);
    }
}
const accordions = document.querySelectorAll('.accordion');
accordions.forEach(accordion => {
    new Accordion(accordion, {
        alwaysOpen: false
    });
})

const heightHero = document.querySelector('.hero').scrollHeight;
const heightServices = document.querySelector('.services').scrollHeight;
const heightHeader = document.querySelector('.header').scrollHeight;

const btn = document.querySelector('.button-top');

let sumHeight = heightHero + heightServices;


function magic() {
    if (window.pageYOffset > sumHeight) {
        btn.style.display = 'flex';
    } else {
        btn.style.display = 'none';
    }
}

btn.addEventListener('click', (e) => {
    e.preventDefault();
    const blockId = btn.getAttribute('href');
    document.querySelector(blockId).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
    });
});
window.addEventListener('scroll', () => {
    magic();
});

for (let e of document.querySelectorAll('input[type="range"].slider-progress')) {
    e.style.setProperty('--value', e.value);
    e.style.setProperty('--min', e.min == '' ? '1' : e.min);
    e.style.setProperty('--max', e.max == '' ? '25' : e.max);
    e.addEventListener('input', () => e.style.setProperty('--value', e.value));
}
const rangeInputs = document.querySelectorAll('input[type="range"]');
const inputBabbles = document.querySelectorAll('.bubble');

rangeInputs.forEach((input, index) => {
    const val = input.value;
    inputBabbles[index].innerHTML = val;

    const newValue = Number( (input.value - input.min) * 100 / (input.max - input.min) )
    const newPosition = 10 - (newValue * 0.2);

    inputBabbles[index].style.left =  `calc(${newValue}% + (${newPosition}px))`;
    input.addEventListener('input', () => {
        const val = input.value;
        inputBabbles[index].innerHTML = val;

        const newValue = Number( (input.value - input.min) * 100 / (input.max - input.min) )
        const newPosition = 10 - (newValue * 0.2);

        inputBabbles[index].style.left =  `calc(${newValue}% + (${newPosition}px))`;
    })
})