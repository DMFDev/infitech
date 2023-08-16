jQuery( document ).ready(function() {
    // console.log( "ready!" );
    jQuery("#btn_menu").click(()=>{
        if (jQuery("#modal_menu").hasClass("hidden")){
            jQuery("#modal_menu").removeClass("hidden");
            jQuery("#modal_menu div").each( (index, item) => {
                setInterval(removeItemMenu(item), 3000);
            });
        }else{
            jQuery("#modal_menu").addClass("hidden");
            jQuery("#modal_menu div").each( (index, item) => {
                setInterval(addItemMenu(item), 3000);
            });
        }
    })

    function addItemMenu(item){
        jQuery(item).addClass("hidden");
    }
    
    function removeItemMenu(item){
        jQuery(item).removeClass("hidden");
    }


});