window.addEventListener('load',()=>{
    const btnClickHandler = (formId) => {
        const form = document.querySelector(formId);
        form.classList.toggle('show');
    }

    const btns = document.querySelectorAll('.form-btn')

    btns.forEach(btn=>{
        btn.addEventListener('click',()=>{
            btnClickHandler('#perfect-form')
        })
    })
})