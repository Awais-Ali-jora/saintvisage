// head of department slider
$(document).ready(function() {
    (function($) {

        const hodSlider = $('.as-hod-slider');
        const treatmentSlider = $('.dt-slider-wrapper');
        const rpSlider = $('.rp-slider-item');
        const particleBg = $('#particlesjs');
        const percentage = $(".percentage");
        const cuSlide = $("#cu-slide");
        const cuWhatsappe = $("#cu-whatsapp");
        const cuMessenger = $("#cu-messenger");
        if (hodSlider.length > 0) {
            $(function() {
                $('.as-hod-slider').slick({
                    slidesToShow: 3,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    prevArrow: false,
                    nextArrow: false,
                    responsive: [{
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 3,
                                infinite: true,
                            }
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 3,
                                infinite: true,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
                                infinite: true,
                            }
                        },
                        {
                            breakpoint: 576,
                            settings: {
                                slidesToShow: 1,
                                infinite: true,
                            }
                        }
                    ]
                });
            })
        }
        if (treatmentSlider.length > 0) {
            $(function() {
                $('.dt-slider-wrapper').slick({
                    slidesToShow: 4,
                    slideToScroll: 1,
                    // autoplay: true,
                    autoplaySpeed: 3000,
                    prevArrow: false,
                    nextArrow: false,
                    dots: true,
                    responsive: [{
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 4,
                                infinite: true,
                            }
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 3,
                                infinite: true,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
                                infinite: true,
                            }
                        },
                        {
                            breakpoint: 576,
                            settings: {
                                slidesToShow: 1,
                                infinite: true,
                            }
                        }
                    ]
                });
            })
        }
        if (rpSlider.length > 0) {
            $(function() {
                $(".rp-slider-item").owlCarousel({

                    //navigation : true, // Show next and prev buttons
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true,
                    autoPlay: false,

                    autoplaySpeed: 4000,
                    loop: true,
                    slideSpeed: 300,

                });
            })
        }
        if (particleBg.length > 0) {
            $(function() {
                particlesJS('particlesjs',

                    {
                        "particles": {
                            "number": {
                                "value": 80,
                                "density": {
                                    "enable": true,
                                    "value_area": 900
                                }
                            },
                            "color": {
                                "value": "#fcb200"
                            },
                            "shape": {
                                "type": "circle",
                                "stroke": {
                                    "width": 0,
                                    "color": "#000000"
                                },
                                "polygon": {
                                    "nb_sides": 5
                                },
                                "image": {
                                    "src": "img/github.svg",
                                    "width": 100,
                                    "height": 100
                                }
                            },
                            "opacity": {
                                "value": 0.5,
                                "random": true,
                                "anim": {
                                    "enable": false,
                                    "speed": 1,
                                    "opacity_min": 0.1,
                                    "sync": false
                                }
                            },
                            "size": {
                                "value": 30,
                                "random": true,
                                "anim": {
                                    "enable": false,
                                    "speed": 40,
                                    "size_min": 0.1,
                                    "sync": false
                                }
                            },
                            "line_linked": {
                                "enable": false,
                                "distance": 500,
                                "color": "#ffffff",
                                "opacity": 0.4,
                                "width": 2
                            },
                            "move": {
                                "enable": true,
                                "speed": 10,
                                "direction": "top",
                                "random": false,
                                "straight": false,
                                "out_mode": "out",
                                "bounce": false,
                                "attract": {
                                    "enable": false,
                                    "rotateX": 600,
                                    "rotateY": 1200
                                }
                            }
                        },
                        "interactivity": {
                            "detect_on": "window",
                            "events": {
                                "onhover": {
                                    "enable": true,
                                    "mode": "repulse"
                                },
                                "onclick": {
                                    "enable": false,
                                    "mode": "repulse"
                                },
                                "resize": true
                            },
                            "modes": {
                                "grab": {
                                    "distance": 400,
                                    "line_linked": {
                                        "opacity": 0.5
                                    }
                                },
                                "bubble": {
                                    "distance": 400,
                                    "size": 4,
                                    "duration": 0.3,
                                    "opacity": 1,
                                    "speed": 3
                                },
                                "repulse": {
                                    "distance": 200,
                                    "duration": 0.4
                                },
                                "push": {
                                    "particles_nb": 4
                                },
                                "remove": {
                                    "particles_nb": 2
                                }
                            }
                        },
                        "retina_detect": true
                    }
                );
            })
        }
        if (percentage.length > 0) {
            $(function() {
                $('.percentage').easyPieChart({
                    size: 200,
                    barColor: "#fec339",
                    trackColor: "#000",
                    lineCap: "round",
                    lineWidth: 10,
                    animate: 2000,
                    scaleLength: 0,
                    //scaleColor: '#dfe0e0',
                });
            });

        }
        if (cuSlide.length > 0) {
            $(function() {
                $('#cu-slide').on('mouseenter', function() {
                    var that = $(this);
                    that.css('transition', 'all ease-in-out .80s');
                    that.css('background', '#fec33a');
                    that.css('cursor', 'pointer');
                    that.find('.cu-form').stop(true, true).show("slide", { direction: "right" }, 400);
                }).on('mouseleave', function() {
                    var that = $(this);
                    that.css('background', '#b9b9b9');
                    that.find('.cu-form').stop(true, true).hide("slide", { direction: "right" }, 400);
                });
            })
            $(function() {
                $('.cu-whatsapp').on('mouseenter', function() {
                    var that = $(this);
                    that.css('transition', 'all ease-in-out .80s');
                    that.css('background', '#26d367');
                    that.css('cursor', 'pointer');
                    that.find('.cu-w-slider').stop(true, true).show("slide", { direction: "right" }, 400);
                }).on('mouseleave', function() {
                    var that = $(this);
                    that.css('background', '#b9b9b9');

                    that.find('.cu-w-slider').stop(true, true).hide("slide", { direction: "right" }, 400);
                });
            })
            $(function() {
                $('.cu-messenger').on('mouseenter', function() {
                    var that = $(this);
                    that.css('transition', 'all ease-in-out .80s');
                    that.css('background', '#007ff7');
                    that.css('cursor', 'pointer');
                    that.find('.cu-m-slider').stop(true, true).show("slide", { direction: "right" }, 400);
                }).on('mouseleave', function() {
                    var that = $(this);
                    that.css('background', '#b9b9b9');

                    that.find('.cu-m-slider').stop(true, true).hide("slide", { direction: "right" }, 400);
                });
            })
        }
        //new WOW().init();
    })(jQuery) //end of strict use

});