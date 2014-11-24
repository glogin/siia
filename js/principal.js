$(document).ready(function(){
        $('.nav>li').click(function(){
                $('.nav>li').attr('class','');
                $(this).attr('class','active');
        });
});