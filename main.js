// change navber styles on scroll

window.addEventListener('scroll' , () => {
    document.querySelector('nav').classList.toggle('window-scroll' , window.scrollY > 0)
})

// show/hide faq answer 

const faqs = document.querySelectorAll('.faq');

faqs.forEach(faq => {
    faq.addEventListener('click' , () => {
        faq.classList.toggle('open');

        //change icon
        const icon = faq.querySelector('.faq__icon i');
        if(icon.className === 'bx bx-plus'){
            icon.className = "bx bx-minus";
        }
        else{
            icon.className = "bx bx-plus";
        }
    })
})



//show/hide nav menu
const menu = document.querySelector(".nav__menu");
const menuBtn = document.querySelector("#open_nav-btn");
const closeBtn = document.querySelector("#close_nav-btn");


menuBtn.addEventListener('click', () => {
    menu.style.display = "flex";
    closeBtn.style.display ="inline-block";
    menuBtn.style.display ="none";
})

//close nav menu 
const closeNav = () => {
    menu.style.display = "none";
    closeBtn.style.display = "none";
    menuBtn.style.display = "inline-block";
}

closeBtn.addEventListener('click', closeNav)
