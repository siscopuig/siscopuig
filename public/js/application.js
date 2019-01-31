let mainNav=document.getElementById('main-nav');
let navbarToggle=document.getElementById('navbar-toggle');

navbarToggle.addEventListener('click',function(){

    if(this.classList.contains('active')){
        mainNav.style.display="none";
        this.classList.remove('active');
    }
    else{
        mainNav.style.display="flex";
        this.classList.add('active');

    }
});

// grab an element
var myElement = document.querySelector("header");
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(myElement);
// initialise
headroom.init(); 

// (function() {
//   var header = new Headroom(document.querySelector("#header"), {
//       tolerance: 5,
//       offset : 205,
//       classes: {
//         initial: "animated",
//         pinned: "slideDown",
//         unpinned: "slideUp"
//       }
//   });
//   header.init();

//   var bttHeadroom = new Headroom(document.getElementById("btt"), {
//       tolerance : 0,
//       offset : 500,
//       classes : {
//           initial : "slide",
//           pinned : "slide--reset",
//           unpinned : "slide--down"
//       }
//   });
//   bttHeadroom.init();
// }());



// var header = document.querySelector("#header");
// var headroom = new Headroom(header, {
//     "offset": 0,
//     "tolerance": 0,
//     "classes": {
//       "initial": "animated",
//       "pinned": "slideDown",
//       "unpinned": "slideUp"
//     }
//   });
//   headroom.init();
  // headroom.destroy();