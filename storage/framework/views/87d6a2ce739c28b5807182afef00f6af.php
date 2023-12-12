<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="<?php echo e(('adminpanel/template/images/favicon.PNG')); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LionProDev</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C500%2C700"/>
    <link rel="stylesheet" href="./styles/homepage2.css"/>
    <script>
        function moveCards() {
            const card1 = document.getElementById('card1');
            const card2 = document.getElementById('card2');
            const card3 = document.getElementById('card3');

            // Get the current left positions
            const left1 = card1.style.left;
            const left2 = card2.style.left;
            const left3 = card3.style.left;

            // Swap the left positions
            card1.style.left = left2;
            card2.style.left = left3;
            card3.style.left = left1;
        }
    </script>



    <style>
    a {
        text-decoration: none;
    }
    .group-8-M9o, .group-7-tay, .group-6-jED {
        transition: left 0.5s ease-in-out;
        position: relative;
    }
    @media only screen and (max-width:1000px){/*if it is 1000px change the font to 12 pt and so on for each resolution you need.*/
        .home-peh{font-size:20pt!important;
            color:yellow;
        }
        .frame-10-6yb{
            margin-left:-100px;
        }
        .projects-9S5{font-size:20pt!important;
            color:yellow;
        }
        .blogs-54q{font-size:20pt!important;
            color:yellow;
        }
        .about-QN1{font-size:20pt!important;
            color:yellow;
        }
        .group-5-9qP{
            width:500px!important;
        }

    }
    @media only screen and (max-width:800px){/*if it is 800px change the font to 11 pt and so on for each resolution you need.*/
        .home-peh{font-size:20pt!important;
            color:green;}
    }
    @media only screen and (max-width:600px){
        .home-peh{
            font-size:20pt!important;
            color:blue;
        }
    }
    @media only screen and (max-width:400px){
        .home-peh{font-size:20pt!important;
            color:red;}
    }
    @media only screen and (max-width:200px){
        .home-peh{font-size:20pt!important;
            color:purple;}

    }

    .centered{
        position: absolute;
        width:100%;
        height:auto;

        text-align:center;
        font-size:14pt;
    }
</style>
</head>
<body>

<div class="homepage2-mQZ">
    <div class="auto-group-8edt-gXX">
        <div class="rectangle-22-ZDw">
        </div>

        <div class="rectangle-19-oty">
        </div>
        <div style="left: 100px; z-index: 1;" id="card1" class="group-8-M9o">
            <img class="image-2-GXf" src="./assets/image-2-PAm.png"/>
            <div class="rectangle-21-nku">
            </div>
            <p class="the-floater-app-JjF">
                The Floater
                <br/>
                App
            </p>
        </div>
        <p class="project-portfolio-AFf">
            Project
            <br/>
            Portfolio
        </p>
        <p class="lorem-ipsum-dolor-sit-amet-consectetur-hac-scelerisque-quis-commodo-morbi-augue-ipsum-faucibus-at-lacinia-eget-in-tincidunt-EmK">Lorem ipsum dolor sit amet consectetur. Hac scelerisque quis commodo morbi augue ipsum. Faucibus at lacinia eget in tincidunt. </p>
        <div style="left: 300px; z-index: 2;" id="card2" class="group-7-tay">
            <img class="image-2-cWy" src="./assets/image-2.png"/>
            <div class="rectangle-21-vnZ">
            </div>
            <p class="the-floater-app-3MP">
                The Floater
                <br/>
                App
            </p>
        </div>
        <div style="left: 500px;z-index: 3;" id="card3" class="group-6-jED">
            <img class="image-1-s5X" src="./assets/image-1.png"/>
            <div class="rectangle-20-oUy">
            </div>
            <p class="wahlbeck-sc-fi-audiobooks-w5P">
                Wahlbeck
                <br/>
                Sc-Fi Audiobooks
            </p>
        </div>
        <img id="arrowForward" class="arrow-1-zZT" src="./assets/arrow-1.png" onclick="moveCards()"/>
        <img id="arrowBackward" class="arrow-3-LNR" src="./assets/arrow-3.png" onclick="moveCards()"/>


        <div class="group-26-Gms">
            <div style="margin-left: -1rem" class="auto-group-l1em-BLR">
                <div style="margin-left: -2.2rem" class="auto-group-57ob-tVj">1</div>
            </div>
            <div class="auto-group-wr1f-iXP">
                <div class="group-52-RRo">
                    <p class="development-strategy-aJh">Development Strategy</p>
                    <p class="first-well-develop-an-effective-app-strategy-includes-competitor-research-business-goals-and-a-product-roadmap-2K7">
                        First, we&#39;ll develop an effective app strategy includes competitor research, business goals, and a product roadmap.
                        <br/>

                        <br/>

                    </p>
                </div>
            </div>
        </div>
        <div class="group-27-TQR">
            <div  class="auto-group-l1em-BLR">
                <div style="margin-left: -2.2rem" class="auto-group-57ob-tVj">2</div>
            </div>
            <div class="auto-group-z3rw-DRX">
                <p class="user-experience-juf">User Experience</p>
                <p class="next-you-will-receive-designs-following-the-best-practices-and-app-store-ui-guidelines-sFB">
                    Next, you will receive designs following the best practices and app store UI guidelines.
                    <br/>

                    <br/>

                </p>
            </div>
        </div>
        <div class="group-28-8gu">
            <div  class="auto-group-l1em-BLR">
                <div style="margin-left: -2.2rem" class="auto-group-57ob-tVj">3</div>
            </div>
            <div class="auto-group-4jwh-Y8M">
                <div class="rectangle-24-5ty">
                </div>
                <p class="development-plan-build-2JR">
                    Development Plan &amp; Build
                    <br/>

                </p>
                <p class="after-finalizing-app-design-and-specifications-we-create-a-milestone-based-development-plan-and-build-the-application-WzH">
                    After finalizing app design and specifications, we create a milestone-based development plan and build the application.
                    <br/>

                    <br/>

                    <br/>

                    <br/>

                    <br/>

                </p>
            </div>
        </div>
        <div class="group-29-ycy">
            <div  class="auto-group-l1em-BLR">
                <div style="margin-left: -2.2rem" class="auto-group-57ob-tVj">4</div>
            </div>
            <div class="auto-group-pkzo-A5B">
                <div class="rectangle-24-Gtu">
                </div>
                <p class="testing-CXf">Testing</p>
                <p class="when-app-development-is-complete-we-perform-thorough-testing-to-deliver-a-stable-usable-and-secured-product-WHT">
                    When app development is complete, we perform thorough testing to deliver a stable, usable, and secured product.
                    <br/>

                    <br/>

                    <br/>

                    <br/>

                    <br/>

                    <br/>

                    <br/>

                    <br/>

                    <br/>

                </p>
            </div>
        </div>
        <p class="unpacking-the-process-83w">Unpacking the Process</p>
    </div>
    <div class="auto-group-x9oj-CJh">
        <p class="hear-it-from-our-trusted-clients-r8M">
      <span class="hear-it-from-our-trusted-clients-r8M-sub-0">
      Hear it from
      <br/>
      our
      </span>
            <span class="hear-it-from-our-trusted-clients-r8M-sub-1">Trusted</span>
            <span class="hear-it-from-our-trusted-clients-r8M-sub-2"> </span>
            <span class="hear-it-from-our-trusted-clients-r8M-sub-3">Clients!</span>
        </p>
        <img class="arrow-4-SGu" src="<?php echo e(asset('assets/arrow-4.png')); ?>"/>
        <div class="auto-group-z3ed-ATo">
            <div class="group-21-VFB">
                <div class="ellipse-9-MYH">
                </div>
                <p class="roofworx-dEu">Roofworx</p>
                <p class="lorem-ipsum-dolor-sit-amet-consectetur-tellus-massa-mi-tellus-eu-ultrices-imperdiet-pretium-enim-molestie-egestas-enim-nunc-9DF">Lorem ipsum dolor sit amet consectetur. Tellus massa mi tellus eu ultrices imperdiet pretium. Enim molestie egestas enim nunc.</p>
            </div>
            <div class="group-20-b5F">
                <div class="ellipse-9-HTs">
                </div>
                <p class="mark-wahlbeck-woK">Mark Wahlbeck</p>
                <p class="lorem-ipsum-dolor-sit-amet-consectetur-pretium-donec-aliquam-nisl-consequat-sagittis-penatibus-sit-dui-commodo-vulputate-UHT">Lorem ipsum dolor sit amet consectetur. Pretium donec aliquam nisl consequat. Sagittis penatibus sit dui commodo vulputate. </p>
            </div>
        </div>
        <img class="arrow-2-6pd" src="<?php echo e(asset('assets/arrow-2.png')); ?>"/>
    </div>
    <div class="auto-group-fkah-qGR">
        <div class="auto-group-bs8q-un5">
            <img class="item-4-1-261" src="./assets/.png"/>
            <p class="ideation-to-deployment-LMb">Ideation to Deployment</p>
            <p class="from-ideation-to-deployment-and-beyond-were-committed-to-ensuring-that-your-digital-product-is-not-just-functional-but-user-friendly-visually-appealing-and-optimized-for-performance-edB">
                From ideation to deployment and beyond, we&#39;re committed to ensuring that your digital product is not just functional, but user-friendly, visually appealing, and optimized for performance.
                <br/>

            </p>
            <div class="frame-dzu">Start Your Project</div>
        </div>
        <div class="auto-group-cu8d-FWV">
            <div class="rectangle-16-ziy">
            </div>
            <div class="rectangle-17-XD7">
            </div>
            <div class="frame-3SM">Start Your Project</div>
            <p class="update-and-refine-vW9">Update and Refine</p>
            <img class="item-5-1-RC1" src="./assets/-LoX.png"/>
            <p class="our-development-agency-specializes-in-fixing-and-optimizing-existing-applications-to-enhance-user-experience-improve-performance-and-drive-results-for-your-business-YXX">
                Our development agency specializes in fixing and optimizing existing applications to enhance user experience, improve performance, and drive results for your business.
                <br/>

            </p>
        </div>
        <div class="auto-group-k8ys-ZxR">
            <div class="item-6-1-UpV">
                <img class="vector-MdP" src="./assets/vector-d25.png"/>
                <img class="vector-HG9" src="./assets/vector-CR3.png"/>
            </div>
            <p class="custom-data-solutions-zZs">Custom Data Solutions</p>
            <p class="we-specialize-in-turning-complex-data-sets-into-meaningful-insights-and-creating-customized-web-solutions-that-leverage-your-data-to-drive-results-for-your-business-hUH">
                We specialize in turning complex data sets into meaningful insights and creating customized web solutions that leverage your data to drive results for your business.
                <br/>

            </p>
            <div class="frame-kBf">Start Your Project</div>
        </div>
    </div>
    <div class="auto-group-2dux-AFP">
        <div class="rectangle-11-gzR">
        </div>
        <a href="<?php echo e(route('contact')); ?>" class="frame-2oP">start a project</a>
        <div class="frame-7Zw">Get started</div>
        <p class="lets-bring-your-brilliant-ideas-to-life-Q3F">
            <span class="lets-bring-your-brilliant-ideas-to-life-Q3F-sub-0">Let’s bring your </span>
            <span class="lets-bring-your-brilliant-ideas-to-life-Q3F-sub-1">brilliant</span>
            <span class="lets-bring-your-brilliant-ideas-to-life-Q3F-sub-2"> ideas to life.</span>
        </p>
        <p class="we-work-closely-with-you-to-understand-your-unique-needs-and-bring-your-vision-to-life-so-whether-youre-looking-to-revamp-an-existing-website-or-create-a-custom-app-were-here-to-help-UhK">
            We work closely with you to understand your unique needs and bring your vision to life. So whether you&#39;re looking to revamp an existing website, or create a custom app, we&#39;re here to help.
            <br/>

        </p>
        <div  class="frame-10-6yb">
            <a href="<?php echo e(route('home')); ?>" class="home-peh">HOME</a>
            <a href="<?php echo e(route('pro')); ?>" class="projects-9S5">PROJECTS</a>
            <a href="<?php echo e(route('blogs')); ?>" class="blogs-54q">BLOGS</a>
            <a href="<?php echo e(route('about')); ?>"  class="about-QN1">ABOUT</a>
        </div>
        <a href="<?php echo e(route('home')); ?>">
        <div class="group-5-9qP">
            <img class="group-4-Usf" src="./assets/group-4-gvq.png"/>
            <img class="vector-RH7" src="./assets/vector.png"/>
        </div>
        </a>
        <img class="item-2-1-xH3" src="./assets/-qdw.png"/>
    </div>
    <p class="our-core-features-gD3">Our Core Features</p>
    <p class="understanding-your-vision-and-goals-and-providing-personalized-solutions-to-help-you-achieve-success-NLm">Understanding your vision and goals, and providing personalized solutions to help you achieve success</p>
    <div class="auto-group-8ckw-qVF">
        <div class="auto-group-ttlz-hnM">
            <a href="<?php echo e(route('home')); ?>">
            <div class="group-18-RyF">
                <img class="group-4-xTP" src="./assets/group-4-WPX.png"/>
                <img class="vector-geH" src="./assets/vector-sZX.png"/>
            </div>
            </a>
            <div class="frame-22-2CM">
                <a href="<?php echo e(route('about')); ?>" class="about-us-jsT">About Us</a>
                <a href="<?php echo e(route('blogs')); ?>" class="blog-sim">Blog</a>
                <a href="<?php echo e(route('terms')); ?>" class="terms-conditions-25s">Terms &amp; Conditions</a>
                <a href="<?php echo e(route('privacy')); ?>" class="privacy-policy-xER">Privacy Policy</a>
            </div>
            <div class="frame-21-HGh">
                <img class="frame-amb" src="./assets/frame-XSM.png"/>
                <img class="group-uYy" src="./assets/group-4VK.png"/>
                <img class="icons8-tiktok-1-EbF" src="./assets/linkedin.png"/>
            </div>
        </div>
        <div class="group-19-mLH">
            <p class="subscribe-now-Gnq">SUBSCRIBE NOW</p>
            <div class="auto-group-qsob-cLu">
                <p class="your-email-ki1">Your email</p>
                <div class="auto-group-e2wp-61B">
                    <img class="polygon-1-dG1" src="./assets/polygon-1-XnD.png"/>
                </div>
            </div>
        </div>
        <div class="group-16-w1o">
            <img class="vector-3qX" src="./assets/vector-yMo.png"/>
            <p class="all-rights-reserved-nHK"> 2023. All Rights Reserved.</p>
        </div>
    </div>
</div>
<div class="centered">HelloTIM</div>
</body>
<?php /**PATH C:\laragon\www\LionProDev\resources\views/front-end/home.blade.php ENDPATH**/ ?>