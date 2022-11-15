//Mobile Menu Toggle

const toggleBtn = document.querySelector(".nav-toggle");
const mobileMenuContainer = document.querySelector(".mobile-menu-container");
const menu = document.querySelector(".mobile-menu");
const openBtnIcon = document.querySelector(".fa-bars");
const closeBtnIcon = document.querySelector(".fa-times");

toggleBtn.addEventListener("click", function () {
  const containerHeight = mobileMenuContainer.getBoundingClientRect().height;
  const linksHeight = menu.getBoundingClientRect().height;
  closeBtnIcon.classList.toggle("hide");
  openBtnIcon.classList.toggle("hide");

  if (containerHeight === 0) {
    mobileMenuContainer.style.height = `${linksHeight + 20}px`;
  } else {
    mobileMenuContainer.style.height = 0;
  }
});

//Hero Slider

const slides = document.querySelectorAll(".slide");
const btnContainer = document.querySelector(".btn-container");
const nextBtn = document.querySelector(".nextBtn");
const prevBtn = document.querySelector(".prevBtn");

slides.forEach(function (slide, index) {
  slide.style.left = `${index * 100}%`;
});

let counter = 0;
nextBtn.addEventListener("click", function () {
  counter++;
  carousel();
  console.log(slides.length);
});
prevBtn.addEventListener("click", function () {
  counter--;
  carousel();
});

function carousel() {
  //loop back to beginning
  if (counter === slides.length) {
    counter = 0;
  }
  if (counter < 0) {
    counter = slides.length - 1;
  }
  slides.forEach(function (slide) {
    slide.style.transform = `translateX(-${counter * 100}%)`;
  });
}
//hide net/prev btsn if there is only one slide
if (slides.length < 2) {
  btnContainer.classList.add("hide");
}
console.log(slides.length);

//Posts Slider
const postSlide = document.querySelectorAll(".post-slide");
const postBtnContainer = document.querySelector(".posts-btn-container");
const postsNextBtn = document.querySelector(".posts-nextBtn");
const postsPrevBtn = document.querySelector(".posts-prevBtn");

// postSlide.forEach(function (slide, index) {
//   slide.style.left = `${index * 100}%`;
// });

let postCounter = 0;
postsNextBtn.addEventListener("click", function () {
  postCounter++;
  postsCarousel();
});
postsPrevBtn.addEventListener("click", function () {
  postCounter--;
  postsCarousel();
});

function postsCarousel() {
  //loop back to beginning
  if (postCounter === postSlide.length) {
    postCounter = 0;
  }
  if (postCounter < 0) {
    postCounter = postSlide.length - 1;
  }
  postSlide.forEach(function (slide) {
    slide.style.transform = `translateX(-${postCounter * 20}rem)`;
  });
}
