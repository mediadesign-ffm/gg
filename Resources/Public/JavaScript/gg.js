jQuery(document).ready(function($) {
    
    var $nav = $('.nav'), 
        $body = $('body'),
        $win = $(window),
        $header = $('header');



        /* Block */
    $body.on('focus ontouchend click', '.blockNav .navlink', function(event) {
        var $this = $(this).parent(); 
        
        if ($this.parent().is('.level1')) { 
            event.preventDefault();
        } 
    })
        

    /* Init "Overlay" ********************************************************************/
         
    $body.on('focus ontouchend click mouseover', '.blockNav #menu > ul > li', function(event){
        var $this = $(this);

        if ($this.parent().is('.nav')) {
            
            /* Do */
            if ($this.hasClass('turquoise')){
                $('.overlay').removeClass().addClass('overlay turquoise');
            }
            if ($this.hasClass('green')){
                $('.overlay').removeClass().addClass('overlay green');
            }       
            if ($this.hasClass('blue')){
                $('.overlay').removeClass().addClass('overlay blue');
            }                           
            if ($this.hasClass('red')){
                $('.overlay').removeClass().addClass('overlay red');
            }  
            if ($this.hasClass('grey')){
                $('.overlay').removeClass().addClass('overlay grey');
            }  
            if ($this.hasClass('violett')){
                $('.overlay').removeClass().addClass('overlay violett');
            }  
             if ($this.hasClass('orange')){
                $('.overlay').removeClass().addClass('overlay orange');
            }  
        } 
    })




});