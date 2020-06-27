<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {

  background-image:url("https://backgroundcheckall.com/wp-content/uploads/2018/10/registration-form-background-images-hd-8.jpg");
  background-size:cover;
  background-attachment:fixed;
  background-repeat:no-repeat;
  padding: 40px;
  text-align: center;
  
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {

  background-image:url("https://backgroundcheckall.com/wp-content/uploads/2018/10/registration-form-background-images-hd-8.jpg");
  background-size:cover;
  background-attachment:fixed;
  background-repeat:no-repeat;
  padding: 20px;
  text-align: center;
  
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>KIIT University</h1>
  <p><b>Expence meter for students</b></p>
</div>

<div class="navbar">
  <a href="#">About KIIT</a>
  <a href="#">Academic</a>
  <a href="#">Research</a>
  <a href="lnk.php" class="right">back</a>
</div>

<div class="row">
  <div class="side">
    <h2>KALINGA INSTITUTE OF TECHNICAL UNIVERSITY</h2>
    <h5>Demmed to be university</h5>
    
    <img src="http://schoolbook.getmyuni.com/assets/images/rev_img/5936__634/143086553820130821_125708.jpg" height="200" width ="300">
    <p>" To create an advanced centre of professional learning of international standing where pursuit of knowledge and excellence shall reign supreme, unfettered by the barriers of nationality, language, cultural plurality and religion. "</p>
    <h3>Mission</h3>
    <p>Imparting quality value based education of international standard and imbibing skill for solving real life problems.

Inculcating global perspective in attitude.

Creating leadership qualities with futuristic vision.
Cultivating adaptation of ethics, morality and healthy practices in professional life.

Instilling habit of continual learning.

Encouraging and supporting creative abilities and research temperament.</p>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Aerial_view_of_Kalinga_Stadium.jpg/1200px-Aerial_view_of_Kalinga_Stadium.jpg" height="100" width ="300"><br>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaRYeiv5WQQ51XDKkLWwJ_FwntbZzxqi8h7i6FJYJwprA25C-E" height="100" width ="300"><br>
    <img src="https://static.kiit.ac.in/main/2017/09/20092930/swimming_pool2.jpg" height="100" width ="300"><br>
    <img src="https://i1.wp.com/s3-ap-southeast-1.amazonaws.com/student-stories/student-stories/wp-content/uploads/2017/06/10183903/460090.jpg?resize=897%2C448&ssl=1" height="100" width ="300"><br>
  </div>
  <div class="main">
    <h2>ABOUT KIIT</h2>
    <h5>KIIT actively promotes entrepreneurship among its students and youths at large. An Entrepreneurship Cell has been set up to provide guidance and resources to the students with interest and aptitude. As a result, KIIT students have good track record of entrepreneurial success. Similarly, KIIT Technology Business Incubator (TBI) offers incubation facilities for new ideas through various stages of entrepreneurial development. About 35 enterprises have successfully graduated from KIIT-TBI, while many others are in the process. KIIT-TBI is supported by DST and various other bodies of Govt. of India.
</h5>
    <img src="https://static.kiit.ac.in/news/2019/03/19154149/Engineering-means-KIIT-University-Arial-View.jpg" height="250" width ="800">
    <h2>Ranking and Recognition</h2>
    <h5>KIIT, though a very young institution has performed incredibly well in the rankings conducted by various national and international associations. Founded in 1992 and opened five years later as a centre for higher learning, its commitment to teaching excellence led to the grant of university status under Section 3 of UGC Act, 1956 by the Ministry of Human Resources Development, Govt. of India in 2004, within only seven years of its inception. It holds a Limca Record for this accomplishment.
KIIT is the youngest deemed to be university in the country to figure in this prestigious ranking. Ranked 8th among reputed private institutions in India.In 2018, KIIT was placed 42nd rank among Indian Universities ranked by National Institution Ranking Framework (NIRF) , Govt of India. KIIT School of Management, a constituent school of KIIT secured 30th rank in the same year. </h5>
    <br>
    <h2>Academics</h2>
    <h5>KIIT is a private academic institution dedicated to providing educational opportunities for the intellectual, social, and professional development of a diverse student population. To achieve this purpose, the institution offers focused and balanced curricula at Undergraduate, Master’s and Doctoral levels. A broad-based core curriculum is offered, promoting critical thinking, effective verbal and written communication, and skills for life-long learning. KIIT’S approach to higher education and the resulting varied academic experiences provide students with the intellectual acumen and pragmatic approach necessary to create the foundation for personal and professional fulfillment.</h5>
    <img src="http://ksom.ac.in/wp-content/uploads/2015/08/about-school-ksom.jpg" height="200" width ="800">
    <h2>ADMISSION</h2>
    <h5>Online Application Form: 16 Nov 2018 to 25 Mar 2019<br>
KIIT Entrance Examination (KIITEE) is the All India Entrance Examination conducted by KIIT , Bhubaneswar for admission into various courses of KIIT<br>Medical
For Admission to the M.B.B.S. &  BDS (Bachelor of Dental Surgery) course is through NEET.</h5>
  </div>
</div>

<div class="footer">
  <footer>
  
  <p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
</footer>
</div>

</body>
</html>
