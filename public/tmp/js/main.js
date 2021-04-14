
$(()=>{
    //forms logic
    let selectedCurrency = null
    let currencyAmount = 0

    const btnClickHandler = (element) => {
        const $element = $(element)

        const formId = $element.attr('data-form-id');
        selectedCurrency = $element.attr('data-currency-type')
        
        const $form = $(formId)
        

        //check if form closed
        if($form.hasClass('show')){
            selectedCurrency = null
        }

        $form.toggleClass('show');
    }


    const exchangeBtnClickHandler= () => {
        console.log({
            selectedCurrency,
            currencyAmount
        })
    }

    const inputChangeHandler = (e) => {
        const value = e.target.value
        currencyAmount = parseInt(value,10)
    }

    const btns = $('.form-btn')
    btns.each((idx,btn)=>{
        $(btn).on('click',()=>{
            btnClickHandler(btn)
        })
    })
    

    const inputs = $('.exchange-input')

    inputs.each((idx,input)=>{
        $(input).on('change',inputChangeHandler)
    })


    const exchangeBtns = $('.exchange-btn');


    exchangeBtns.each((idx,btn)=>{
        $(btn).on('click',exchangeBtnClickHandler)
    })

})