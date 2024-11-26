const trigger = document.querySelector('.navBar-options-list');
const target = document.querySelector('.navLateral');
const pageContent = document.querySelector('.pageContent');

target.classList.add('navLateral-change');
pageContent.classList.add('pageContent-change');

document.addEventListener('DOMContentLoaded', (event) => {
  
  trigger.addEventListener('mouseenter', () => {
      target.classList.remove('navLateral-change');
      pageContent.classList.remove('pageContent-change');
  });

  target.addEventListener('mouseenter', () => {
    target.classList.remove('navLateral-change');
    pageContent.classList.remove('pageContent-change');
  });

  trigger.addEventListener('mouseleave', () => {
      target.classList.add('navLateral-change');
      pageContent.classList.add('pageContent-change');
  });

  target.addEventListener('mouseleave', () => {
    target.classList.add('navLateral-change');
    pageContent.classList.add('pageContent-change');
  });
});

/*Mostrar y ocultar submenus*/
let btn_subMenu=document.querySelectorAll(".btn-subMenu");
btn_subMenu.forEach(subMenu => {
    subMenu.addEventListener("click", function(e){

        e.preventDefault();
        if(this.classList.contains('btn-subMenu-show')){
            this.classList.remove('btn-subMenu-show');
        }else{
            this.classList.add('btn-subMenu-show');
        }
    });
});


document.addEventListener('DOMContentLoaded', () => {
  // Functions to open and close a modal
  function openModal($el) {
    $el.classList.add('is-active');
  }

  function closeModal($el) {
    $el.classList.remove('is-active');
  }

  function closeAllModals() {
    (document.querySelectorAll('.modal') || []).forEach(($modal) => {
      closeModal($modal);
    });
  }

  (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
    const modal = $trigger.dataset.target;
    const $target = document.getElementById(modal);

    $trigger.addEventListener('click', () => {
      openModal($target);
    });
  });

  (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
    const $target = $close.closest('.modal');

    $close.addEventListener('click', () => {
      closeModal($target);
    });
  });

  document.addEventListener('keydown', (event) => {
    if (event.code === 'Escape') {
      closeAllModals();
    }
  });
});