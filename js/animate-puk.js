let welcomeSvg = document.querySelector('.welcome .welcome_info svg circle');
if (welcomeSvg) {
	welcomeSvg.setAttribute('class', 'outer totop-show');	
};

console.log('work');

function onEntry(entry) {
  entry.forEach(change => {
    if (change.isIntersecting) {
      change.target.classList.add('show-puk');
    }
  });
}

let options = {
  threshold: [0.1] };
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.animate-puk');

for (let elm of elements) {
  observer.observe(elm);
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

//Анимация Задать Вопрос (Welcome Block)
let welcomeLeadText = document.querySelectorAll('.welcome_lead_text');
var welcome_lead_text_array = Array.prototype.slice.call(welcomeLeadText);
welcome_lead_text_array.forEach(function(item){
  console.log('welcome_lead_text');
  var scene = new ScrollMagic.Scene({triggerElement: item, duration: 50,  offset: -250, ease: Linear.easeNone});
  scene.setClassToggle('welcome_lead_text', 'hidden');
  scene.addTo(controller);
})

//Анимация ракеты (CREATE)
let createRocket = document.querySelectorAll('.create-rocket');
var create_rocket_array = Array.prototype.slice.call(createRocket);
create_rocket_array.forEach(function(item){
  var scene = new ScrollMagic.Scene({triggerElement: item,  duration: 2000,  ease: Linear.easeNone})
  .setTween(item, {top: -200, left: 200})
  .addTo(controller);
})

//Анимация CreateStat SECOND
let createStatSecond = document.querySelectorAll('.services_stat_second');
var create_stat_second_array = Array.prototype.slice.call(createStatSecond);
create_stat_second_array.forEach(function(item){
  var scene = new ScrollMagic.Scene({triggerElement: item, triggerHook: 1, duration: 750, ease: Linear.easeNone})
  .setTween(item, {top: 0, left: 0})
  .addTo(controller);
})

//Анимация CreateStat THIRD
let createStatThird = document.querySelectorAll('.services_stat_third');
var create_stat_third_array = Array.prototype.slice.call(createStatThird);
create_stat_third_array.forEach(function(item){
  var scene = new ScrollMagic.Scene({triggerElement: item, triggerHook: 1, duration: 750, ease: Linear.easeNone})
  .setTween(item, {top: 0, left: 0})
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