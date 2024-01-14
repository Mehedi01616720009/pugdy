// mobile menu toggle
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close');

navToggle.addEventListener('click', () => {
    navMenu.classList.add('show-menu')
})

navClose.addEventListener('click', () => {
    navMenu.classList.remove('show-menu')
})

// copy telegram link
const copyBtn = document.getElementById('copy-telegram-btn'),
    copyLink = document.getElementById('copy-telegram-link'),
    copyTooltip = document.getElementById('copy-telegram-tooltip');

    copyBtn.addEventListener('click', async () => {
        try {
            await navigator.clipboard.writeText(copyLink.innerText);

            copyTooltip.innerText = 'Copied!';
            copyTooltip.style.display = 'block';

            // Hide tooltip after 3 seconds
            setTimeout(() => {
                copyTooltip.style.display = 'none';
            }, 2000);
        } catch (err) {
            console.error('Unable to copy text to clipboard', err);
        }
    })

// anchorScroll
var anchorScroll = $(document).AnchorScroll({
    speed: 1000
});

// wowJs
new WOW().init();