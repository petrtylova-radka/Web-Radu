document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.querySelector('.nav-links');

    // Navbar scroll effect
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        hamburger.classList.toggle('active');
    });

    // Close menu on link click
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
            hamburger.classList.remove('active');
        });
    });

    // Animation on scroll (simple reveal)
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.glass, .bento-item, .service-step, .event-card, .solution-list li').forEach(el => {
        observer.observe(el);
    });

    // CSS handles the reveal animation via the .revealed class.

    // FAQ Accordion Toggle
    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', () => {
            const faqItem = button.parentElement;

            // Optionally close other items
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== faqItem) {
                    item.classList.remove('active');
                }
            });

            faqItem.classList.toggle('active');
        });
    });

    // Email copy functionality
    const copyBtn = document.querySelector('.copy-email-btn');
    if (copyBtn) {
        copyBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const email = document.querySelector('.contact-email-link').innerText;
            navigator.clipboard.writeText(email).then(() => {
                const successMsg = document.querySelector('.copy-success');
                successMsg.classList.add('show');
                setTimeout(() => {
                    successMsg.classList.remove('show');
                }, 2000);
            });
        });
    }
});
