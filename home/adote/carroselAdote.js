for (var i = 0; i < 10; i++){
var el = document.querySelector('#galeria');
const carouselItems = el.querySelectorAll('.imagem');

// Define o índice do slide atual
let currentIndex = 0;

// Função para exibir o slide atual
function showSlide() {
  // Oculta todos os slides
  carouselItems.forEach(item => {
    item.style.display = 'none';
  });

  // Exibe o slide atual
  carouselItems[currentIndex].style.display = 'block';
}

// Função para exibir o próximo slide
function nextSlide() {
  // Incrementa o índice do slide atual
  currentIndex++;

  // Verifica se o índice ultrapassou o número de slides
  if (currentIndex >= carouselItems.length) {
    currentIndex = 0;
  }

  // Exibe o próximo slide
  showSlide();
}

// Função para exibir o slide anterior
function prevSlide() {
  // Decrementa o índice do slide atual
  currentIndex--;

  // Verifica se o índice é menor que zero
  if (currentIndex < 0) {
    currentIndex = carouselItems.length - 1;
  }

  // Exibe o slide anterior
  showSlide();
}
}
// Inicia o carrossel ao carregar a página
window.addEventListener('load', () => {
  showSlide();
  setInterval(nextSlide, 1000); // Intervalo de transição de slide (em milissegundos)
});