<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Company Listings</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #ab183d;
      margin: 0;
      padding: 20px;
    }

    .container {
      max-width: 1000px;
      margin: auto;
    }

    .company-card {
      background: #fff;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      display: flex;
      gap: 20px;
    }

    .logo {
      width: 80px;
      height: 80px;
      object-fit: contain;
    }

    .info h2 {
      margin: 0;
      font-size: 20px;
    }

    .rating {
      color: #ff9800;
      font-size: 16px;
    }

    .info p {
      margin: 6px 0;
    }
    .info a {
      text-decoration: none;
    }

    .stats {
      margin-top: 10px;
      display: flex;
      gap: 15px;
      font-size: 14px;
      color: #555;
    }

    .description {
      cursor: pointer;
      color: #444;
    }

    .description .full {
      display: none;
    }

    .description.expanded .short {
      display: none;
    }

    .description.expanded .full {
      display: inline;
    }
  </style>
</head>
<body>
  <div class="container">

    <!-- IBM -->
    <div class="company-card">
      <img src="https://logo.clearbit.com/ibm.com" alt="IBM logo" class="logo">
      <div class="info">
        <h2>IBM <span class="rating">4.0 ★</span></h2>
        <p>10000+ employees · <a href="#">37 office locations</a></p>
        <p class="description" onclick="toggleDescription(this)">
          <span class="short">IBM works to design, advance, and scale the technologies...</span>
          <span class="full">IBM works to design, advance, and scale the technologies that define each era. Our work spans computing, AI, cloud, and quantum to solve real-world challenges at scale.</span>
        </p>
        <div class="stats">
          <span>328 jobs</span>
          <span>1.2K reviews</span>
          <span>42.6K salaries</span>
        </div>
      </div>
    </div>

    <!-- Teleperformance -->
    <div class="company-card">
      <img src="https://logo.clearbit.com/teleperformance.com" alt="Teleperformance logo" class="logo">
      <div class="info">
        <h2>Teleperformance <span class="rating">4.7 ★</span></h2>
        <p>10000+ employees · <a href="#">39 office locations</a></p>
        <p class="description" onclick="toggleDescription(this)">
          <span class="short">Teleperformance is the leading global provider...</span>
          <span class="full">Teleperformance is the leading global provider of outsourced Digital Integrated Business Services, combining human touch and high technology to deliver exceptional customer experiences.</span>
        </p>
        <div class="stats">
          <span>2.9K jobs</span>
          <span>79.8K reviews</span>
          <span>11.6K salaries</span>
        </div>
      </div>
    </div>

    <!-- Google -->
    <div class="company-card">
      <img src="https://logo.clearbit.com/google.com" alt="Google logo" class="logo">
      <div class="info">
        <h2>Google <span class="rating">4.3 ★</span></h2>
        <p>10000+ employees · Headquarters in Mountain View, United States</p>
        <p class="description" onclick="toggleDescription(this)">
          <span class="short">Since our founding in 1998, Google has grown...</span>
          <span class="full">Since our founding in 1998, Google has grown by leaps and bounds. We now offer hundreds of products used by billions of people across the globe, from YouTube to Android to Google Search.</span>
        </p>
        <div class="stats">
          <span>5.1K jobs</span>
          <span>62.3K reviews</span>
          <span>13.6K salaries</span>
        </div>
      </div>
    </div>

    <!-- Microsoft -->
    <div class="company-card">
      <img src="https://logo.clearbit.com/microsoft.com" alt="Microsoft logo" class="logo">
      <div class="info">
        <h2>Microsoft <span class="rating">4.2 ★</span></h2>
        <p>10000+ employees · <a href="#">60 office locations</a></p>
        <p class="description" onclick="toggleDescription(this)">
          <span class="short">At Microsoft, our mission is to empower...</span>
          <span class="full">At Microsoft, our mission is to empower every person and every organization on the planet to achieve more. We build platforms and services to enable digital transformation worldwide.</span>
        </p>
        <div class="stats">
          <span>983 jobs</span>
          <span>62.1K reviews</span>
          <span>14.3K salaries</span>
        </div>
      </div>
    </div>

    <!-- Cisco -->
    <div class="company-card">
      <img src="https://logo.clearbit.com/cisco.com" alt="Cisco logo" class="logo">
      <div class="info">
        <h2>Cisco <span class="rating">4.1 ★</span></h2>
        <p>10000+ employees · <a href="#">25 office locations</a></p>
        <p class="description" onclick="toggleDescription(this)">
          <span class="short">#WeAreCisco, where each person is unique...</span>
          <span class="full">#WeAreCisco, where each person is unique. We bring our talents to work as a team to power an inclusive future for all through innovation and technology infrastructure solutions.</span>
        </p>
        <div class="stats">
          <span>780 jobs</span>
          <span>37.3K reviews</span>
          <span>10.5K salaries</span>
        </div>
      </div>
    </div>

    <!-- Accenture -->
    <div class="company-card">
      <img src="https://logo.clearbit.com/accenture.com" alt="Accenture logo" class="logo">
      <div class="info">
        <h2>Accenture <span class="rating">4.1 ★</span></h2>
        <p>10000+ employees · <a href="#">50 office locations</a></p>
        <p class="description" onclick="toggleDescription(this)">
          <span class="short">Accenture is a global professional services...</span>
          <span class="full">Accenture is a global professional services company with leading capabilities in digital, cloud and security. Combining unmatched experience and specialized skills across more than 40 industries.</span>
        </p>
        <div class="stats">
          <span>1.1K jobs</span>
          <span>48.7K reviews</span>
          <span>22.3K salaries</span>
        </div>
      </div>
    </div>

    <!-- Infosys -->
    <div class="company-card">
      <img src="https://logo.clearbit.com/infosys.com" alt="Infosys logo" class="logo">
      <div class="info">
        <h2>Infosys <span class="rating">4.0 ★</span></h2>
        <p>10000+ employees · <a href="#">45 office locations</a></p>
        <p class="description" onclick="toggleDescription(this)">
          <span class="short">Infosys is a global leader in technology...</span>
          <span class="full">Infosys is a global leader in technology services and consulting. We enable clients in 45 countries to create and execute strategies for their digital transformation.</span>
        </p>
        <div class="stats">
          <span>1.9K jobs</span>
          <span>52.6K reviews</span>
          <span>18.4K salaries</span>
        </div>
      </div>
    </div>

    <!-- TCS -->
    <div class="company-card">
      <img src="https://logo.clearbit.com/tcs.com" alt="TCS logo" class="logo">
      <div class="info">
        <h2>TCS <span class="rating">3.9 ★</span></h2>
        <p>10000+ employees · <a href="#">60 office locations</a></p>
        <p class="description" onclick="toggleDescription(this)">
          <span class="short">Tata Consultancy Services is a global leader...</span>
          <span class="full">Tata Consultancy Services is a global leader in IT services, consulting & business solutions with a large network of innovation & delivery centers worldwide.</span>
        </p>
        <div class="stats">
          <span>2.3K jobs</span>
          <span>60.1K reviews</span>
          <span>20.7K salaries</span>
        </div>
      </div>
    </div>

    <!-- Amazon -->
    <div class="company-card">
      <img src="https://logo.clearbit.com/amazon.com" alt="Amazon logo" class="logo">
      <div class="info">
        <h2>Amazon <span class="rating">4.1 ★</span></h2>
        <p>10000+ employees · <a href="#">80+ global locations</a></p>
        <p class="description" onclick="toggleDescription(this)">
          <span class="short">Amazon is guided by four principles...</span>
          <span class="full">Amazon is guided by four principles: customer obsession, passion for invention, commitment to operational excellence, and long-term thinking that shapes our future goals.</span>
        </p>
        <div class="stats">
          <span>6.2K jobs</span>
          <span>92.4K reviews</span>
          <span>27.9K salaries</span>
        </div>
      </div>
    </div>

    <!-- Wipro -->
    <div class="company-card">
      <img src="https://logo.clearbit.com/wipro.com" alt="Wipro logo" class="logo">
      <div class="info">
        <h2>Wipro <span class="rating">3.8 ★</span></h2>
        <p>10000+ employees · <a href="#">35 office locations</a></p>
        <p class="description" onclick="toggleDescription(this)">
          <span class="short">Wipro Limited is a leading global...</span>
          <span class="full">Wipro Limited is a leading global information technology, consulting and business process services company that harnesses the power of cognitive computing and emerging technologies.</span>
        </p>
        <div class="stats">
          <span>1.6K jobs</span>
          <span>44.2K reviews</span>
          <span>16.1K salaries</span>
        </div>
      </div>
    </div>

  </div>

  <script>
    function toggleDescription(element) {
      element.classList.toggle("expanded");
    }
  </script>
</body>
</html>
