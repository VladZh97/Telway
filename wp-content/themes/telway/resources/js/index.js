import "../scss/style.scss";


// MENU 

const burger = document.querySelector('.burger');
const menu = document.querySelector('.menu');
const search = document.querySelector('#ajaxsearchlite1');
const html = document.querySelector('html');


const toggleMenu = () => {
  menu.classList.toggle('active');
  document.body.classList.toggle("lock");
  html.classList.toggle("lock");
  if(menu.classList.contains('active')) {
    search.classList.add('visible')
  } else {
    search.classList.remove('visible');
  }
}

burger.addEventListener('click', toggleMenu)


$(".slide").owlCarousel({
  loop: true,
  margin: 5,
  nav: true,
  dots: true,
  smartSpeed: 1500,
  autoplay: true,
  autoplaySpeed: 2000,
  autoplayTimeout: 8000,
  responsive: {
    0: {
      items: 1,
    },
  },

  navText: [
    '<button type="button" class="slick-arrow slick-prev"><i class="fas fa-angle-left"></button>',
    '<button type="button" class="slick-arrow slick-next"><i class="fas fa-angle-right"></button>',
  ],
});

$(".news-page__content").owlCarousel({
  loop: true,
  margin: 15,
  nav: true,
  dots: true,
  smartSpeed: 1500,
  autoplay: true,
  autoplaySpeed: 2000,
  autoplayTimeout: 6000,
  dotsClass: "news-page__dots",
  dotClass: "news-page__dot",
  smartSpeed: 1000,
  responsive: {
    0:{
      items:1,
  },
  576: {
      items:2
  },
  768:{
      items:3
  },
  992:{
      items:4
  }
  },

  navText: [
    '<button type="button" class="news-page__prew news-page__arrow"><i class="fas fa-angle-left"></i></button>',
    '<button type="button" class="news-page__next news-page__arrow"><i class="fas fa-angle-right"></i></button>',
  ],
});



if(document.body.classList.contains('page-template-page-contact')) {

// MAP
mapboxgl.accessToken =
  "pk.eyJ1IjoidmxhZHpoIiwiYSI6ImNrZzBxcHpoMDB1ZmsydG9iMHE0YnJ6NDYifQ._kSahmQ3wNJverVwR7NxgA";
var map = new mapboxgl.Map({
  container: "map",
  style: "mapbox://styles/vladzh/ckg0u9w4o1jxq19s0tq7ftwaj",
  center: [19.8041093, 50.0412162],
  zoom: 12,
});

map.scrollZoom.disable();
map.boxZoom.disable();
map.dragRotate.disable();
map.keyboard.disable();
map.doubleClickZoom.disable();
map.touchZoomRotate.disable();

var point = document.createElement("div");
point.className = "marker";
point.innerHTML = '<i class="fas fa-map-marker-alt"></i>';
point.style.fontSize = "32px";
point.style.color = "#EC7714";

var marker = new mapboxgl.Marker(point)
    .setLngLat([19.8041093, 50.0412162])
    .addTo(map);
var popup = new mapboxgl.Popup({closeButton: true, closeOnClick: false, anchor: 'left'})
    .setLngLat([19.8041093, 50.0412162])
    .setHTML('<h5>Telway Sp. z o.o.</h5><p>Kryspinów 357<br />32-060 Liszki, Polska<br />tel: +48 (12) 222-00-31<br />fax: +48 (12) 222-00-26</p>')
    .addTo(map);
}