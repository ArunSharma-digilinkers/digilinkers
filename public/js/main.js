


$(document).ready(function () {
    // Only enable hover for large screens
    function enableHoverDropdown() {
        if (window.innerWidth >= 992) {
            $('.dropdown').hover(
                function () {
                    $(this).addClass('show');
                    $(this).find('.dropdown-toggle').attr('aria-expanded', 'true');
                    $(this).find('.dropdown-menu').addClass('show');
                },
                function () {
                    $(this).removeClass('show');
                    $(this).find('.dropdown-toggle').attr('aria-expanded', 'false');
                    $(this).find('.dropdown-menu').removeClass('show');
                }
            );
        } else {
            // Remove hover events to avoid issues on resize
            $('.dropdown').off('mouseenter mouseleave');
        }
    }

    enableHoverDropdown();

    // Re-apply on window resize
    $(window).on('resize', function () {
        enableHoverDropdown();
    });
});






document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.querySelector(".navbar");
    
    window.addEventListener("scroll", function () {
        if (window.scrollY > 100) { // Adjust the scroll threshold
            navbar.classList.add("fixed");
        } else {
            navbar.classList.remove("fixed");
        }
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            // Toggle the active class to show/hide answer
            item.classList.toggle('active');

            // Close other FAQ items when one is opened (optional, for accordion effect)
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
        });
    });
});


// owl carousel
$('.payment-logo').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    slideTransition: 'linear',
    autoplayHoverPause:true,
    autoplayTimeout: 5000,
    autoplaySpeed: 5000,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
})

$('.client-logo-landing').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    slideTransition: 'linear',
    autoplayHoverPause:true,
    autoplayTimeout: 2000,
    autoplaySpeed: 2000,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:5
        }
    }
})

$('.testimonial-review').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

  $(document).ready(function () {
    $('#contactForm').on('submit', function (e) {
        e.preventDefault();

        let form = $(this);
        let url = form.attr('action');
        let data = form.serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            success: function (response) {
                $('#formErrors').addClass('d-none').html('');
                $('#formSuccess').removeClass('d-none').text(response.message);
                form[0].reset();
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorHtml = '<ul>';
                    $.each(errors, function (key, value) {
                        errorHtml += '<li>' + value[0] + '</li>';
                    });
                    errorHtml += '</ul>';
                    $('#formSuccess').addClass('d-none').html('');
                    $('#formErrors').removeClass('d-none').html(errorHtml);
                }
            }
        });
    });
});

$('#quoteForm').on('submit', function (e) {
    e.preventDefault();

    let form = $(this);
    let url = form.attr('action');
    let data = form.serialize();

    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            $('#formErrors').html('');
            $('#formSuccess').html(response.message);
            form[0].reset();
        },
        error: function (xhr) {
            if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                let errorHtml = '<ul>';
                $.each(errors, function (key, value) {
                    errorHtml += '<li>' + value[0] + '</li>';
                });
                errorHtml += '</ul>';
                $('#formSuccess').html('');
                $('#formErrors').html(errorHtml);
            } else {
                $('#formErrors').html('Something went wrong. Please try again.');
            }
        }
    });
});


$(document).ready(function () {
    $('#sourcePage').val(window.location.href);
});

     CKEDITOR.replace('editor');


document.addEventListener("DOMContentLoaded", function() {
  const accordions = document.querySelectorAll("#faqAccordion .collapse");

  accordions.forEach((accordion) => {
    accordion.addEventListener("show.bs.collapse", function () {
      this.previousElementSibling.querySelector("i").classList.replace("fa-plus", "fa-minus");
    });

    accordion.addEventListener("hide.bs.collapse", function () {
      this.previousElementSibling.querySelector("i").classList.replace("fa-minus", "fa-plus");
    });
  });
});






