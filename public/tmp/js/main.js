
$(()=>{
    if (window.location.pathname == '/line'){
        let btn_s = document.getElementsByClassName('type-btn');
        for (let i = 0; i<btn_s.length; i++){
            if (btn_s[i].href == uri){
                btn_s[i].classList.add('active');
            }
        }
    }

})