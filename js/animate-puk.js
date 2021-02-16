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