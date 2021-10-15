$(document).ready(function($){
    let div_cl1 = $('#choix-lettres-1');
    let div_cl2 = $('#choix-lettres-2');
    let link_div_cl1 = $('#toggle_div1');
    let link_div_cl2 = $('#toggle_div2');
$(div_cl1, div_cl2).hide();
//alert("hello");
$(link_div_cl1).click(function(){
    div_cl1.toggle();
    if(div_cl1.is(':visible')){
        $(this).text('Fermer');
    }else{
            $(this).text('Voir');
        }
});
$(link_div_cl2).click(function(){
   div_cl2.toggle();
   if(div_cl2.is(':visible')){
    $(this).text('Fermer');
}else{
        $(this).text('Voir');
    }
});
});