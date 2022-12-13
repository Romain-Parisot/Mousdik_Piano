function animation_header(){
    let user_logo = document.querySelector(".div_img_logo_top_droit_user");
    let body = document.querySelector(".global_div");
    let div_logo_u = document.querySelector(".div_animation_header")
    let div_anim = document.querySelector(".div_animation_header3")

    user_logo.addEventListener('click', function() {
        user_logo.classList.toggle("animation_user")
        body.classList.toggle('global_div2')
        body.classList.toggle('dp_none')
        div_logo_u.classList.toggle("bgFFFFFF")
        div_anim.classList.toggle("dp_none")
        div_anim.classList.toggle("div_animation_header2")

})

}
animation_header()