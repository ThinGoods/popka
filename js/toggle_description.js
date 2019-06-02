 /*меню разварачивается при клике что бы можно было лучше контролировать поведение страницы ДЛЯ ЗАЩИТЫ */
const itemsOfShortDesc = document.getElementsByClassName('short_description');
const itemsOfLongDesc = document.getElementsByClassName('long_description');
const itemsOfButtons = document.getElementsByClassName('btn_expand');
const itemsOfHideButtons = document.getElementsByClassName('btn_unexpand');

function iteration(buttons, displayFirst, displaySecond) {
  Array.prototype.forEach.call(buttons, (button, index) => {
    button.addEventListener('click', () => { 
  	  itemsOfShortDesc[index].style.display = displayFirst;
  	  itemsOfLongDesc[index].style.display = displaySecond;
  	  itemsOfHideButtons[index].style.display = displaySecond;
  	  itemsOfButtons[index].style.display = displayFirst;
  	});
  });
};

iteration(itemsOfButtons, 'none', 'block');
iteration(itemsOfHideButtons, 'block', 'none');
