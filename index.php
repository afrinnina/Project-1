<?php
session_start();
if(isset($_POST['submit']))
{
	$Username=$_POST['search'];
    $connection=mysqli_connect("localhost","root","","nino");
    $sql="SELECT * FROM `ninoproject` WHERE Username='$Username'";
    $query=mysqli_query($connection,$sql);
    $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
   echo $result['Username'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="style.css"></link>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></link>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        #search{
            width:300px;
        }
    </style>
</head>
<body >
    <div class="page">
        <div class="headpart"></div>
    <div class="container">
        <form metho="POST">
        <input type="text" name="search" id="search">
        <input type="submit" name="submit" id="search">
    </form>
    </div>
        <div class="linkspart">
                <center>
                        <a href="index.php">    Home    </a>&nbsp;
                        <a href="RUET.html">    About RUET    </a>&nbsp;
                        <a href="ECE.html">    About ECE    </a>&nbsp;
                        <a href="Contact Us.html">    Contact Us     </a>&nbsp;
                        <a href="reg.php">    Add new account    </a>
                </center>
            
        </div>
        <div class="bodypart">
            <div class="imagepart"></div>
            <div class="newspart">
                <h2>News & Events</h2>
                <div class="news">
                 <h4>Need A+ blood</h4>  
                </div>
            </div>
            <h3>
                Rajshashi University of Engineering & Technology
            </h3>
            <p>
                    Rajshahi University of Engineering & Technology, commonly known as RUET (রুয়েট), is one of the leading PhD granting public research universities in Bangladesh. It is one of the most prestigious public universities in the country that specialises in the field of engineering. Just like the other public engineering universities, the admission battle of RUET is considered to be the toughest one in the country as a student has to go through the selection process based in their grades and after getting selected, written examination .

                    RUET was founded in 1964 as Rajshahi Engineering College with a limited number of students. It was then changed to Bangladesh Institute of Technology (BIT) in 1986 and was finally renamed Rajshahi University of Engineering & Technology (RUET) in 2003 when it gained a university status.
                    
                    At present, more than 3500 students are pursuing their higher study in this green campus including under-graduate and post-graduate with over 250 prominent faculty members in diverse field of expertise. The medium of instruction and necessary assessment of this university is English.
            </p>
            <h3>
                    History
                </h3>
                <p>
                        Before the independence of Bangladesh, the then Government of Pakistan, to meet the increasing demand of professional engineers for the national development, established Rajshahi Engineering College in 1964 as a faculty of engineering under the University of Rajshahi. It was the second engineering college established in the then East Pakistan.

                        Rajshahi Engineering College ( was commonly known as REC) started its journey with only three departments: Mechanical Engineering, Electrical & Electronic Engineering and Civil Engineering, offering bachelor's degree programs only. It accepted its first class of 120 students in the academic session of 1964/65 and the second class of like number in the academic session of 1965/66. The teaching faculty consisted of 19 faculty members at that time.
                        
                        After the independence of Bangladesh (1971), the administration of the college was controlled by the Ministry of Education of Bangladesh and academic curriculum was controlled by University of Rajshahi. However, the infrastructural development and maintenance was taken care of by the Public Works Department of Government of Bangladesh. To remove these kinds of aforesaid problems several committees and commissions were formed since 1973. On the recommendation of these committees and commissions, in 1986, Rajshahi Engineering College was converted to an institute and was named Bangladesh Institute of Technology (BIT), Rajshahi to enhance the technical education.
                        
                        In September, 2003, the institute was upgraded to a university and was named as Rajshahi University of Engineering & Technology (RUET) to enhance the technical education and research.From that time, the university is financed by the Government through the University Grants Commission (UGC) of Bangladesh. The university is an autonomous statutory organisation of the Government of Bangladesh functioning within the "Rajshahi University of Engineering & Technology: Act 2003".
                    </p>
                    <h3>
                            Campus
                        </h3>
                        <p>RUET is situated in the northern part of Bangladesh, in the city of Rajshahi— the educational center of North Bengal. The RUET campus has been described as representing a "spectacular harmony of architecture and natural beauty".

                                The distinguishable seasons in Bangladesh are summer and winter. In summer season (May–October) temperature of Rajshahi is hot and typically 25-40 degree Celsius and sometimes humid. In winter season (November–April) temperature is moderate typically 8-20 degree Celsius.
                               </p>


        </div>
         
    </div>
       
</body>
</html>