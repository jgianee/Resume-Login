<?php
// Resume Data
$name = "Janison Giane A. Bustos";
$title = "Computer Science Student | Aspiring Software Engineer";
$location = "Lucban, Quezon, Philippines";
$contact = [
    "phone" => "+63 976 094 3302",
    "email" => "janisongianebustos@gmail.com",
    "github" => "https://github.com/jgianee",
    "linkedin" => "https://linkedin.com/in/jgianee"
];

$summary = "Computer Science student with a strong foundation in software development, problem-solving, and teamwork. 
Passionate about learning modern technologies, contributing to real-world projects, and building solutions that improve user experiences. 
Eager to apply classroom knowledge to internships and collaborative projects.";

$skills = ["Java", "Python", "C++", "HTML", "CSS", "JavaScript", "SQL", "NoSQL", "OOP", "Debugging"];
$languages = ["English", "Filipino"];
$interests = ["Coding", "Gadgets", "Gaming", "Photography"];

$education = [
    [
        "degree" => "Bachelor of Science in Computer Science",
        "school" => "Batangas State University – The National Engineering University (Alangilan)",
        "year" => "Expected Graduation: 2026"
    ]
];

$projects = [
    ["name" => "Library Management System", "details" => "Built using Java and MySQL to handle book borrowing and student records."],
    ["name" => "Portfolio Website", "details" => "Personal website showcasing skills and projects using HTML, CSS, JavaScript."],
    ["name" => "Chat App", "details" => "Real-time chat application created with Python Flask and WebSocket."]
];

$certifications = [
    "Programming (Java) NC III – TESDA (2025)",
    "Database Management Fundamentals – Oracle Academy",
    "Web Development Bootcamp – FreeCodeCamp"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $name; ?> - Resume</title>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body { 
      margin:0; 
      font-family:'Poppins', sans-serif; 
      /* Soft gradient with overlay pattern */
      background: 
        linear-gradient(135deg, rgba(0,150,255,0.08), rgba(100,149,237,0.08)),
        repeating-linear-gradient(45deg, rgba(0,71,171,0.05) 0px, rgba(0,71,171,0.05) 2px, transparent 2px, transparent 20px);
      background-size: cover;
      color:#333; 
    }
    .resume { 
      max-width:1000px; 
      margin:30px auto; 
      background:#fff; 
      box-shadow:0 4px 15px rgba(0,0,0,0.1); 
      border-radius:12px; 
      overflow:hidden; 
    }

    /* Header */
    header { 
      background:linear-gradient(135deg,#0096FF,#0047AB); 
      color:#fff; 
      padding:30px; 
      display:flex; 
      align-items:center; 
    }
    header img { 
      width:120px; 
      height:120px; 
      border-radius:50%; 
      border:4px solid #fff; 
      object-fit:cover; 
      margin-right:25px; 
    }
    header h1 { margin:0; font-size:30px; font-weight:600; }
    header p { margin:5px 0; font-size:15px; }

    /* Layout */
    .container { display:flex; }
    .left { width:30%; background:#f9fbfd; padding:25px; border-right:2px solid #6F8FAF; }
    .right { width:70%; padding:25px; }

    /* Section Titles */
    h2.section-title { 
      background:linear-gradient(135deg,#0096FF,#0047AB); 
      color:#fff; 
      padding:8px 12px; 
      border-radius:6px; 
      font-size:16px; 
      margin:20px 0 10px; 
      font-weight:600; 
      display:inline-block; 
    }

    /* Separation Lines */
    .contact p, .skills div, .languages p, .interests span, 
    .right-section p, .right-section li { 
      border-bottom:1px solid #6F8FAF; 
      padding:6px 0; 
      margin:6px 0; 
      font-size:14px; 
    }

    /* Skills / Languages / Interests */
    .skills div, .languages p, .interests span {
      background:#0096FF; 
      color:#fff; 
      padding:6px 12px; 
      border-radius:20px; 
      display:inline-block; 
      margin:4px; 
      font-size:13px; 
      font-weight:600; 
      border:none; 
      transition:0.3s;
    }
    .skills div:hover, .languages p:hover, .interests span:hover { background:#0047AB; }

    /* Right Sections */
    .right-section { margin-bottom:25px; }
    .right-section h2 i { margin-right:8px; }
    ul { padding-left:18px; }

    /* Buttons */
    .btns { margin-top:20px; }
    .btn { 
      background:#0096FF; 
      color:#fff; 
      text-decoration:none; 
      padding:10px 16px; 
      margin-right:10px; 
      border-radius:6px; 
      font-size:13px; 
      transition:0.3s; 
      display:inline-block; 
    }
    .btn:hover { background:#0047AB; }

    /* Footer */
    footer { 
      text-align:center; 
      padding:15px; 
      background:#6495ED; 
      color:#fff; 
      font-size:13px; 
      border-top:2px solid #0047AB; 
    }
  </style>
</head>
<body>
  <div class="resume">
    <!-- Header -->
    <header>
      <img src="photo.jpg" alt="Profile Photo">
      <div>
        <h1><?php echo $name; ?></h1>
        <p><?php echo $title; ?></p>
        <p><i class="fa fa-map-marker-alt"></i> <?php echo $location; ?></p>
      </div>
    </header>

    <div class="container">
      <!-- Left Column -->
      <div class="left">
        <h2 class="section-title"><i class="fa fa-address-card"></i> Contact</h2>
        <div class="contact">
          <p><i class="fa fa-phone"></i> <?php echo $contact["phone"]; ?></p>
          <p><i class="fa fa-envelope"></i> <?php echo $contact["email"]; ?></p>
          <p><i class="fa-brands fa-github"></i> <a href="<?php echo $contact["github"]; ?>" target="_blank" style="color:#0047AB;"><?php echo $contact["github"]; ?></a></p>
          <p><i class="fa-brands fa-linkedin"></i> <a href="<?php echo $contact["linkedin"]; ?>" target="_blank" style="color:#0047AB;">LinkedIn</a></p>
        </div>

        <h2 class="section-title"><i class="fa fa-code"></i> Skills</h2>
        <div class="skills">
          <?php foreach($skills as $s): ?>
            <div><?php echo $s; ?></div>
          <?php endforeach; ?>
        </div>

        <h2 class="section-title"><i class="fa fa-language"></i> Languages</h2>
        <div class="languages">
          <?php foreach($languages as $lang): ?>
            <p><?php echo $lang; ?></p>
          <?php endforeach; ?>
        </div>

        <h2 class="section-title"><i class="fa fa-heart"></i> Interests</h2>
        <div class="interests">
          <?php foreach($interests as $i): ?>
            <span><?php echo $i; ?></span>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right Column -->
      <div class="right">
        <div class="right-section">
          <h2 class="section-title"><i class="fa fa-user"></i> Profile</h2>
          <p><?php echo nl2br($summary); ?></p>
        </div>

        <div class="right-section">
          <h2 class="section-title"><i class="fa fa-graduation-cap"></i> Education</h2>
          <?php foreach($education as $edu): ?>
            <p><strong><?php echo $edu["degree"]; ?></strong><br>
            <?php echo $edu["school"]; ?><br>
            <?php echo $edu["year"]; ?></p>
          <?php endforeach; ?>
        </div>

        <div class="right-section">
          <h2 class="section-title"><i class="fa fa-project-diagram"></i> Projects</h2>
          <ul>
            <?php foreach($projects as $p): ?>
              <li><strong><?php echo $p["name"]; ?>:</strong> <?php echo $p["details"]; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="right-section">
          <h2 class="section-title"><i class="fa fa-certificate"></i> Certifications</h2>
          <ul>
            <?php foreach($certifications as $c): ?>
              <li><?php echo $c; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="btns">
          <a class="btn" href="resume.pdf" download><i class="fa fa-download"></i> Download Resume</a>
          <a class="btn" href="mailto:<?php echo $contact["email"]; ?>"><i class="fa fa-envelope"></i> Contact Me</a>
        </div>
      </div>
    </div>

    <footer>
      &copy; <?php echo date("Y"); ?> <?php echo $name; ?> | All Rights Reserved
    </footer>
  </div>
</body>
</html>
