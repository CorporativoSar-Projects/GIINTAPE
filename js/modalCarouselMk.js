document.addEventListener('DOMContentLoaded', function() {
  const gallery = document.querySelector('.gallery');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');
  const modal = document.getElementById('imageModal');
  const modalImg = document.getElementById('modalImg');
  const close = document.querySelector('.close');

  function scrollGallery(amount) {
      gallery.scrollBy({
          left: amount,
          behavior: 'smooth'
      });
  }

  prevBtn.addEventListener('click', () => scrollGallery(-200));
  nextBtn.addEventListener('click', () => scrollGallery(200));

  gallery.addEventListener('click', function(event) {
      if (event.target.tagName === 'IMG') {
          modal.style.display = 'block';
          modalImg.src = event.target.src;
      }
  });

  close.addEventListener('click', () => {
      modal.style.display = 'none';
  });

  window.addEventListener('click', (event) => {
      if (event.target === modal) {
          modal.style.display = 'none';
      }
  });
});
