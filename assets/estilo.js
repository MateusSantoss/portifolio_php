// Opcional: adiciona pontos dinamicamente
const numDots = 100;
const background = document.querySelector('.background');

for (let i = 0; i < numDots; i++) {
  const dot = document.createElement('div');
  dot.classList.add('dot');
  dot.style.top = `${Math.random() * 100}%`;
  dot.style.left = `${Math.random() * 100}%`;
  background.appendChild(dot);
}
