const form = document.querySelector('.container-form');
const noti = document.querySelector('.noti');

let result2 = 0, result3 = 0;

form.addEventListener('change', e => {
    console.log(e.target.name);
    
    
    if(e.target.name === 'pass'){
        let pattern = /^[A-Za-z]\w{5,15}$/;
        result2 = pattern.test(e.target.value);
        
        if(!result2){
            noti.innerHTML = `<p>Please enter valid pass`;
        }
        else{
            noti.innerHTML = `<p>valid pass</p>`;
        }
    }
    
    if(e.target.name === 'email'){
        let pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        result3 = pattern.test(e.target.value);
        
        if(!result3){
            noti.innerHTML = `<p>Please enter valid email`;
        }
        else{
            noti.innerHTML = `<p>valid email</p>`;
        }
    }
    
});


form.addEventListener('submit', e => {
    if(result2 && result3){
        noti.innerHTML = `form submitted`;
    }
    else{
        e.preventDefault();
        noti.innerHTML = `Please enter valid input(s)`;
    }
})