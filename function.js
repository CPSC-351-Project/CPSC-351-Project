// Worked on by Ramsey

const images = ["christopher-newport-university-campus.jpg","avenue-of-the-arts.jpg","library.jpg"];
const carousel = document.querySelector(".carousel");
const interval = setInterval(function() {
  startCarousel();
}, 3000)
var index = 1;

startCarousel = () => {
  carousel.style.backgroundImage = `url(${images[index++]})`;
  carousel.classList.remove("fade");
  void carousel.offsetWidth;
  carousel.classList.add("fade");
  if(index > images.length - 1) index = 0;
}