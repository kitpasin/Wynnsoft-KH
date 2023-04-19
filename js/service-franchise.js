const descriptionElements = document.querySelectorAll('.service-franchise-type-group-box-right-content-top-description');
const reverseDescriptionElements = document.querySelectorAll('.service-franchise-type-group-reversebox-left-content-top-description');

function truncateDescriptions(elements) {
  elements.forEach(function(element) {
    if (window.innerWidth <= 480) {
      const text = element.textContent.trim().substr(0, 50);
      element.textContent = text + '...';
    } else {
      element.textContent = element.dataset.originalText;
    }
  });
}

function setupDescriptions(elements) {
  elements.forEach(function(element) {
    element.dataset.originalText = element.textContent.trim();
  });
  truncateDescriptions(elements);
}

setupDescriptions(descriptionElements);
setupDescriptions(reverseDescriptionElements);

window.addEventListener('resize', function() {
  truncateDescriptions(descriptionElements);
  truncateDescriptions(reverseDescriptionElements);
});