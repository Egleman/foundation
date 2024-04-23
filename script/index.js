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
}
header();

const scrollLinks = document.querySelectorAll('[scroll]');
scrollLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const blockId = link.getAttribute('href');
        document.querySelector(blockId).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    })
})

const modalLinks = document.querySelectorAll('[toggle]');
modalLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const blockId = link.getAttribute('toggle');
        document.querySelector(blockId).classList.toggle('active');
        if (document.querySelector(blockId).classList.contains('active')) {
            blockBody();
        } else {
            unBlockBody();
        }
    })
})

const form = document.querySelector('.modal__form');
const formErrors = document.querySelectorAll('.modal__form-error');
const formErrorsIndvidual = document.querySelector('[data-err]')
const formInputs = document.querySelectorAll('.modal__form-wrap > input');
formInputs.forEach((input, index) => {
    input.addEventListener('focus', () => {
        if (formErrors[index].classList.contains('active')) {
            formErrors[index].classList.remove('active')
        }
    })
})



const forms = document.querySelectorAll('form');
forms.forEach((form, index) => {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const input = form.querySelector('input');
        if (input.value !== "" && Number(input.value.replace(/[^0-9]/g,"").length) >= 10) {
            console.log('Отправлено')
            form.reset();
            yaCounter96630363.reachGoal('order');
            if (document.querySelector('#callback').classList.contains('active')) {
                document.querySelector('#callback').classList.remove('active') 
            }
            document.querySelector('#thanks').classList.add('active');
        } else {
            if (input.getAttribute('data-message') === 'toast') {
                Toastify({
                    text: "Поле телефон должно быть заполнено",
                    duration: 3000,
                    style: {
                        background: "#D74535",
                    },
                }).showToast();
            } else {
                formErrorsIndvidual.classList.add('active')
            }
            
            
        }
    })
})



const phoneInputs = document.querySelectorAll('[data-input="masked"]');
const im = new Inputmask({
    mask: '+375 (99) 999-99-99 999',
    showMaskOnHover: false,
    showMaskOnFocus: false,
    jitMasking: true,
    inputmode: 'tel'
})
phoneInputs.forEach(input => {
    im.mask(input);
})

Fancybox.bind("[data-fancybox]", {});


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