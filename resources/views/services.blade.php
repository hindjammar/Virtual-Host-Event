<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('styles/services.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <title>Document</title>
    
</head>

<body > 
    <div class="ss">
    <section class="services-section">
        <div class="inner-width">
            <h1 class="h">OurServices</h1>
            <div class="services owl-carousel">

                <div class="service">
                    <div class="service-icon">
                        <img src="{{ 'images/regi.png' }}" />
                    </div>
                    <div class="service-name">Event Registration</div>
                    <div class="service-desc">Easily accept registration and payment in advance,
                        making signing up a seamless experience for your attendee</div>
                </div>

                <div class="service">
                    <div class="service-icon">
                        <img src="{{ 'images/i.png' }}" />
                    </div>
                    <div class="service-name">Technology Support</div>
                    <div class="service-desc">Whether it's platform testing prior to your event or assistance on the day
                        of, we'll provide technology support
                        to help your event run smoothly.</div>
                </div>

                <div class="service">
                    <div class="service-icon">
                        <img src="{{ 'images/vitevent.png' }}" />
                    </div>
                    <div class="service-name">Virtual Event Design</div>
                    <div class="service-desc">Our team will plan,
                        design and launch your virtual event to
                        meet the experiential and technical needs
                        of your attendees.</div>
                </div>

                <div class="service">
                    <div class="service-icon">
                        <img src="{{ 'images/regi.png' }}" />
                    </div>
                    <div class="service-name">Event Registration</div>
                    <div class="service-desc">Easily accept registration and payment in advance,
                        making signing up a seamless experience for your attendee</div>
                </div>




            </div>
        </div>



        </div>
    </section>
    <script>
        $(".services").owlCarousel({
            margin: 20,
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>
</body>

</html>
