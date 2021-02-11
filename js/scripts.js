function init() {
  var Scrollbar = window.Scrollbar;

  //MOBILE MENU
  let headerHumburger = document.querySelector('.header_humburger');
  let mobileMenu = document.querySelector('.mobile_menu');
  let mobileMenuBgOne = document.querySelector('.mobile_menu_bg_one');
  let mobileMenuBgTwo = document.querySelector('.mobile_menu_bg_two');
  
  let mobileMenuHeight = mobileMenu.offsetHeight;
  mobileMenu.style.width = mobileMenuHeight + 'px';
  mobileMenuBgOne.style.width = mobileMenuHeight + 'px';
  mobileMenuBgTwo.style.width = mobileMenuHeight + 'px';
  mobileMenuBgOne.style.height = mobileMenuHeight + 'px';
  mobileMenuBgTwo.style.height = mobileMenuHeight + 'px';

  headerHumburger.addEventListener('click', function(){
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

  if ($(document).width() < windowWidth) {
    var swiperServices = new Swiper('.swiper-services', {
      slidesPerView: 1,
      spaceBetween: 30,
      
      loop: true,
      autoplay: {
        delay: 3000,
      },
      speed: 1000,
      navigation: {
        nextEl: '.services_slider_next',
        prevEl: '.services_slider_prev',
      },
    })
  } else {
    var swiperServices = new Swiper('.swiper-services', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesOffsetBefore: windowPadding,
      slidesOffsetAfter: windowPadding,
      loop: true,
      autoplay: {
        delay: 3000,
      },
      speed: 1000,
      navigation: {
        nextEl: '.services_slider_next',
        prevEl: '.services_slider_prev',
      },
    })
  }

  var controller = new ScrollMagic.Controller();
  //Анимация Портфолио
  let portfolioItems = document.querySelectorAll('.portfolio_item .portfolio_item_img img');
  var portfolio_array = Array.prototype.slice.call(portfolioItems);
  portfolio_array.forEach(function(item){
    var scene = new ScrollMagic.Scene({triggerElement: item,  duration: 650, offset: -250, ease: Linear.easeNone})
    .setTween(item, {left: 0})
    .addTo(controller);
  })
  
  //Анимация Кейсов
  let caseItems = document.querySelectorAll('.cases_item');
  var case_array = Array.prototype.slice.call(caseItems);
  case_array.forEach(function(item){
    var scene = new ScrollMagic.Scene({triggerElement: item,  triggerHook: 0.1})
    .setTween(item, {opacity: "0.95", scale: 0.95})
    .addTo(controller);
  })

  //Анимация Заголовков
  let textShow = document.querySelectorAll('.text-show');
  var text_show_array = Array.prototype.slice.call(textShow);
  text_show_array.forEach(function(item){
    console.log('text-show')
    var scene = new ScrollMagic.Scene({triggerElement: item,  duration: 1000, offset: -250, ease: Linear.easeNone})
    .setTween(item, {scaleX: 0,})
    .addTo(controller);
  })
  

  //Services
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


  // // Animate Portfolio
  // let animateElements = document.querySelectorAll('.portfolio_animate_this');
  // var div_array = Array.prototype.slice.call(animateElements);
  // let screenHeight = window.innerHeight;;
  // let pageHeight = document.body.clientHeight;

  // div_array.forEach(function(item){
  //   if (item) {
  //     var moveVar = 80;
  //     var animateElHeight = item.offsetHeight;
  //     var animateElFromTop = item.getBoundingClientRect().top + pageYOffset - screenHeight;
  //     document.addEventListener('scroll', function(){
  //       currentScroll = pageYOffset;
  //       if (animateElFromTop < currentScroll & currentScroll < (animateElFromTop+screenHeight)) {
  //         // moveVar = 100-(-100*((animateElFromTop - currentScroll)/animateElHeight));
  //         var moveVar = (80-(80*(currentScroll - animateElFromTop))/screenHeight);
  //         var moveVar = Math.floor(moveVar);
  //         var transformAnimate = "translate3d("+moveVar+"%, 0, 0)";
  //         item.style.transform = transformAnimate;  
  //       }
  //     });
  //   }
  // })


  // //Cases
  // let caseItems = document.querySelectorAll('.cases_item');
  // var case_array = Array.prototype.slice.call(caseItems);
  // case_array.forEach(function(item){
  //   if (item) {
  //     var opacityVar = 1;
  //     var animateElFromTop = item.getBoundingClientRect().top + pageYOffset - screenHeight;
  //     var animateElHeight = item.offsetHeight;
  //     document.addEventListener('scroll', function(){
  //       if (-1*(animateElFromTop - currentScroll) > (screenHeight - 50)) {
  //         var opacityVar = 2 + ((currentScroll - animateElFromTop)/-(screenHeight));
  //         // var transformVar = Math.floor(moveVar);
  //         console.log(currentScroll - animateElFromTop);
  //         console.log(screenHeight);
  //         item.style.opacity = opacityVar;  
  //       };
  //     });

  //   }
  // });

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



  var ctx = document.getElementById('myChart').getContext('2d');
  var gradientFill = ctx.createLinearGradient(320, 0, 320, 320);
  gradientFill.addColorStop(0, "#3d9e40");
  gradientFill.addColorStop(1, "rgba(0, 0, 0, 0.01)");
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        datasets: [{
            backgroundColor: gradientFill,
            label: 'Количество ключевых слов в ТОП-3',
            data: [126, 148, 140, 345, 410, 450, 567, 760, 810],
            // backgroundColor: ['rgba(244,119,35,0.25)'],
            borderColor: ['rgba(255,255,255,0.5)','rgba(255,255,255,0.5)','rgba(255,255,255,0.5)','rgba(255,255,255,0.5)','rgba(255,255,255,0.5)','rgba(255,255,255,0.5)'],
            borderWidth: 3,
            pointRadius: 0,
        }]
    },
    options: {
      animation: {
        easing: "easeInOutBack"
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          },
          gridLines: {
            color: "rgba(255, 255, 255, 0.01)",
          }
        }],
        xAxes: [{
          gridLines: {
            display:false
          }
        }],
      }
    }
});
}


document.addEventListener("DOMContentLoaded", init);