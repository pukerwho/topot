function init() {
  var Scrollbar = window.Scrollbar;
  var headerHeight = document.querySelector('header').offsetHeight;

  $(function(){
    var lastScrollTop = 0, delta = 5;
    $(window).scroll(function(){
      var nowScrollTop = $(this).scrollTop();
      if(Math.abs(lastScrollTop - nowScrollTop) >= delta){
        if (nowScrollTop > lastScrollTop){
          $('.header').addClass('hide').removeClass('show');
        } else {
          $('.header').addClass('show').removeClass('hide');
        }
        lastScrollTop = nowScrollTop;
      }
      if(nowScrollTop < headerHeight){
        $('.header').removeClass('show').removeClass('hide');        
      }
    });
  });
  

  //MOBILE MENU
  let headerHumburger = document.querySelector('.header_humburger');
  let mobileMenu = document.querySelector('.mobile_menu');
  
  // let mobileMenuHeight = mobileMenu.offsetHeight;
  // mobileMenu.style.width = mobileMenuHeight + 'px';
  // mobileMenuBgOne.style.width = mobileMenuHeight + 'px';
  // mobileMenuBgTwo.style.width = mobileMenuHeight + 'px';
  // mobileMenuBgOne.style.height = mobileMenuHeight + 'px';
  // mobileMenuBgTwo.style.height = mobileMenuHeight + 'px';

  headerHumburger.addEventListener('click', function(){
    $('body').toggleClass('overflow-hidden');
    $('.modal_bg').toggleClass('show filter blur-lg');

    headerHumburger.classList.toggle('active');
    mobileMenu.classList.toggle('active');
  });

  //Модальные окна
  let bgModal = document.querySelector('.modal_bg');
  let modalsClickId = document.querySelectorAll('.modal_click_js');

  for (modalClickId of modalsClickId) {
    if (modalClickId) {
      modalClickId.addEventListener('click', function(){
        modalThisId = this.dataset.modalId;
        console.log(modalThisId);
        let modal = document.querySelector(".modal[data-modal-id='" + modalThisId + "'");
          modal.classList.add('show');
          bgModal.classList.add('show');
      });
    }
  }

  //Закрываем модульное окно
  let modalCloseBtns = document.querySelectorAll('.modal_close');
  let allModals = document.querySelectorAll('.modal');
  document.addEventListener('click', function(e){
    if(e.target.classList.value === 'modal_bg show') {
      bgModal.classList.remove('show');
      for (allModal of allModals) {
        allModal.classList.remove('show');  
      }
    }
  });

  if (modalCloseBtns) {
    for (modalCloseBtn of modalCloseBtns) {
      modalCloseBtn.addEventListener('click', function(){
        bgModal.classList.remove('show');
        for (allModal of allModals) {
          allModal.classList.remove('show');  
        }
      });
    }
  }

  sUsrAg = navigator.userAgent;
  if (sUsrAg.indexOf("Chrome") > -1) {
    $('.portfolio_archive_item').addClass('chrome');
    console.log(sUsrAg);
  }
  //Like сайт
  let likeObj = {site:'', email:''};
  let likeContent = document.querySelector('.like_content');
  let likeBtn = document.querySelector('.like_btn');
  let lineNumberSpan = document.querySelector('.like_number');
  let likeEmail = document.querySelector('.like_email');
  let likeSite = document.querySelector('.like_site');
  let likeSuccess = document.querySelector('.like_success');
  let likeNumber = 1;

  if (likeBtn) {
    likeBtn.addEventListener('click', function(){
      if (likeNumber === 1 & likeSite.value != '') {
        likeNumber = likeNumber+1;
        likeEmail.classList.add('block');
        likeEmail.classList.remove('hidden');
        likeSite.classList.add('hidden');
        lineNumberSpan.innerHTML = likeNumber;
        likeObj.site = likeSite.value
        console.log(likeObj);
        return;
      }
      if (likeNumber === 2 & likeEmail.value != '') {
        likeContent.classList.add('hidden');
        likeSuccess.classList.add('block');
        likeSuccess.classList.remove('hidden');
        likeObj.email = likeEmail.value
        console.log(likeObj);
        return;
      }
    });
  };
  
  // ORDER MODAL
  $('.order-js').on('click', function(){
    $('.order_modal').addClass('show');
    $('.modal_bg').addClass('show');

    //Вставляем услугу в инпут
    let dataOrder = $(this).data('order');
    $('#input_hidden_service').val(dataOrder);
  });

  $('.order_close').on('click', function(){
    $('.order_modal').removeClass('show');
    $('.modal_bg').removeClass('show');
  });

  // COMMERCE MODAL
  $('.commerce-js').on('click', function(){
    $('.commerce_modal').addClass('show');
    $('.modal_bg').addClass('show');
  });

  $('.commerce_close').on('click', function(){
    $('.commerce_modal').removeClass('show');
    $('.modal_bg').removeClass('show');
  });

  // COMMERCE CREATE MODAL
  $('.commerce-create-js').on('click', function(){
    $('.commerce_modal-create').addClass('show');
    $('.modal_bg').addClass('show');
  });

  $('.commerce_close-create').on('click', function(){
    $('.commerce_modal-create').removeClass('show');
    $('.modal_bg').removeClass('show');
  });


  // CHAT MODAL
  $('.chat-js').on('click', function(){
    $('.chat_modal').addClass('show');
    $('.modal_bg').addClass('show');
  });

  $('.chat_close').on('click', function(){
    $('.chat_modal').removeClass('show');
    $('.modal_bg').removeClass('show');
  });

  //Закрываем модульное окно
  let allOrderModals = document.querySelectorAll('.order_modal');
  document.addEventListener('click', function(e){
    console.log(e.target.classList.value);
    if(e.target.classList.value === 'modal_bg show') {
      bgModal.classList.remove('show');
      for (modalOrder of allOrderModals) {
        modalOrder.classList.remove('show');  
      }
    }
  });

  // ФОРМЫ
  const modalScriptURL = 'https://script.google.com/macros/s/AKfycbz-He2k77yNB78ucoyz8Z8RHfKE-HfFabIPwEoC9TIouBrdVbALqpkxABjxjB2KfpjI/exec'
  const form_welcome = document.forms['form_welcome']
  if (form_welcome) {
    form_welcome.addEventListener('submit', e => {
      e.preventDefault()
      let this_form = form_welcome
      let data = new FormData(form_welcome)
      fetch(modalScriptURL, { method: 'POST', mode: 'cors', body: data})
        .then(response => showSuccessMessage(data, this_form))
        .catch(error => console.error('Error!', error.message))
    })  
  }

  const form_order = document.forms['form_order']
  if (form_order) {
    form_order.addEventListener('submit', e => {
      e.preventDefault()
      let this_form = form_order
      let data = new FormData(form_order)
      fetch(modalScriptURL, { method: 'POST', mode: 'cors', body: data})
        .then(response => showOrderSuccessMessage(data, this_form))
        .catch(error => console.error('Error!', error.message))
    })  
  }

  function showOrderSuccessMessage(data, this_form) {
    this_form.reset();
    $('.order_success').addClass('show');
    ga('send', {
      hitType: 'event',
      eventCategory: 'Заявка',
      eventAction: 'Успешно отправлено',
    })
  }

  function showSuccessMessage(data, this_form){
    this_form.reset();
    $('.success_notice').addClass('show');
    $('.modal_bg').addClass('show');
    ga('send', {
      hitType: 'event',
      eventCategory: 'Заявка',
      eventAction: 'Успешно отправлено',
    })
    setTimeout(function(){
      $('.success_notice').removeClass('show');
      $('.modal_bg').removeClass('show');
    }, 4500)
    console.log(data);
  }

  const form_commerce = document.forms['form_commerce']
  if (form_commerce) {
    form_commerce.addEventListener('submit', e => {
      e.preventDefault()
      let this_form = form_commerce
      let data = new FormData(form_commerce)
      fetch(modalScriptURL, { method: 'POST', mode: 'cors', body: data})
        .then(response => showCommerceSuccessMessage(data, this_form))
        .catch(error => console.error('Error!', error.message))
    })  
  }

  function showCommerceSuccessMessage(data, this_form) {
    this_form.reset();
    $('.commerce_success').addClass('show');
    ga('send', {
      hitType: 'event',
      eventCategory: 'Заявка',
      eventAction: 'Успешно отправлено',
    })
  }

  // Scrollbar.init(document.querySelector('body'));

  //WELCOME BLOCK
  // let headerContact = document.querySelector('.header_contact');
  // let headerContactStyle = getComputedStyle(headerContact);
  // let headerContactWidth = headerContactStyle.width;
  // let welcomeInfo = document.querySelector('.welcome_info');
  // let windowPadding = 'calc((100% - 1280px)/2)';
  let windowPadding = (window.screen.width - 1280)/2;
  // welcomeInfo.style.width = 'calc('+headerContactWidth+' + 4.5rem + (100% - 1280px)/2)';


  //SWIPER 
  var windowWidth = 767;
  
  // if (document.body.clientWidth < windowWidth) {
  //   var swiperServices = new Swiper('.swiper-services', {
  //     slidesPerView: 1,
  //     spaceBetween: 30,
  //     loop: true,
  //     autoplay: {
  //       delay: 3000,
  //     },
  //     speed: 1000,
  //     navigation: {
  //       nextEl: '.services_slider_next',
  //       prevEl: '.services_slider_prev',
  //     },
  //   })
  // } else {
  //   var swiperServices = new Swiper('.swiper-services', {
  //     slidesPerView: 3,
  //     spaceBetween: 30,
  //     slidesOffsetBefore: windowPadding,
  //     slidesOffsetAfter: windowPadding,
  //     loop: true,
  //     autoplay: {
  //       delay: 3000,
  //     },
  //     speed: 1000,
  //     navigation: {
  //       nextEl: '.services_slider_next',
  //       prevEl: '.services_slider_prev',
  //     },
  //   })
  // }

  //Page Services 
  let serviceTitlesAnimate = document.querySelectorAll('.service_title_animate');
  var serviceTitlesArray = Array.prototype.slice.call(serviceTitlesAnimate);
  serviceTitlesArray.forEach(function(title, index){
    if (title) {
      switch (index) {
        case 0:
          console.log('first');
          break;
        case 1:
          console.log('second');
          break;
        default:
          console.log('not');
      }
    }
  });

  //Services Slider
  let servicesSlides = document.querySelectorAll('.services_slider_slide');
  for (servicesSlide of servicesSlides) {
    if (servicesSlide) {
      servicesSlideFullWidth = servicesSlide.offsetWidth;
      servicesSlideWidth = (servicesSlideFullWidth/3) - 20;
      servicesSlide.style.height = servicesSlideFullWidth + 'px';  
      servicesSlide.style.backgroundSize = 2*servicesSlideFullWidth + 'px';  
      servicesSlide.addEventListener("mousemove", function(e) {
        // let servicesStyle = getComputedStyle(this);
        // servicesBgPositionY = servicesStyle.getPropertyValue('background-position-y');
        // servicesBgPositionX = servicesStyle.getPropertyValue('background-position-x');

        this.style.backgroundPositionX = 'calc(50% + ' + e.offsetX/10 + 'px)';
        this.style.backgroundPositionY = 'calc(50% + ' + e.offsetY/10 + 'px)';
      });
    }
  }

}

var allDictionaryItems = document.querySelectorAll('.dictionary_item');
var allDictionaryArray = [];
var charArray = [];

function createChar(item, char) {
  var newChar = document.createElement('div');
  newChar.className = 'dictionary_varchar red-color text-3xl mt-4 mb-1';
  newChar.innerHTML = char;
  item.before(newChar);
}

for (allDictionaryItem of allDictionaryItems) {
  if (allDictionaryItem) {
    var dictionaryName = allDictionaryItem.textContent;
    dictionaryChar = dictionaryName.replace(/\s/g, "").charAt(0);
    if (charArray.includes(dictionaryChar)) {
      console.log('уже есть');
    } else {
      charArray.push(dictionaryChar);
      createChar(allDictionaryItem, dictionaryChar)
    }
  }
}

//Быстрый поиск на странице Citylist
$("#search_dictionary_box").keyup(function() {
  var filter = $(this).val();
  filter = filter.toLowerCase();
  if (filter.length > 0) {
    $('.dictionary_varchar').css({'display':'none'});
  } else {
    $('.dictionary_varchar').css({'display':'block'});
  }
  $(".dictionary_item a").each(function() {
    var metadata = $(this).data("metadata");
    var regexp = new RegExp(filter); 
    var metadatastring = "";
    metadatastring = metadatastring.toLowerCase();

    if(typeof metadata.tag != "undefined") {
      metadatastring = metadata.tag.join(" ");
    }
    if (metadatastring.toLowerCase().search(regexp) < 0) {
      $(this).hide();
    } 
    else {
      $(this).show();
    }
  });
});

document.addEventListener("DOMContentLoaded", init);