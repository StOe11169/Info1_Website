//----- Page Behaviour -----

//Sticky header-nav

// Add the "sticky" class to the header-wrapper when scrolling reaches a certain point
window.addEventListener('scroll', function() {
    let headerWrapper = document.querySelector('.header-wrapper');
    let offset = headerWrapper.offsetTop;

    if (window.pageYOffset > offset) {
        headerWrapper.classList.add('sticky');
    } else {
        headerWrapper.classList.remove('sticky');
    }
});





//----- Button Functionality -----
// Get the buttons:
let scrollToTopButtons = document.getElementsByClassName("scroll-to-top-btn");

// Attach event listeners to each button
for (let i = 0; i < scrollToTopButtons.length; i++) {
    scrollToTopButtons[i].addEventListener("click", scrollToTop);
}

// When the user scrolls down 20px from the top of the document, show the buttons
window.onscroll = function() {
    scrollFunction();
};

// Make back to top buttons visible after a certain distance is scrolled
function scrollFunction() {
    for (let i = 0; i < scrollToTopButtons.length; i++) {
        if (
            document.body.scrollTop > 1 ||
            document.documentElement.scrollTop > 1
        ) {
            scrollToTopButtons[i].style.display = "block";
        } else {
            scrollToTopButtons[i].style.display = "none";
        }
    }
}

// When the user clicks on a button, scroll to the top of the document
function scrollToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


// Close all Accordions

// Get all collapse elements
let collapseElements = document.querySelectorAll('.accordion-collapse');

// Close all collapse elements
let closeAllAccordions = () => {
    collapseElements.forEach((collapse) => {
        const bsCollapse = new bootstrap.Collapse(collapse, {
            toggle: false
        });
        bsCollapse.hide();
    });
};

// Attach click event listener to all buttons with the class 'close-accordions-btn'
const closeAccordionsBtns = document.querySelectorAll('.close-accordions-btn');
closeAccordionsBtns.forEach((button) => {
    button.addEventListener('click', closeAllAccordions);
});