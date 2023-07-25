import $ from 'jquery';

const languageSwitcher = $('.languageSwitcher');
const languageSwitcherOpenClass = 'languageSwitcher_open';

const curLang = $(languageSwitcher).find('.current-lang');
curLang.remove();
$(languageSwitcher).find('ul').prepend(curLang);

$(languageSwitcher).on( 'click' , function(){
    $(this).addClass(languageSwitcherOpenClass);
})

$(window).click(function() {
    $(languageSwitcher).removeClass(languageSwitcherOpenClass);
});

$(languageSwitcher).click(function(event){
    event.stopPropagation();
  });