function popup_edit_profil (){
    // bouton edit
    let edit_name = document.querySelector('#bt_edit_name');
    let edit_mail = document.querySelector('#bt_edit_mail');
    let edit_adresse = document.querySelector('#bt_edit_adresse');
    let edit_tel = document.querySelector('#bt_edit_tel');
    let edit_mdp = document.querySelector('#bt_edit_mdp');

    // div popup
    let div_edit_mail = document.querySelector(".main_div_edit_mail");
    let div_edit_mdp = document.querySelector(".main_div_edit_mdp");
    let div_edit_name = document.querySelector(".main_div_edit_name");
    let div_edit_adresse = document.querySelector(".main_div_edit_adresse");
    let div_edit_tel = document.querySelector(".main_div_edit_tel");

    // div block bg
    let block_bg = document.querySelector(".popup_block_bg");

    // bt cancel
    let bt_cancel_mail = document.querySelector(".bt_cancel_mail");
    let bt_cancel_tel = document.querySelector(".bt_cancel_tel");
    let bt_cancel_mdp = document.querySelector(".bt_cancel_mdp");
    let bt_cancel_adresse = document.querySelector(".bt_cancel_adresse");
    let bt_cancel_name = document.querySelector(".bt_cancel_name");

    // bt submit
    let bt_submit_mail = document.querySelector(".bt_submit_mail");
    let bt_submit_tel = document.querySelector(".bt_submit_tel");
    let bt_submit_mdp = document.querySelector(".bt_submit_mdp");
    let bt_submit_adresse = document.querySelector(".bt_submit_adresse");
    let bt_submit_name = document.querySelector(".bt_submit_name");

    // bt edit 
    edit_name.addEventListener('click', ()=>{
        div_edit_name.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
        
    })
    edit_mail.addEventListener('click', ()=>{
        div_edit_mail.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
    })
    edit_adresse.addEventListener('click', ()=>{
        div_edit_adresse.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
    })
    edit_tel.addEventListener('click', ()=>{
        div_edit_tel.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
    })
    edit_mdp.addEventListener('click', ()=>{
        div_edit_mdp.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
    })

    // bt cancel
    bt_cancel_name.addEventListener('click', ()=>{
        div_edit_name.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
        
    })
    bt_cancel_mail.addEventListener('click', ()=>{
        div_edit_mail.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
    })
    bt_cancel_adresse.addEventListener('click', ()=>{
        div_edit_adresse.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
    })
    bt_cancel_tel.addEventListener('click', ()=>{
        div_edit_tel.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
    })
    bt_cancel_mdp.addEventListener('click', ()=>{
        div_edit_mdp.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
    })

    // bt submit
    bt_submit_name.addEventListener('click', ()=>{
        div_edit_name.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
        
    })
    bt_submit_mail.addEventListener('click', ()=>{
        div_edit_mail.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
    })
    bt_submit_adresse.addEventListener('click', ()=>{
        div_edit_adresse.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
    })
    bt_submit_tel.addEventListener('click', ()=>{
        div_edit_tel.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
    })
    bt_submit_mdp.addEventListener('click', ()=>{
        div_edit_mdp.classList.toggle("dp_none");
        block_bg.classList.toggle("dp_none");
    })

}
popup_edit_profil()