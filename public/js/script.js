function searchMenu(item) {
    let id = item.innerHTML.trim().toLowerCase().replace(/\s+/g, '-');
    let searchContainer = document.querySelector('#search-container');

    searchContainer.querySelectorAll(`.card`).forEach(function(element) {
        if(element.id != id  && !element.classList.contains('d-none')) {
            element.classList.add('d-none')
        }
    });

    let target = searchContainer.querySelector('#' + id);
    if(target) {
        target.classList.remove('d-none')
    }
}
