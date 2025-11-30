// slider
const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    
    burger.addEventListener('click', () => {
        nav.classList.toggle('active');
    });


// Why choose us

document.addEventListener('DOMContentLoaded', () => {
    const reasons = document.querySelectorAll('.reasons li');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.5 });

    reasons.forEach((reason) => {
        observer.observe(reason);
    });
});



// Team section

document.addEventListener("DOMContentLoaded", () => {
    const teamMembers = document.querySelectorAll(".team-member");

    teamMembers.forEach(member => {
        member.style.opacity = "0";
        member.style.transform = "translateY(20px)";
    });

    window.addEventListener("scroll", () => {
        teamMembers.forEach(member => {
            const rect = member.getBoundingClientRect();
            if (rect.top < window.innerHeight - 50) {
                member.style.transition = "opacity 0.6s ease-out, transform 0.6s ease-out";
                member.style.opacity = "1";
                member.style.transform = "translateY(0)";
            }
        });
    });
});



