<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Ariful - Resume Builder</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="nav">
    <button id="cmd" onclick="printpdf()" class="navbtn"><i class="fas fa-download"></i></button>
    <form>
    <input type="hidden" id="custinfo" name="custinfo">
    <button class="navbtn"><i class="fas fa-save"></i></button>
    </form> 
    <button class="navbtn" href=""><i class="fas fa-home"></i></button>
    </div>
        
    <div class="resume" id="resume">
        <section id="print">
             <div class="head">
                <div class="main">
                    <span class="name" contenteditable="true">YOUR</span>&nbsp<span contenteditable="true">NAME</span>
                    <div class="post" contenteditable="true">YOUR JOB PROFILE</div>
                </div>
                <div class="contacts">
                <span contenteditable="true" class="content">231-3212-2132</span><span class="symbol"> <i class="fas fa-phone"></i></span><br>
                <span contenteditable="true" class="content">samplemail@email.bd</span><span class="symbol"> <i class="fas fa-envelope"></i></span><br>
                <span contenteditable="true" class="content">linkedin/username.com</span><span class="symbol"> <i class="fab fa-linkedin"></i></span><br>
                <span contenteditable="true" class="content">sample street-Bangladesh</span><span class="symbol">&nbsp<i class="fas fa-map-marker-alt"></i></i></span>
                </div>
            </div>
        
            <div class="line"></div>
            <div class="mainbody">
                <div class="leftside">
                <span class="title">MY SKILLS</span><br><br><div>
                <div class="skill"><span><input type="checkbox" class="input-checkbox"></span><span><i class="fas fa-chevron-circle-right"></i></span>&nbsp&nbsp&nbsp<span contenteditable="true">write your skill here</span></div>
                <div id="skills"></div>
                <button id="skilladd" type="button" class="btn btn-success" onclick="addskill()"><i class="fas fa-plus-circle"></i> Skill</button>&nbsp
                <button id="skillrem" type="button" class="btn btn-danger" onclick="remskill(event)"><i class="fas fa-minus-circle"></i> Skill</button></div>
                <br><br><span class="title">LANGUAGES</span><br><br><div>
                <div class="language"><span><input type="checkbox" class="input-checkbox"></span><span contenteditable="true">LANGNAME</span>&nbsp-&nbsp<span contenteditable="true">level u know</span></div>
                <div id="languages"></div>
                <button id="langadd" type="button" class="btn btn-success" onclick="addLang()"><i class="fas fa-plus-circle"></i> Language</button>
                &nbsp
                <button id="langrem" type="button" class="btn btn-danger" onclick="remLang(event)"><i class="fas fa-minus-circle"></i> Language</button></div>
                <br><br><span class="title">ACHIEVEMENTS</span><br><br><div>
                <div class="achieve" ><span><input type="checkbox" class="input-checkbox"></span><span contenteditable="true">Write your achievement</span></div>
                <div id="achievement"></div>
                <button id="achadd" type="button" class="btn btn-success" onclick="addAch()"><i class="fas fa-plus-circle"></i> Achievement</button>
                &nbsp
                <button id="achrem" type="button" class="btn btn-danger" onclick="remAch(event)" style="margin-top: 0;"><i class="fas fa-minus-circle"></i> Achievement</button></div>
                <br><br><span class="title">INTERESTS</span><br><br><div>
                <div class="achieve" ><span><input type="checkbox" class="input-checkbox"></span><span contenteditable="true">Write interest</span></div>
                <div id="interest"></div>
                <button id="Intadd" type="button" class="btn btn-success" onclick="addInt()"><i class="fas fa-plus-circle"></i> Interest</button>
                &nbsp
                <button id="Intrem" type="button" class="btn btn-danger" onclick="remInt(event)"><i class="fas fa-minus-circle"></i> Interest</button></div>
                </div>
                
                <div class="border"></div>
                <div class="rightside">
                <span class="title">PROFILE</span><br><br>
                <div contenteditable="true">
                Here u can write the basic information about your career like your forte, something about yourself that
                you want your interviewer to know. Try to keep it brief and only provide necessary information. Do not include information which is
                already written in your resume in some other section.</div>
                <br><br><span class="title">EDUCATION</span><br><br><div>
                <div id="education">
                    <div class="edublock">
                        <span><input type="checkbox" class="input-checkbox"></span>
                        <span class="education-head" contenteditable="true">YOUR DEGREE</span>
                        <div ><span contenteditable="true">Institute name</span> - <span contenteditable="true">Passing Year</span></div>
                    </div>
                </div>
                    
                <button id="eduadd" type="button" class="btn btn-success" onclick="addedu()"><i class="fas fa-plus-circle"></i> Education</button>
                &nbsp
                <button id="edurem" type="button" class="btn btn-danger" onclick="remedu(event)"><i class="fas fa-minus-circle"></i> Education</button></div>
                <br><br>
                <div class="new-section-div"><div><span><input type="checkbox" class="input-checkbox"></span><span class="title" contenteditable="true">NEW SECTION</span><br><br>
                <div contenteditable="true">
                This is the description part of your new section. Try to stay within limit and write something which has less 
                than 400 characters. The spaces and symbols you use will also be included so use them for an indentation effect.</div>
                </div>
                    
                <div id="newsec"></div>
                <button id="secadd" type="button" class="btn btn-success" onclick="addsec()"><i class="fas fa-plus-circle"></i> Section</button>
                &nbsp
                <button id="secrem" type="button" class="btn btn-danger" onclick="remsec(event)"><i class="fas fa-minus-circle"></i> Section</button>
            </div>
            </div>
        </section>
     </div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js'></script><script  src="./script.js"></script>

</body>
</html>
