<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FAQ</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style type="text/css">
    body {
        background: radial-gradient(#fff, #ffd6d6);
        padding-top: 20px;
        font-family: 'Arial', sans-serif;
    }

    .header {
        border-radius: 20px 20px 0px 0px;
        padding: 20px 0;
        background: linear-gradient(45deg, #6a1b9a, #8e44ad);
        color: #fff;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2em;
        letter-spacing: 2px;
        margin-bottom: 20px;
        /* Add this line for space below the header */
    }

    .faq-wrapper {
        width: 75%;
        margin: 30px auto;
    }

    .faq-item {
        margin-bottom: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .faq-item:hover {
        transform: scale(1.02);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
    }

    .faq-item h3 {
        padding: 15px 20px;
        margin: 0;
        background: #6a1b9a;
        color: white;
        cursor: pointer;
        font-size: 1.3em;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: background 0.3s ease;
    }

    .faq-item h3:hover {
        background: #8e44ad;
    }

    .faq-body {
        display: none;
        padding: 20px;
        background-color: #f9f9f9;
        font-size: 1em;
        line-height: 1.6;
        color: #333;
        border-top: 1px solid #ddd;
        transition: all 0.3s ease;
    }

    .faq-plus {
        font-size: 1.4em;
        line-height: 1em;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .faq-item.active .faq-body {
        display: block;
        max-height: 500px;
        transition: all 0.3s ease;
    }

    .faq-item.active .faq-plus {
        transform: rotate(45deg);
    }

    hr {
        margin: 20px 0;
        border: 0;
        height: 1px;
        background-color: #e0e0e0;
        transition: all 0.3s ease;
    }

    /* Add responsive styles */
    @media screen and (max-width: 768px) {
        .faq-wrapper {
            width: 90%;
        }

        .header {
            font-size: 1.5em;
        }
    }
    </style>
    <script>
    document.querySelectorAll('.faq-item h3').forEach(item => {
        item.addEventListener('click', () => {
            const faqItem = item.parentElement;
            faqItem.classList.toggle('active');
        });
    });
    </script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="faq-wrapper">
                <div class="header">
                    <h1>FAQs</h1>
                </div>
                <div class="faq-inner">
                    <div class="faq-item">
                        <h3>
                            What is HelloFixer?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            HelloFixer is a web-based application that provides an accessible platform for users to post
                            service requests and for technicians to bid on tasks. It aims to offer flexible, affordable,
                            and inclusive services by allowing everyday individuals to offer their skills as
                            technicians, democratizing the service marketplace​.
                        </div>
                    </div>
                    <hr>
                    <div class="faq-item">
                        <h3>
                            How do I schedule a service with HelloFixer?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            Users can post tasks or service requests on HelloFixer. Technicians then bid on these tasks,
                            allowing users to choose the best offer based on price and service quality​.
                        </div>
                    </div>
                    <hr>
                    <div class="faq-item">
                        <h3>
                            Is HelloFixer able to provide same-day service?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            HelloFixer uses geo-location and real-time communication features to facilitate quick
                            service matching, which could allow for timely services​.
                        </div>
                    </div>
                    <hr>
                    <div class="faq-item">
                        <h3>
                            How many business applications exist?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            HelloFixer includes a web-based platform and a mobile application (for Android and iOS),
                            making two primary business applications​.
                        </div>
                    </div>

                    <hr>
                    <div class="faq-item">
                        <h3>
                            How do I pay for the services that HelloFixer provides?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            HelloFixer integrates a secure payment gateway for transactions between consumers and
                            technicians​.
                        </div>
                    </div>

                    <hr>
                    <div class="faq-item">
                        <h3>
                            How does HelloFixer keep my personal information secure?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            HelloFixer ensures the security of personal data through encryption and compliance with data
                            protection regulations, including GDPR. Data security is one of the key concerns mentioned
                            ​.
                        </div>
                    </div>

                    <hr>
                    <div class="faq-item">
                        <h3>
                            What services does HelloFixer offer?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            HelloFixer offers a wide range of services, focusing on home and appliance repairs. The
                            platform allows users to post custom tasks, which can cover various types of technical and
                            repair work​​.
                        </div>
                    </div>

                    <hr>
                    <div class="faq-item">
                        <h3>
                            Are HelloFixer’s technicians and professionals qualified and experienced?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            Technicians on HelloFixer are everyday individuals who can offer services based on their
                            skills, not necessarily formal employment. The platform includes technician verification and
                            background checks to ensure trustworthiness and capability​​.
                        </div>
                    </div>

                    <hr>
                    <div class="faq-item">
                        <h3>
                            Is HelloFixer available on weekends and holidays?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            since it is a dynamic, bid-based platform with real-time communication, it is likely that
                            services could be available based on technician availability​.
                        </div>
                    </div>
                    <hr>
                    <div class="faq-item">
                        <h3>
                            What services does HelloFixer offer?
                            <span class="faq-plus">&plus;</span>
                        </h3>
                        <div class="faq-body">
                            HelloFixer offers a range of services, particularly focusing on home repairs and appliance
                            fixes. The platform allows users to post tasks related to various repair and maintenance
                            needs​​.
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(".faq-plus").on('click', function() {
        $(this).parent().parent().find('.faq-body').slideToggle();
    });
    </script>
</body>

</html>