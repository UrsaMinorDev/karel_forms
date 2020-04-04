function checkForm(elem) {
    let necessary_fields = elem.closest('.form').querySelectorAll('.form_field.necessary');
    let error = elem.closest('.section-infobox-content').querySelector('.form_error');
    let skip_counts = 0;
    necessary_fields.forEach( (field) => {
        if(!field.value){
            skip_counts++;
        }
    });
    if(skip_counts === 0){
        getForm(elem, error);
    } else{
        error.classList.add('show');
        window.scrollTo({ top: 0, behavior: 'smooth' });
        console.log('User skipped necessary fields:'+ skip_counts );
    }
}

function getForm (elem, error) {
    if(error.classList.contains('show')){
        error.classList.remove('show');
    }

    let fields = elem.closest('.form').querySelectorAll('.form_field');
    let form_data = {};
    fields.forEach( (element) => {
        form_data[element.name] = element.value;
    });
    let form_json = JSON.stringify(form_data);
    console.log(form_json);

    let parent =  error.closest('.section-infobox-content')
    parent.querySelector('.form_success_massage').classList.add('show');
    parent.querySelector('.form').classList.add('disable');
    parent.querySelector('.form_annotation').classList.add('disable');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function counter(elem) {
    let number = elem.getAttribute('maxlength');
    let text = elem.value.length;
    let parent = elem.closest('.form_field_wrap');
    parent.querySelector('.counter').classList.add('show');
    let number_field = parent.querySelector('.number');
    number_field.innerHTML = number - text;
}