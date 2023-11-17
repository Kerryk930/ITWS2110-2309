document.addEventListener('DOMContentLoaded', function() {
    let jsonFilePath = 'data.json';

    fetch(jsonFilePath)
        
        .then(response => response.json())
        .then(courseData => {
            buildNavigation(courseData.content.Lectures, 'lecture');
        })
        .catch(error => {
            console.error('Error fetching the JSON data: ', error);
        });

    function buildNavigation(content, type) {
        const navigation = document.getElementById('content-navigation');
        content.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = item.Title;
            listItem.onclick = () => showPreview(item, type);
            navigation.appendChild(listItem);
        });
    }

    function showPreview(item, type) {
        document.getElementById('preview-area').classList.remove('hidden');
        document.getElementById('preview-title').textContent = item.Title;
        document.getElementById('preview-description').textContent = item.Description;
        document.getElementById('preview-links').textContent = item.Link_to_Slideshow;
        
        const linksContainer = document.getElementById('preview-links');
        linksContainer.innerHTML = ''; 

        let linkProperty =  'Link_to_Slideshow';
        linkElem.classList.add('lecture-link');

        item[linkProperty].forEach((link, index, array) => {
            const linkElem = document.createElement('a');
            linkElem.setAttribute('href', link);
            linkElem.textContent = 'View Slideshow';
            linksContainer.appendChild(linkElem);
        
            if (index < array.length - 1) {
                linksContainer.appendChild(document.createTextNode(' '));
            }
        });
    }
});
