function openSearch(elem) {
    elem.closest('.search_wrap').classList.toggle('opened');
}
function chooseItem(elem) {
    let value = elem.getAttribute('data-value'); // Вот это value нужно сунуть в ссылку
    let html = elem.innerHTML;
    let parent = elem.closest('.search_wrap');
    parent.querySelector('.search_button .content').innerHTML = html;
    parent.classList.toggle('opened');
    let items = parent.querySelectorAll('.item');
    if(elem.classList.contains('chosen')){
        return false;
    } else {
        items.forEach((item) => {
            if(item.classList.contains('chosen')){
                item.classList.remove('chosen')
            }
        });
        elem.classList.add('chosen');
    }
}

// Функция очистки фильтра. Возвращает все в изначальное состояние
function refreshList(elem) {
    let parent = elem.closest('.search_wrap');
    parent.querySelector('.search_button .content').innerHTML = '<p>Фильтр</p><i class="fa fa-search" aria-hidden="true"></i>';
    parent.classList.toggle('opened');
    let items = parent.querySelectorAll('.item');
    items.forEach((item) => {
        if(item.classList.contains('chosen')){
            item.classList.remove('chosen')
        }
    });
}

function showModal(elem) {
    let modal_window = elem.getAttribute('data-value');
    let modal = document.getElementById('modal_background');
    modal.querySelectorAll('.modal').forEach((item)=>{item.classList.remove('show')});
    if (modal_window === 'about'){
        modal.querySelector('.about_modal').classList.add('show');
    } else if (modal_window === 'form'){
        modal.querySelector('.form_modal').classList.add('show');
    } else if (modal_window === 'place'){
        modal.querySelector('.place_card_modal').classList.add('show');
    }
    modal.classList.add('show');
}

function closeModal() {
    let modal_area = document.getElementById('modal_background');
    modal_area.classList.remove('show');
    let modals = modal_area.querySelectorAll('.modal');
    modals.forEach((modal)=>{modal.classList.remove('show')});
}

function showPartners(elem) {
    elem.closest('.marketing_block').querySelector('.logo').classList.add('show');
}

function closePartners(elem) {
    elem.closest('.logo').classList.remove('show');
}


  document.addEventListener('keydown', (e) => {
      console.log(e);
      if(e.keyCode === 27){
          closeModal();
      }});
