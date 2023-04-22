function trimText(elements, limit) {
  elements.forEach((element) => {
    const content = element.textContent.trim();
    if (content.length > limit) {
      const trimmedContent = content.slice(0, limit) + '...';
      element.textContent = trimmedContent;
    }
  });
}

const articlesdescription = document.querySelectorAll('.article-description-home');

trimText(articlesdescription, 100);
