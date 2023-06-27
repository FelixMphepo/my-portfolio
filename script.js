// JavaScript to handle automatic slideshow
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    
    // Hide all slides
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    // Increment slide index
    slideIndex++;

    // Loop back to the first slide
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }

    // Display the current slide
    slides[slideIndex - 1].style.display = "block";

    // Change slide every 2 seconds (2000 milliseconds)
    setTimeout(showSlides, 2000);
}


const hour = new Date().getHours();

let greeting;

if (hour >= 0 && hour < 12) {
  greeting = 'Good morning';
} else if (hour >= 12 && hour < 18) {
  greeting = 'Good afternoon';
} else {
  greeting = 'Good evening';
}
const greetingElement = document.getElementById('greeting');
greetingElement.textContent = greeting;




const searchInput = document.getElementById('searchInput');
const searchButton = document.getElementById('searchButton');
const contentSection = document.getElementById('contentSection');
var paragraphs = contentSection.getElementsByTagName('p');


searchButton.addEventListener('click', filterParagraphs);
searchInput.addEventListener('keyup', filterParagraphs);

function filterParagraphs() {
  const searchQuery = searchInput.value.toLowerCase();

  for (let i = 0; i < paragraphs.length; i++) {
    const paragraph = paragraphs[i];
    const paragraphText = paragraph.textContent.toLowerCase();

    if (paragraphText.includes(searchQuery)) {
      paragraph.style.display = 'block';
    } else {
      paragraph.style.display = 'none';
    }
  }
}
