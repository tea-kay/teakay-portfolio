<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teakay Portfolio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Gafata" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body data-spy="scroll">
    <nav class="container-fluid">
        <div class="row">
            <div class="logo">
                <a href="#"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="#blurb-start">About</a></li>
                    <li><a href="#work-start">My Work</a></li>
                    <li><a href="#contact-start">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container about-me">
        <div class="row">
            <!--This is where the top about me section begins-->
            <div class="col-md-8 col-md-offset-2 intro">
                <h1>Hi I'm Tim,</h1>
                <p>A Builder of tools and solver of problems. <br>I enjoy making things.</p>
                <div id="introImg"><a href="#blurb-start"><img src="img/intro-img.png"></a></div>
            </div>
            <!--This is where the top intro section ends-->
        </div>
        <div class="row">
        <a name="blurb-start"></a>
            <div class="blurb col-md-4 col-md-offset-2" id="">
                <h4><strong>I believe that:</strong> <br>The future is bright and that people are genuinely good.</h4>
                <h4><strong>This is why I'm looking to:</strong> <br> Work with innovative companies and work with ambitious
                    people.
                </h4>
            </div>
            <div class="blurb-img col-md-4">
                <img src="img/blurb-img.png" class="img-responsive">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="skills col-md-8 col-md-offset-2">
            <div class="row">
                <div class="skills-header col-md-4 col-md-offset-4">
                    <h3>My Skills</h3>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-4 skills-section">
                    <h4>Conceptualization</h4>
                    <p>Step one to any project is to get the vision and idea grounded. I enjoy "de-abstracting" ideas and making
                        them a concrete business opportunity.</p>
                </div>
                <div class="col-md-4 skills-section">
                    <h4>User Flows</h4>
                    <p>First impressions are important. The way a potential client finds us, learns about us and joins us should
                        all be carefully constructed.</p>
                </div>
                <div class="col-md-4 skills-section">
                    <h4>Project Management</h4>
                    <p>After years of spending time within marketing, product development and design, I’ve been able to develop
                        strong processes for delivering projects.</p>
                </div>
                <div class="col-md-4 skills-section">
                    <h4>Market Analysis</h4>
                    <p>Business is like comedy, timing is just as important as the product itself. Knowing how to position the
                        brand or when to pivot is a careful balance of intuition and data analysis.</p>
                </div>
                <div class="col-md-4 skills-section">
                    <h4>CRO</h4>
                    <p>What is Conversion Rate Optimization? It’s a fancy way of leveraging data like clicks,
                        time on site, and conversion rate to continually improve the acquition paths.</p>
                </div>
                <div class="col-md-4 skills-section">
                    <h4>Branding</h4>
                    <p>Your logo and name is more than a brand, it’s an identity. This identity continually gets shaped over time, like an individual, based on your values, actions and motives.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="work col-md-8 col-md-offset-2" id="">
            <div class="row">
                <div class="work-header col-md-4 col-md-offset-4">
                    <a name="work-start"></a>
                    <h3>Work I've Done</h3>
                </div>
            </div>
            <div class="row work-gallery">
                <div class="col-md-4 project1">
                    <img src="img/project-1.png" alt="" class="img-responsive">
                </div>
                <div class="col-md-4 project1">
                    <img src="img/project-2.png" alt="" class="img-responsive">
                </div>
                <div class="col-md-4 project1">
                    <img src="img/project-3.png" alt="" class="img-responsive">
                </div>
                <div class="col-md-4 project1">
                    <img src="img/project-4.png" alt="" class="img-responsive">
                </div>
                <div class="col-md-4 project1">
                    <img src="img/project-5.png" alt="" class="img-responsive">
                </div>
                <div class="col-md-4 project1">
                    <img src="img/project-6.png" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="contact-header col-md-4 col-md-offset-4" id="">
            <a name="contact-start"></a>
            <h3>Let's Talk</h3>
        </div>
        <div class="contact col-md-8 col-md-offset-2">
            <div class="contact-text col-md-6 contact-me">
                <p>As I mentioned, this site was designed just to give you a glimpse of the work I’ve done and who I am. <br>If
                    you want to chat about any projects you think I would be a good fit for contact me by email.</p>
            </div>
            <div class="form-section col-md-6">
                <form role="form" id="contact-form" class="contact-form" action="submit.php" method="post">
                    <!--<div class="row">-->
                    <div class="col-md-6">
                        <p><strong>Name:</strong><p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" autocomplete="off" id="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Email:</strong><p>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" autocomplete="off" id="email">
                        </div>
                    </div>
                    <!--</div>-->
                    <!--<div class="row">-->
                    <div class="col-md-12">
                        <p><strong>Message:</strong><p>
                        <div class="form-group message">
                            <textarea class="form-control textarea" rows="3" name="Message" id="Message"></textarea>
                        </div>
                    </div>
                    <!--</div>-->
                    <!--<div class="row">-->
                    <div class="col-md-12">
                        <button type="submit" class="btn main-btn pull-right">Send a message</button>
                    </div>
                    <!--</div>-->
                </form>
            </div>
            
        </div>
        
    </div>
    </div>
    <footer class="container-fluid text-center bg-lightgray">
        <div class="copyrights" style="margin-top:25px;">
            <p>teaky.io © 2017, All Rights Reserved
                <br>
                <span>Development By: Tim Kim</span></p>
            <p><a href="https://www.linkedin.com/in/realtimkim" target="_blank">Linkedin <i class="fa fa-linkedin-square" aria-hidden="true"></i> </a></p>
        </div>
    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="smoothscroll.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>