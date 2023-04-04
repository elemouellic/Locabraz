function trimText(elements, limit) {
  elements.forEach((element) => {
    const content = element.textContent.trim();
    if (content.length > limit) {
      const trimmedContent = content.slice(0, limit) + '...';
      element.textContent = trimmedContent;
    }
  });
}

const actusdescription = document.querySelectorAll('.actus-description');
const actustitle = document.querySelectorAll('.actus-title');
const articlesdescription = document.querySelectorAll('.article-description');

trimText(actusdescription, 225);
trimText(actustitle, 60);
trimText(articlesdescription, 100);
