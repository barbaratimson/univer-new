document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.getElementById("menu-button")
    const mobileMenuButton = document.getElementById("menu-button-2")

    menuButton.addEventListener("click", ()=>{
        document.querySelector(".mobile-menu").classList.toggle("visible")
    })
    
    mobileMenuButton.addEventListener("click", ()=>{
        document.querySelector(".mobile-menu").classList.toggle("visible")
    })

    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            document.querySelector('nav ul').classList.toggle('show');
        });
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 70,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Form validation
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            let valid = true;
            
            // Basic validation example
            const email = this.querySelector('input[type="email"]');
            if (email && !email.value.includes('@')) {
                email.classList.add('error');
                valid = false;
            }
            
            if (!valid) {
                e.preventDefault();
            }
        });
    }
});
