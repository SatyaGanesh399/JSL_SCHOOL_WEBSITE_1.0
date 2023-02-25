const cal_list = get_data('data/awards.json');

const show_awards = async (year, col = '2') => {
    document.getElementById('chosen_year').innerHTML = year;
    cal_list.then(data => {
        data.reverse();
        data.forEach(element => {
            if (element.year === year) {
                let cols;
                if (col === '3') {
                    cols = ['col-md-4', 'col-sm-6', 'col-12', 'mb-4'];
                } else {
                    cols = ['col-sm-6', 'col-12', 'mb-4'];
                }
                let awards_list = document.getElementById('awards_list');
                awards_list.innerHTML = '';
                element.awards.forEach(element => {
                    let div = document.createElement('div');
                    if (element.hasOwnProperty('caption')) {
                        div.setAttribute('data-sub-html', '<p class="text-warning">' + element.caption + '</p>');
                    }
                    div.classList.add('pointer', 'mb-4');
                    div.setAttribute('data-src', 'img/awards/' + element.img);
                    let img = document.createElement('img');
                    div.appendChild(img);
                    img.setAttribute('src', 'img/awards/' + element.img);
                    img.classList.add('img-fluid');
                    awards_list.insertAdjacentElement('afterbegin', div);
                });
            }
        });
        $('#awards_list').lightGallery();
    });
}

cal_list.then(data => {
    data.reverse();
    data.forEach(element => {
        let list = document.createElement('li');
        let list_link = document.createElement('a');
        let list_ico = document.createElement('i');
        let listTxt = document.createTextNode(element.year);
        list.classList.add('list-group-item');
        list_ico.classList.add('icofont-ui-calendar', 'text-warning', 'mr-2');
        list_link.setAttribute('href', 'javascript:void(0)');
        list_link.setAttribute('onclick', 'show_awards("' + element.year + '")');
        list_link.classList.add('text-decoration-none', 'text-dark');
        list.appendChild(list_link);
        list_link.appendChild(list_ico);
        list_link.appendChild(listTxt);
        let listWrap = document.getElementById('calendar_list');
        if (listWrap) {
            listWrap.insertAdjacentElement('afterBegin', list);
        }
    });
});