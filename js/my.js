/*
var init = function() {
    var card = document.getElementById('card');

    document.getElementById('button2').addEventListener( 'click', function(){
        card.classList.toggle('flipped');
    }, false);
};

window.addEventListener('DOMContentLoaded', init, false);
*/



$(function() {

    $('div.card.notfound').click(function () {

        var old_open = []
        var $this = $(this)

        $('div.card.notfound.flipped').each(function () {
            old_open.push($(this))
        })

        var isSame = false;

        for (var i = 0; i < old_open.length; i++){
            if (isSame = old_open[i].is($this))
                break
        }

        if (old_open.length === 1){
            if (!isSame && old_open[0].attr('value') == $this.attr('value') ){
                // set pair found
                old_open[0].removeClass('notfound')
                $this.removeClass('notfound')
            }
        } else if (!isSame && old_open.length === 2) {
            // third attempt card opened => close others
            $('div.card.notfound.flipped').each(function () {
                $(this).toggleClass('flipped')
            })
        }

        // show this card
        if (!$this.hasClass('flipped'))
            $this.toggleClass('flipped')
    })





})
