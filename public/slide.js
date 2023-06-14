var slides = [];
var slideshows = document.querySelectorAll('.slideshow-container');
console.log(slideshows);
var childnode = [];
var index = 1;
slideshows.forEach((slideshow)=> {
 childnode = slideshow.childNodes;
 var element = [];
 for(var i=1; i<=5; i++) {
  var node = childnode[i];
  if(node.nodeType===1){
  element.push(node);
  }
 }
 slides.push(element);
 slideshow.addEventListener('mousewheel', function(event) {
  // Xử lý sự kiện lăn chuột tại đây
  var delta = event.wheelDelta;
  if (delta > 0) {
    // Lăn chuột lên
    index = 0;
  } else {
    // Lăn chuột xuống
    slideshow[index].classList.remove('active');
    index = index + 1;
    slideshow[index].classList.add('active');
  }
});
});

console.log(slides);
var currentSlide = 0;

function showSlide(index,n) {
  slides[1][currentSlide].classList.remove('active');
  currentSlide = (n + slides[1].length) % slides[1].length;
  slides[1][currentSlide].classList.add('active');
}

function nextSlide() {
  showSlide(index,currentSlide + 1);
}

function previousSlide() {
  showSlide(index,currentSlide - 1);
}

// Tự động chuyển slide sau một khoảng thời gian
setInterval(nextSlide, 5000);

// Đăng ký sự kiện cho các nút next và previous
var next = document.querySelectorAll('.nextBtn');
var prve = document.querySelectorAll('.prevBtn');
console.log(next);
console.log(prve);
next.forEach((nexts, index)=>{

  nexts.onclick = function() {
    
    nextSlide();
  }
});
prve.forEach( function(prves) {
  prves.onclick = function() {
   
    previousSlide();
  }
});
// Hiển thị slide đầu tiên khi trang được tải
showSlide(index,currentSlide);