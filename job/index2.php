
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIND ROJGAR</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>
    <center>
        <div id="header1">
            <div id="headerimg">
            <img src="image/logo.png" height="150" width="150"/>
            </div>
            <div id="headerS">
                FIND ROJGAR<br>
                <p>WWW.FINDROJGAR.COM</p>
            </div>
            
            <?php
            session_start();
            if (!isset($_SESSION["user"])) {
                header("Location: login.php");
                exit();
            }
            $fullName = $_SESSION["user"];
            ?>
            <h1 style="text-align: center; color:aliceblue; margin-top:5px;margin-right: 200px;">
                Welcome <?php echo htmlspecialchars($fullName); ?>
            </h1>
            <div id="login">
                <a href="logout.php" class="login-btn">Logout</a>
            </div>
        </div>
        
        <div id="header2"> 
            <div id="header2UL">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#it-jobs">IT Jobs</a></li>
                    <li><a href="#other-jobs">Other Jobs</a></li>
                    <li><a href="Companies/CompaniesReviews.php">Companies reviews</a></li>  
                    <li><a href="#">Hiring Agent</a></li>
                    <li><a href="Contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>  
    </center>
    <br>
    <center>
        <div class="dreamjob">
            <h1>Get Your Dream Job</h1>
            <br>
        </div>
        <h1 class="joboftheday">Jobs of the Day</h1>
        <div class="container">
            <div class="job-grid">
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/microsoft.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Microsoft</h2>
                                <p class="job-type">Full-time</p>
                            </div>
                        </div>
                        <h3 class="job-title">Senior Software Engineer</h3>
                        <p class="job-description">Design and develop scalable backend systems and APIs using Java services.</p>
                        <div class="job-footer">
                            <span class="salary">$2500/month</span>
                            <a href="https://jobs.careers.microsoft.com/global/en/job/1797990/Senior-Software-Engineer" class="apply-btn">Apply Now</a>
                        </div>
                    </div>
                    
                    <!-- Additional job cards -->
                    <div class="job-card">
                        <div class="job-header">
                            <img src="image/Logo/Amazon.png" class="company-logo" alt="Company Logo">
                            <div>
                                <h2 class="company-name">Amazon</h2>
                                <p class="job-type">Full-time</p>
                            </div>
                        </div>
                        <h3 class="job-title">Web Designer</h3>
                        <p class="job-description">Knowledge in developing web applications in React, TypeScript and NextJS.</p>
                        <div class="job-footer">
                            <span class="salary">$3000/month</span>
                            <a href="https://www.amazon.jobs/en/jobs/2942822/senior-ux-designer-art19" class="apply-btn">Apply Now</a>
                        </div>
                    </div>
                    
                    <div class="job-card">
                        <div class="job-header">
                            <img src="image/Logo/youtube.png" class="company-logo" alt="Company Logo">
                            <div>
                                <h2 class="company-name">Youtube</h2>
                                <p class="job-type">Full-time</p>
                            </div>
                        </div>
                        <h3 class="job-title">Software Engineer III</h3>
                        <p class="job-description">Design and develop scalable backend systems and APIs using Java services.</p>
                        <div class="job-footer">
                            <span class="salary">$2000/month</span>
                            <a href="https://www.google.com/about/careers/applications/apply/1a177faa-74fe-4444-8607-28d06177b9a5/form" class="apply-btn">Apply Now</a>
                        </div>
                    </div>
                    
                    <div class="job-card">
                        <div class="job-header">
                            <img src="image/Logo/yahoo.png" class="company-logo" alt="Company Logo">
                            <div>
                                <h2 class="company-name">Yahoo</h2>
                                <p class="job-type">Full-time</p>
                            </div>
                        </div>
                        <h3 class="job-title">Sr. Software QA Engineer</h3>
                        <p class="job-description">Python automation with cloud/networking experience.</p>
                        <div class="job-footer">
                            <span class="salary">$2200/month</span>
                            <a href="https://ouryahoo.wd5.myworkdayjobs.com/careers/job/India/Sr-Software-QA-Engineer_JR0025906" class="apply-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
    
    <div id="heading">
        <h2>Famous IT Jobs</h2>
    </div>
    <div id="it-jobs">
        <div id="jobheader">    
            <!-- Top 3 sections -->
            <div class="row">
                <div class="column large">
                    <div class="header-title">High Paying Jobs</div>
                    <div class="job-card">
                        <div class="job-header">
                            <img src="image/Logo/twitter.png" class="company-logo" alt="Company Logo">
                            <div>
                                <h2 class="company-name">Twitter</h2>
                                <p class="job-type">Full-time</p>
                            </div>
                        </div>
                        <h3 class="job-title">Software Developer</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="job-footer">
                            <span class="salary">$2500/month</span>
                            <a href="https://twitter.wd5.myworkdayjobs.com/X" class="apply-btn">Apply Now</a>
                        </div>
                    </div>
                    <br>
                    <div class="job-card">
                        <div class="job-header">
                            <img src="image/Logo/paypal.png" class="company-logo" alt="Company Logo">
                            <div>
                                <h2 class="company-name">Paypal</h2>
                                <p class="job-type">Full-time</p>
                            </div>
                        </div>
                        <h3 class="job-title">PaaS LLMs Engineering Intern</h3>
                        <p class="job-description">Experience with LLMs (e.g., DeepSeek, Llama, Qwen, GPT).
                        Knowledge of Docker/Kubernetes.</p>
                        <div class="job-footer">
                            <span class="salary">$84,500/year</span>
                            <a href="https://paypal.wd1.myworkdayjobs.com/en-US/jobs/job/PaaS-LLMs-Engineering-Intern_R0125226" class="apply-btn">Apply Now</a>
                        </div>
                    </div>
                    <br>
                    <div class="job-card">
                        <div class="job-header">
                        <img src="image/Logo/spotify.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Spotify</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Machine Learning Engineer
                    Music</h3>
                    <p class="job-description">Implementing ML systems at scale in Java, Scala, Python.</p>
                    <div class="job-footer">
                        <span class="salary">$197,500/Year</span>
                        <a href="https://www.lifeatspotify.com/jobs/machine-learning-engineer-music" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/yahoo.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Yahoo</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Software Developer</h3>
                    <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="job-footer">
                        <span class="salary">$2500/month</span>
                        <a href="https://ouryahoo.wd5.myworkdayjobs.com/careers/job/Ireland/Security-Software-Engineer_JR0024795" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/spotify.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Spotify</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Fullstack Engineer</h3>
                    <p class="job-description">Knowledge in developing web applications in React, TypeScript and NextJS.</p>
                    <div class="job-footer">
                        <span class="salary">not disclosed</span>
                        <a href="https://www.lifeatspotify.com/jobs/fullstack-engineer-subscriptions-rd" class="apply-btn">Apply Now</a>
                    </div>
                </div>
            </div>
    
            <div class="column large">
                <div class="header-title">Internships</div>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/oracle.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Oracle</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Junior Java Backend Developer</h3>
                    <p class="job-description">Expert in COre java, Data base, Spring Boot.</p>
                    <div class="job-footer">
                        <span class="salary">$250,000/year</span>
                        <a href="https://careers.oracle.com/jobs/#en/sites/jobsearch/jobs/preview/283880/?location=India&locationId=300000000106947" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/spotify.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Spotify</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Software Developer</h3>
                    <p class="job-description">Design and develop scalable backend systems and APIs using Java services.</p>
                    <div class="job-footer">
                        <span class="salary">$250,500/year</span>
                        <a href="https://www.lifeatspotify.com/jobs/backend-engineer" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/oracle.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Oracle</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Senior QA Engineer</h3>
                    <p class="job-description">Python automation with cloud/networking experience.</p>
                    <div class="job-footer">
                        <span class="salary">$180,500/year</span>
                        <a href="https://careers.oracle.com/jobs/#en/sites/jobsearch/jobs/preview/271583/?location=India&locationId=300000000106947" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/paypal.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Paypal</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Fullstack Engineering Intern</h3>
                    <p class="job-description">  Expert knowledge in Java, Spring framework, REST, gRPC.</p>
                    <div class="job-footer">
                        <span class="salary">$100,500/year</span>
                        <a href="https://paypal.eightfold.ai/careers?query=Engineering&pid=274905945305&domain=paypal.com&sort_by=relevance" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/Reliance.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Reliance</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Software Developer</h3>
                    <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="job-footer">
                        <span class="salary">$2500/month</span>
                        <a href="#" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                </div>
                
                <div class="column large">
                    <div class="header-title">Work From Home</div>
                    <div class="job-card">
                        <div class="job-header">
                            <img src="image/Logo/Adobe.png" class="company-logo" alt="Company Logo">
                            <div>
                                <h2 class="company-name">Adobe</h2>
                                <p class="job-type">Full-time</p>
                            </div>
                        </div>
                        <h3 class="job-title">Sr. Technical Consultant - Adobe Analytics</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="job-footer">
                            <span class="salary">$2500/month</span>
                            <a href="https://careers.adobe.com/us/en/job/R143633/Sr-Technical-Consultant-Adobe-Analytics" class="apply-btn">Apply Now</a>
                        </div>
                    </div>
                    <br>
                    <div class="job-card">
                        <div class="job-header">
                            <img src="image/Logo/illustrator.png" class="company-logo" alt="Company Logo">
                            <div>
                                <h2 class="company-name">Illustrator</h2>
                                <p class="job-type">Full-time</p>
                            </div>
                        </div>
                        <h3 class="job-title">Software Developer</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="job-footer">
                            <span class="salary">$2500/month</span>
                            <a href="https://www.upwork.com/freelance-jobs/illustration/" class="apply-btn">Apply Now</a>
                        </div>
                    </div>
                    <br>
                    <div class="job-card">
                        <div class="job-header">
                            <img src="image/Logo/google-pay.png" class="company-logo" alt="Company Logo">
                            <div>
                                <h2 class="company-name">Google Pay</h2>
                                <p class="job-type">Full-time</p>
                            </div>
                        </div>
                        <h3 class="job-title">Software Developer</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="job-footer">
                            <span class="salary">$2500/month</span>
                            <a href="https://www.google.com/about/careers/applications/apply/5716ba14-432f-4d19-a5ad-305b2b2ee7c8/form" class="apply-btn">Apply Now</a>
                        </div>
                    </div>
                    <br>
                    <div class="job-card">
                        <div class="job-header">
                            <img src="image/Logo/snapchat.png" class="company-logo" alt="Company Logo">
                            <div>
                                <h2 class="company-name">SnapChat</h2>
                                <p class="job-type">Full-time</p>
                            </div>
                        </div>
                        <h3 class="job-title">Software Developer</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="job-footer">
                            <span class="salary">$2500/month</span>
                            <a href="https://careers.snap.com/job?id=R0040056" class="apply-btn">Apply Now</a>
                        </div>
                    </div>
                    <br>
                    <div class="job-card">
                        <div class="job-header">
                            <img src="image/Logo/oracle.png" class="company-logo" alt="Company Logo">
                            <div>
                                <h2 class="company-name">Oracle</h2>
                                <p class="job-type">Full-time</p>
                            </div>
                        </div>
                        <h3 class="job-title">PLSQL Developer (Flexcube)</h3>
                        <p class="job-description">Excellent hands-on coding and design skills in Oracle SQL, PL/SQL, FLEXCUBE knowledge is must.</p>
                        <div class="job-footer">
                            <span class="salary">$100,500/year</span>
                            <a href="https://careers.oracle.com/jobs/#en/sites/jobsearch/jobs/preview/287536/?location=India&locationId=300000000106947" class="apply-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="heading">
            <h2>Government Jobs</h2>
        </div>
            <!-- Middle 3 sections -->
            <div id="other-jobs" class="row1">
                <div class="column medium">
                    <div class="header-title">Railways</div>
                    <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/logo.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Ministry of Railways</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Railway Assistant Loco Pilot</h3>
                    <p class="job-description">Minimum Age : 18 Years. Maximum Age : 30 Years. <br>        Age Relaxation Extra as per Railway Recruitment Board RRB ALP Recruitment Advt No. CEN 01/2025 Vacancy Rules.</p>
                    <div class="job-footer">
                        <span class="salary">Rs.19,900 to Rs.35,000/month</span>
                        <a href="https://www.rrbapply.gov.in/#/auth/landing" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/logo.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Ministry of Railways</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">RRC SECR Nagpur Apprentices</h3>
                    <p class="job-description">Minimum Age : 15 Years. Maximum Age : 24 Years.<br>        Age Relaxation Extra as per Railway Recruitment Cell RRC South East Central Railway SECR Nagpur Act Apprentice Rules 2025-2026</p>
                    <div class="job-footer">
                        <span class="salary">Rs. 7700-8050/month</span>
                        <a href="https://www.apprenticeshipindia.gov.in/candidate-login" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/logo.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Ministry of Railways</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">RRB Ministerial and Isolated Post</h3>
                    <p class="job-description">Master Degree in Related Subject with at Least Minimum 50% Marks B.Ed Exam Passed.<br>
                    Age Limit : 18-48 Years.<br>
                    More Subject Wise Eligibility Details Read the Notification</p>
                    <div class="job-footer">
                        <span class="salary">Rs. 19,900 to Rs. 47,600/month</span>
                        <a href="https://www.rrbapply.gov.in/#/auth/landing" class="apply-btn">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="column medium">
                <div class="header-title">Defence</div>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/up.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">EUttar Pradesh Police Recruitment and Promotion Board</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">UP Police</h3>
                    <p class="job-description">UP Police Constable  : Male : 18-22 Year, Female : 18-25 Years.  <br>       
                        UP Police Sub Inspector SI  : 21-28 Years.<br>
                        UP Police Jail Warden : 18-22 Years</p>
                    <div class="job-footer">
                        <span class="salary">Rs.21,700 to Rs.78,800/month</span>
                        <a href="#" class="apply-btn">Link Activate Soon</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/army.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Join Indian Army (Bhartiya Sena)</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Army Agniveer</h3>
                    <p class="job-description">For Agniveer GD / Technical / Assistant / Tradesman : 17.5 to 21 Years<br>
                        For Soldier Technical : 17.5 to 23 Years <br>
                        For Sepoy Pharma : 19-25 Years <br>
                    <div class="job-footer">
                        <span class="salary">Rs. 21000/month</span>
                        <a href="https://joinindianarmy.nic.in/Authentication.aspx" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/navy.jpg" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Join Indian Navy (Nausena Bharti)</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Indian Navy Entrance Test</h3>
                    <p class="job-description">Agniveer SSR / MR 02/2025 Batch Age Limit : 01/09/2004 to 29/02/2008<br>
                    Agniveer SSR / MR 01/2026 Batch Age Limit : 01/02/2005  to 31/07/2008
                    <div class="job-footer">
                        <span class="salary">Rs. 21000/month</span>
                        <a href="https://agniveernavy.cdac.in/sailorscycle4/" class="apply-btn">Apply Now</a>
                    </div>
                </div>
            </div>
    
            <div class="column medium">
                <div class="header-title"> Other Government Jobs</div>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/bank.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Indian Overseas Bank (IOB) </h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">IOB Apprnetice</h3>
                    <p class="job-description">Minimum Age : 20 Years.<br>
                    Maximum Age : 28 Years.<br>
                    Age Relaxation Extra as per Indian Overseas Bank 2025 Apprentices Rules</p>
                    <div class="job-footer">
                        <span class="salary">Rs. 15000/month</span>
                        <a href="https://bfsissc.com/iob25.php" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/court.jpg" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">High Court of Judicature at Allahabad</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Allahabad High Court Research Associate</h3>
                    <p class="job-description">Minimum Age : 21 Years.<br>
                    Maximum Age : 26 Years.<br>
                    Age Relaxation as per Allahabad High Court AHC Research Associates Recruitment Rules.</p>
                    <div class="job-footer">
                        <span class="salary">Rs. 25000/month</span>
                        <a href="https://apps2.allahabadhighcourt.in/recruit/RAcurrent/index.jsp" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/bank.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Bank of Baroda</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Bank of Baroda BOB Apprentice</h3>
                    <p class="job-description">Minimum Age : 20 Years.<br>
                    Maximum Age : 28 Years.<br>
                    Age Relaxation Extra as per Bank of Baroda BOB Apprentices Rules</p>
                    <div class="job-footer">
                        <span class="salary">Rs. 15000/month</span>
                        <a href="https://bfsissc.com/bob.php" class="apply-btn">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Bottom 3 sections -->
        <div class="row2">
        <div class="column small">
                <div class="header-title">Education & Teaching Jobs</div>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/lpu.jpg" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">LPU</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Placement Officer</h3>
                    <p class="job-description">Division of Career Services</p>
                    <div class="job-footer">
                        <span class="salary">Rs. 1,20,000/month</span>
                        <a href="https://lpuonline.net/JobsOnline/OnlineJobApplied.aspx?Post=350&SubPost=135&Category=A#step-1" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/upsc.jpg" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Union Public Service Commission </h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">UPSC Assistant Professor</h3>
                    <p class="job-description">Maximum Age : 35 Years<br>
                    Age Relaxation Extra as per UPSC ORA Advt No 01/2025 Assistant Professor & Other Post Recruitment Rules 2025.</p>
                    <div class="job-footer">
                        <span class="salary">Rs. 57,700 to Rs. 1,82,400/month</span>
                        <a href="https://upsconline.gov.in/ora/VacancyNoticePub.php" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/mppsc.png" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">Madhya Pradesh Public Service Commission</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">MPPSC Assistant Professor</h3>
                    <p class="job-description">Minimum Age : 21 Years<br>
                    Maximum Age : 40 Years<br>
                    <div class="job-footer">
                        <span class="salary">Rs. 20,000/month</span>
                        <a href="https://www.mponline.gov.in/Portal/Examinations/MPPSC/Attestation/Home/Home.aspx" class="apply-btn">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="column small">
                <div class="header-title">Other Jobs</div>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/lpu.jpg" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">LPU</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Graphic Designer</h3>
                    <p class="job-description">Division of Architectural Design</p>
                    <div class="job-footer">
                        <span class="salary">Rs. 60000/month</span>
                        <a href="https://lpuonline.net/JobsOnline/OnlineJobApplied.aspx?Post=449&SubPost=192&Category=A#step-1" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/lpu.jpg" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">LPU</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Architect</h3>
                    <p class="job-description">Division of Architectural Design</p>
                    <div class="job-footer">
                        <span class="salary">Rs. 50000/month</span>
                        <a href="https://lpuonline.net/JobsOnline/OnlineJobApplied.aspx?Post=467&SubPost=420&Category=A#step-1" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <br>
                <div class="job-card">
                    <div class="job-header">
                        <img src="image/Logo/lpu.jpg" class="company-logo" alt="Company Logo">
                        <div>
                            <h2 class="company-name">LPU</h2>
                            <p class="job-type">Full-time</p>
                        </div>
                    </div>
                    <h3 class="job-title">Clinical Psychologist</h3>
                    <p class="job-description">Division of Student Relationship</p>
                    <div class="job-footer">
                        <span class="salary">Rs. 70000/month</span>
                        <a href="https://lpuonline.net/JobsOnline/OnlineJobApplied.aspx?Post=423&SubPost=423&Category=A#step-1" class="apply-btn">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="heading">
        <h2>Resume Builder Tool</h2>
        <h4><pre>
        Get hired 36% faster with our feature-packed and easy-to-use resume builder tool</pre></h4>
<br>
<button class="resume-btn" onclick="window.location.href='resume builder/index.html'"><strong>Create Your Resume</strong</button>
    </div>
    <footer>
        <div id="footer">
            <div class="content">
                <div class="left-section">
                    <div class="logoimg">
                        <a href="index.php"><img src="image/logo.png" /></a>
                    </div>
                    <h3>Contact</h3>
                    <br>
                    <address><pre>
Lovely Professional University
Jalandhar-Delhi, G.T. Road,
Phagwara, Punjab
(INDIA) -144411.</pre>
                    </address>
                    <br>
                    <h3>Follow Us</h3>
                    <div class="socials">
                        <a href="#"><i class="fa-brands fa-facebook-square"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-telegram"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
                <div class="right-section">
                    <div class="about">
                    <div id="about-us">
                        <h3>About</h3>
                    </div>
                        <a href="#">About Us</a>
                        <a href="privacy.php">Privacy Policy</a>
                        <a href="Contact.php">Contact Us</a>
                    </div>
                    <div class="instal">
                        <h3>Install App</h3>
                        <p>From App Store or Google Play</p>
                        <br>
                        <div class="download">
                            <a href="#"><img src="image/app_store.jpeg"></a>
                            <a href="#"><img src="image/play_store.jpeg"></a>
                        </div>
                        <br>
                        <h3>Secured Payment</h3>
                        <br>
                        <img src="image/payment.jpeg">
                    </div>
                </div>
            </div>
        </div>            
        <div class="copyright">
            <p>&copy; 2025 FIND ROJGAR. All Rights Reserved.</p>
            <p>CEO & FOUNDER: <strong>VISHAL GUPTA</strong></p>
        </div>
    </footer>
</body>
</html>