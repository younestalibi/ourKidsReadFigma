$("#top-blog").slick({
  infinite: true,
  prevArrow: '<img src="assets/img/Vector1.png" class="fas fa-chevron-left">',
  nextArrow: '<img src="assets/img/Vector1.png" class="fas fa-chevron-right">',
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  dots: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        prevArrow: false,
        nextArrow: false,
        slidesToShow: 1,
        dots: false,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        prevArrow: false,
        nextArrow: false,
        slidesToShow: 1,
        dots: false,
        slidesToScroll: 1,
      },
    },
  ],
});
$("#middle-blog").slick({
  infinite: true,
  prevArrow: '<img src="assets/img/Vector2.png" class="fas fa-chevron-left">',
  nextArrow: '<img src="assets/img/Vector2.png" class="fas fa-chevron-right">',
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  autoplay: false,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        prevArrow: false,
        nextArrow: false,
        slidesToShow: 1,
        dots: false,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        prevArrow: false,
        nextArrow: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
      },
    },
  ],
});
$("#bottom-blog").slick({
  infinite: true,
  prevArrow: '<img src="assets/img/Vector3.png" class="fas fa-chevron-left">',
  nextArrow: '<img src="assets/img/Vector3.png" class="fas fa-chevron-right">',
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  autoplay: false,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        prevArrow: false,
        nextArrow: false,
        slidesToShow: 1,
        dots: false,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        prevArrow: false,
        nextArrow: false,
        slidesToShow: 1,
        dots: false,
        slidesToScroll: 1,
      },
    },
  ],
});