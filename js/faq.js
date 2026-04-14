document.addEventListener('DOMContentLoaded', function() {
    const faqAccordion = document.querySelector('.faq-accordion');
    
    if (faqAccordion) {
        const faqItems = faqAccordion.querySelectorAll('.faq-item');
        
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            
            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                // 1. Close all other open items
                faqItems.forEach(i => {
                    if (i !== item) {
                        i.classList.remove('active');
                    }
                });
                
                // 2. Toggle the clicked item
                item.classList.toggle('active');
                
                // Optional: Scroll item into view if it's being opened
                if (!isActive) {
                    setTimeout(() => {
                        const yOffset = -100; // Adjust for sticky headers
                                               window.scrollTo({top: y, behavior: 'smooth'});
                    }, 400); // Wait for transition
                }
            });
        });
    }
});