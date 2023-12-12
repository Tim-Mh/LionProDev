<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="<?php echo e(('adminpanel/template/images/favicon.PNG')); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Projects</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C500"/>
    <link rel="stylesheet" href="<?php echo e(asset('styles/projects-NDT.css')); ?>"/>
</head>
<body>
<div class="projects-mqF">
    <div class="auto-group-tbsj-hD7">
        <div class="auto-group-stdf-yRX">
            <div class="auto-group-da85-TrV">
                <div class="frame-10-ntm">
                    <a href="<?php echo e(route('home')); ?>" class="home-6uT">HOME</a>
                    <a href="<?php echo e(route('pro')); ?>" class="projects-CBo">PROJECTS</a>
                    <a  class="blogs-uru">BLOGS</a>
                    <a class="about-2Rj">ABOUT</a>
                </div>
                <div class="group-5-AH3">
                    <img class="group-4-X7b" src="<?php echo e(asset('assets/group-4.png')); ?>"/>
                    <img class="vector-G5B" src="<?php echo e(asset('assets/vector-Q5j.png')); ?>"/>
                </div>
            </div>
            <a href="<?php echo e(route('contact')); ?>" class="frame-bNM">start a project</a>
        </div>
        <div class="auto-group-6xsj-g8u">
            <div class="rectangle-19-cHT">
            </div>
            <p class="mark-came-to-us-with-an-idea-that-he-needed-help-making-come-to-life-the-wahlbeck-sci-fi-audibooks-app-lets-users-listen-to-unlimited-sci-fi-stories-wahlbeck-gives-you-endless-sci-fi-books-and-stories-each-piece-of-work-is-hand-curated-and-then-professionally-recorded-just-for-this-app-8Fo"> <?php echo e($project->description2); ?></p>
            <img class="portfolio1-1-5aM" src="<?php echo e(asset($project->image2)); ?>" alt="<?php echo e($project->title); ?>"/>
            <a href="<?php echo e(route('projects.video', ['filename' => basename($project->video)])); ?>" target="_blank" class="frame-Cus">Video Testimonial</a>
            <a href="<?php echo e(route('contact')); ?>" class="frame-Guj">Start your project</a>
            <p class="wahlbeck-sci-fi-audiobooks-xXf"><?php echo e($project->title); ?></p>
        </div>
    </div>
    <div class="auto-group-bbxh-dth">
        <div class="auto-group-yudp-ZnM">
            <div class="group-18-hNm">
                <img class="group-4-qUy" src="<?php echo e(asset('assets/group-4-jos.png')); ?>"/>
                <img class="vector-Nzh" src="<?php echo e(asset('assets/vector-vds.png')); ?>"/>
            </div>
            <div class="frame-22-Kf3">
                <a  class="about-us-dQq">About Us</a>
                <a  class="blog-AQm">Blog</a>
                <a href="<?php echo e(route('terms')); ?>" class="terms-conditions-JG5">Terms &amp; Conditions</a>
                <a href="<?php echo e(route('privacy')); ?>" class="privacy-policy-dp9">Privacy Policy</a>
            </div>
            <div class="frame-21-P2d">
                <img class="frame-WN9" src="<?php echo e(asset('assets/frame-kWq.png')); ?>"/>
                <img class="group-THP" src="<?php echo e(asset('assets/group.png')); ?>"/>
                <img class="icons8-tiktok-1-zYD" src="<?php echo e(asset('assets/icons8-tiktok-1-mQH.png')); ?>"/>
            </div>
        </div>
        <div class="group-19-LMB">
            <p class="subscribe-now-raR">SUBSCRIBE NOW</p>
            <div class="auto-group-7bur-PaM">
                <p class="your-email-8Xw">Your email</p>
                <div class="auto-group-9wch-GPF">
                    <img class="polygon-1-ci1" src="<?php echo e(asset('assets/polygon-1-QkD.png')); ?>"/>
                </div>
            </div>
        </div>
        <div class="group-48-XKB">
            <img class="vector-TTj" src="<?php echo e(('assets/vector-bz5.png')); ?>"/>
            <p class="all-rights-reserved-PcH"> 2023. All Rights Reserved.</p>
        </div>
    </div>
</div>
</body>
<?php /**PATH C:\laragon\www\LionProDev\resources\views/front-end/pro/wahlbeck.blade.php ENDPATH**/ ?>