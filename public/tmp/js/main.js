window.addEventListener('load',()=>{
    const btnClickHandler = (element) => {
        const formId = element.getAttribute('data-form-id');
        const form = document.querySelector(formId);
        form.classList.toggle('show');
    }

    const btns = document.querySelectorAll('.form-btn')

    btns.forEach(btn=>{
        btn.addEventListener('click',()=>{
            btnClickHandler(btn)
        })
    })
})