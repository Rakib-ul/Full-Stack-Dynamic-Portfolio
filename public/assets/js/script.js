// console.log(document.getElementById("test").innerText)

// tags = document.querySelector(".find").children;
//         for ( i = 0; i< tags.length; i++){
//             tags[i].addEventListener('click', function(event){
//                 alert(event.target.innerText);
//             }
//             );
//         }

// document.querySelectorAll(".find").forEach((abc => {
//     abc.onclick = function () {
//         prompt(this.innerText);
//     };
// }))

// document.querySelectorAll(".title").forEach((abc => {
//     abc.onclick = function () {
//         this.innerHTML = `
//         <h3>
//         <a href="#">This is by JS</a>
//         <p>This is assigned dynamically</p>
//         </h3>
//         `;
//         this.classList.add("display");

//         avatar = document.getElementById("avatar");

//         avatar.src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuOOWJtPWLZeMEbDgi28nE-fyEri1iZLAhNw&s";

//         avatar.classList.add("display")
//     };
// }))

// button = document.getElementById('button');
// button.addEventListener('click', () => {
//   alert('CV is under construction');
// });

// Mobile Navigation
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        const navLinksItems = document.querySelectorAll('.nav-links li');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('active');
        });

        navLinksItems.forEach(item => {
            item.addEventListener('click', () => {
                navLinks.classList.remove('active');
                hamburger.classList.remove('active');
            });
        });

        // Sticky Header
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            header.classList.toggle('scrolled', window.scrollY > 100);
        });

        // Back to Top Button
        const backToTopBtn = document.querySelector('.back-to-top');
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.add('active');
            } else {
                backToTopBtn.classList.remove('active');
            }
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Projects Filter
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');
                
                const filter = btn.getAttribute('data-filter');
                
                projectCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Animate Skill Bars on Scroll
        const skillBars = document.querySelectorAll('.skill-progress');
        
        function animateSkillBars() {
            skillBars.forEach(bar => {
                const width = bar.parentElement.previousElementSibling.lastElementChild.textContent;
                if (isElementInViewport(bar)) {
                    bar.style.width = width;
                }
            });
        }

        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        window.addEventListener('scroll', animateSkillBars);
        window.addEventListener('load', animateSkillBars);

        // Form Submission
        const contactForm = document.getElementById('contactForm');
        
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Here you would typically send the form data to a server
            // For this example, we'll just show an alert
            alert('Thank you for your message! I will get back to you soon.');
            contactForm.reset();
        });
