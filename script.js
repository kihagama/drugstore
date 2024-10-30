const mobileMenu = document.getElementById('mobile-menu');
const navLinks = document.querySelector('nav ul');

mobileMenu.addEventListener('click', () => {
    
    navLinks.classList.toggle('active');
    
});
function toggleAnswer(element) {
    const answer = element.nextElementSibling;
    const arrow = element.querySelector('.arrow');
    if (answer.style.display === "block") {
        answer.style.display = "none";
        arrow.textContent = "+";
    } else {
        answer.style.display = "block";
        arrow.textContent = "-";
    }
}

function checkVisibility() {
    const sections = document.querySelectorAll('section');
    const triggerBottom = window.innerHeight * 1; // Trigger when section is 80% in view

    sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;

        if (sectionTop < triggerBottom) {
            section.classList.add('visible'); // Add visible class to section

            // Get all text elements inside the section
            const textElements = section.querySelectorAll('h1, h2, h3, p');
            textElements.forEach((textElement, index) => {
                // Delay each text element's animation
                setTimeout(() => {
                    textElement.classList.add('visible');
                }, index * 0.5); // Adjust delay (100ms per element)
            });
        } else {
            section.classList.remove('visible'); // Remove visible class from section
            // Remove visible class from text elements
            const textElements = section.querySelectorAll('h1, h2, h3, p');
            textElements.forEach(textElement => {
                textElement.classList.remove('visible');
            });
        }
    });
}

// Initial check on page load
window.onload = function() {
    checkVisibility();
};

// Check visibility on scroll
window.addEventListener('scroll', checkVisibility);
