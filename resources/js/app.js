document.addEventListener('DOMContentLoaded', function() {
    // 1. Back to Top Logic
    const bttBtn = document.getElementById('backToTopBtn');
    if (bttBtn) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 400) {
                bttBtn.classList.add('show');
            } else {
                bttBtn.classList.remove('show');
            }
        });
        
        bttBtn.addEventListener('click', function() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        });
    }

    // 2. Custom Alert Modal Logic
    const portalLoginBtn = document.getElementById('portalLoginBtn');
    const customAlert = document.getElementById('customAlert');
    const closeAlertBtn = document.getElementById('closeAlertBtn');

    if (portalLoginBtn && customAlert) {
        portalLoginBtn.addEventListener('click', function(e) {
            e.preventDefault();
            customAlert.classList.add('show');
        });
    }

    if (closeAlertBtn && customAlert) {
        closeAlertBtn.addEventListener('click', function() {
            customAlert.classList.remove('show');
        });
    }
});
