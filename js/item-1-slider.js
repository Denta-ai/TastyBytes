document.addEventListener('DOMContentLoaded', function() {
  var slider = document.querySelector('.overlay-item-1 .content-item-1 .slider');
  var images = document.querySelectorAll('.overlay-item-1 .content-item-1 .slider img');
  var currentIndex = 0;
  var prevButton = document.querySelector('.overlay-item-1 .content-item-1 .prev-button');
  var nextButton = document.querySelector('.overlay-item-1 .content-item-1 .next-button');

  var slideWidth = slider.offsetWidth / 3;
  var slideCount = Math.min(Math.ceil(images.length / 3), 3);

  function slideTo(index) {
    var translateXValue = -index * (slideWidth / slideCount);
    slider.style.transform = `translateX(${translateXValue}px)`;
  }

  function handleClickPrev() {
    currentIndex = (currentIndex - 1 + slideCount) % slideCount;
    slideTo(currentIndex);
  }

  function handleClickNext() {
    if (currentIndex < slideCount - 1) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }
    slideTo(currentIndex);
  }

  prevButton.addEventListener('click', handleClickPrev);
  nextButton.addEventListener('click', handleClickNext);

  var navLinks = document.querySelectorAll('.navbar-nav a');

  // Add click event link to each navigation link
  navLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
      if (link.getAttribute('href').startsWith('http')) {
        return;
      }
      event.preventDefault();
      var href = link.getAttribute('href');
      window.location.href = href;
    });
  });
});
