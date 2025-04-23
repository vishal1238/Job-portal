<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: linear-gradient(135deg, 
          #800000 0%, 
          #a83232 25%, 
          #800000 50%, 
          #6b0000 75%, 
          #800000 100%);
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
      position: relative;
    }

    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: 
          linear-gradient(rgba(128, 0, 0, 0.1) 1px, transparent 1px),
          linear-gradient(90deg, rgba(128, 0, 0, 0.1) 1px, transparent 1px);
      background-size: 20px 20px;
      pointer-events: none;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    form {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 50px 40px;
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
      width: 350px;
      transform: translateY(20px);
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
      100% { transform: translateY(0px); }
    }

    h2 {
      color: white;
      text-align: center;
      margin-bottom: 40px;
      font-size: 2.5em;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    input, textarea {
      width: 100%;
      padding: 15px 0;
      background: transparent;
      border: none;
      border-bottom: 2px solid rgba(255, 255, 255, 0.5);
      color: white;
      outline: none;
      font-size: 16px;
      margin-bottom: 35px;
      transition: 0.3s;
    }

    input:focus, textarea:focus {
      border-bottom: 2px solid white;
    }

    textarea {
      resize: none;
    }

    button {
      width: 100%;
      padding: 15px;
      background: white;
      color: #800000;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 600;
      transition: 0.3s;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    button:hover {
      background: #f8f8f8;
      color: #600000;
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }
    input::placeholder{  
            color: lightblue;
            opacity: 1;  
        } 
    textarea::placeholder {  
        color: lightblue;
        opacity: 1; 
        } 
  </style>
</head>
<body>
  <form id="contactForm">
    <h2>Contact Us</h2>
    <input type="text" name="name" placeholder="Your Name" required />
    <input type="email" name="email" placeholder="Your Email" required />
    <input type="text" name="subject" placeholder="Subject" required />
    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
    <button type="submit">Send Message</button>
  </form>

  <script>
    document.getElementById("contactForm").addEventListener("submit", function(e) {
      e.preventDefault();

      const formData = new FormData(this);

      fetch("contactus.php", {
        method: "POST",
        body: formData
      })
      .then(res => res.text())
      .then(data => {
        if (data.trim() === "success") {
          alert("Message saved successfully.");
          document.getElementById("contactForm").reset();
        } else {
          alert("Something went wrong. Try again.");
        }
      });
    });
  </script>

</body>
</html>
