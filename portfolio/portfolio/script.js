/* ================= TYPING EFFECT ================= */
const roles = [
  "Frontend Web Developer",
  "JavaScript UI Developer",
  "Aspiring Full Stack Developer"
];

let roleIndex = 0;
let charIndex = 0;
const typingElement = document.getElementById("typing");

function typeRole(){
  if(charIndex < roles[roleIndex].length){
    typingElement.textContent += roles[roleIndex].charAt(charIndex);
    charIndex++;
    setTimeout(typeRole, 80);
  } else {
    setTimeout(eraseRole, 1500);
  }
}

function eraseRole(){
  if(charIndex > 0){
    typingElement.textContent = roles[roleIndex].substring(0, charIndex-1);
    charIndex--;
    setTimeout(eraseRole, 50);
  } else {
    roleIndex = (roleIndex + 1) % roles.length;
    setTimeout(typeRole, 300);
  }
}

typeRole();

/* ================= SCROLL REVEAL ================= */
const sections = document.querySelectorAll('.section');

window.addEventListener('scroll', () => {
  const triggerBottom = window.innerHeight * 0.85;

  sections.forEach(section => {
    const sectionTop = section.getBoundingClientRect().top;

    if(sectionTop < triggerBottom){
      section.style.opacity = '1';
      section.style.transform = 'translateY(0)';
    }
  });
});

/* ================= INITIAL STATE ================= */
sections.forEach(section => {
  section.style.opacity = '0';
  section.style.transform = 'translateY(50px)';
  section.style.transition = '0.8s ease';
});
