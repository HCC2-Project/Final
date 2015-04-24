<?php
 /*
     * @author Sena Onsho
     * @Date 15/02/2015
     * @Source http://www.javascriptkit.com
     * 
 */
    
require_once 'header.php';
        ?>

    <style>
.qheader{
font:bold 14px Arial;
font-size: 16px;
}

.qselections{
font:normal 13px Arial;
line-height: 300%;
padding-left: 50px;
font-size: 16px;
}
</style>
<script src="quizconfig.js"></script>

<script>
var actualchoices=new Array()
document.cookie="ready=yes"
</script>

</head>


<div class="container marketing">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
<p align="center">

<form method="POST" name="myquiz">

<h2>History of Computer Quiz</h2>
<br/>
<div class="qheader">
1)  Who was known as the Father of Computers?</div>
<div class="qselections">
<input type="radio" value="a" name="question1">a)Blasie Pascal<br>
<input type="radio" value="b" name="question1">b)Joseph Jacquard<br>
<input type="radio" value="c" name="question1">c)Charles Babbage<br>
<input type="radio" value="d" name="question1">d)Herman Hollerith<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
2)The Second Generation of computers used this to control operations:</div>
<div class="qselections">
<input type="radio" value="a" name="question2">a)transistors<br>
<input type="radio" value="b" name="question2">b)microchips<br>
<input type="radio" value="c" name="question2">c)integrated circuits<br>
<input type="radio" value="d" name="question2">d)vacuum tubes<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
3)Joseph Jacquard used to control he operations of his loom?</div>
<div class="qselections">
<input type="radio" value="a" name="question3">a) Vacuum tubes<br>
<input type="radio" value="b" name="question3">b) electricity<br>
<input type="radio" value="c" name="question3">c) transistors<br>
<input type="radio" value="d" name="question3">d) punched cards<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
4) The Fourth Generation of computers used this to control operations:</div>
<div class="qselections">
<input type="radio" value="a" name="question4">a) integrated circuits<br>
<input type="radio" value="b" name="question4">b) transistors<br>
<input type="radio" value="c" name="question4">c) microchips<br>
<input type="radio" value="d" name="question4">d) vacuum tubes<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
5) The arithmetic/logic unit of the computer:</div>
<div class="qselections">
<input type="radio" value="a" name="question5">a) can add numbers<br>
<input type="radio" value="b" name="question5">b) can compare numbers<br>
<input type="radio" value="c" name="question5">c) is part of the central processing unit<br>
<input type="radio" value="d" name="question5">d) all of the above<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
6) Which of the following is the correct order of the processing cycle of a computer?</div>
<div class="qselections">
<input type="radio" value="a" name="question6">a) processing,, input, memory, output<br>
<input type="radio" value="b" name="question6">b) output, input, memory, processing<br>
<input type="radio" value="c" name="question6">c) input, memory , processing, output<br>
<input type="radio" value="d" name="question6">d) memory, input, output, processing<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
7) What device is BOTH an input and output device?</div>
<div class="qselections">
<input type="radio" value="a" name="question7">a) printer<br>
<input type="radio" value="b" name="question7">b) disk<br>
<input type="radio" value="c" name="question7">c) monitor<br>
<input type="radio" value="d" name="question7">d) keyboard<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
8)Which software firm is the second largest in the world, after Microsoft?</div>
<div class="qselections">
<input type="radio" value="a" name="question8">a) Netscape<br>
<input type="radio" value="b" name="question8">b) Oracle<br>
<input type="radio" value="c" name="question8">c) Lotus<br>
<input type="radio" value="d" name="question8">d) Norton<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
9) As of January 2003, how much is Microsoft Chairman Bill Gates net worth?</div>
<div class="qselections">
<input type="radio" value="a" name="question9">a) 10 million US<br>
<input type="radio" value="b" name="question9">b) 20 billion US<br>
<input type="radio" value="c" name="question9">c) 35 billion US<br>
<input type="radio" value="d" name="question9">d) 50 billion US<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
10) The first electronic computer was called?</div>
<div class="qselections">
<input type="radio" value="a" name="question10">a) Univac<br>
<input type="radio" value="b" name="question10">b) ENIAC<br>
<input type="radio" value="c" name="question10">c) Apple lle<br>
<input type="radio" value="d" name="question10">d) none of the above<br>
</div>

<hr class="featurette-divider">

<div class="qheader">
11) To which generation of computers does Valve computer belongs?</div>
<div class="qselections">
<input type="radio" value="a" name="question11"> a) First generation computers<br>
<input type="radio" value="b" name="question11"> b) Second generation computers<br>
<input type="radio" value="c" name="question11"> c) Fifth generation computers<br>
<input type="radio" value="d" name="question11"> d) Fourth generation computers<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
12)The fifth generation of computers represents a unification of which separate areas of research?</div>
<div class="qselections">
<input type="radio" value="a" name="question12"> a) knowledge-based expert systems<br>
<input type="radio" value="b" name="question12"> b) very high-level programming languages<br>
<input type="radio" value="c" name="question12"> c) decentralised computing<br>
<input type="radio" value="d" name="question12"> d) all of the above<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
13)In what year was the first generation computer invented?</div>
<div class="qselections">
<input type="radio" value="a" name="question13"> a) 1975<br>
<input type="radio" value="b" name="question13"> b) 1945<br>
<input type="radio" value="c" name="question13"> c) 1940<br>
<input type="radio" value="d" name="question13"> d) none of the above<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
14) Who invented the vaccum tube first generation computer?</div>
<div class="qselections">
<input type="radio" value="a" name="question14"> a) Joseph Jacquard<br>
<input type="radio" value="b" name="question14"> b) Blasie Pascal<br>
<input type="radio" value="c" name="question14"> c) By engineer Lee<br>
<input type="radio" value="d" name="question14"> d) Herman Hollerith<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
15) In what year was the transistors invented?</div>
<div class="qselections">
<input type="radio" value="a" name="question15"> a) 1970<br>
<input type="radio" value="b" name="question15"> b) 1965<br>
<input type="radio" value="c" name="question15"> c) 1949<br>
<input type="radio" value="d" name="question15"> d) 1956<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
16) Which computer generation is in use today?</div>
<div class="qselections">
<input type="radio" value="a" name="question16"> a) first generation<br>
<input type="radio" value="b" name="question16"> b) forth generation<br>
<input type="radio" value="c" name="question16"> c) third generation<br>
<input type="radio" value="d" name="question16"> d) second generation<br>
</div>

<hr class="featurette-quizhr">
 
<div class="qheader">
17) What are An ALU performs basic arithmetic and logic operations?</div>
<div class="qselections">
<input type="radio" value="a" name="question17"> a) subtraction<br>
<input type="radio" value="b" name="question17"> b) multiplication<br>
<input type="radio" value="c" name="question17"> c) division<br>
<input type="radio" value="d" name="question17"> d) all the above<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
18)Which of the following is third generation computer?</div>
<div class="qselections">
<input type="radio" value="a" name="question18"> a) vacuum tubes<br>
<input type="radio" value="b" name="question18"> b) integrated circuits<br>
<input type="radio" value="c" name="question18"> c) Microchips<br>
<input type="radio" value="d" name="question18"> d) Transistors<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
19) When was the microchips invented?</div>
<div class = "qselections">
<input type = "radio" value = "a" name = "question19"> a) 1875<br>
<input type = "radio" value = "b" name = "question19"> b) 1980<br>
<input type = "radio" value = "c" name = "question19"> c) 1971<br>
<input type = "radio" value = "d" name = "question19"> d) 1975<br>
</div>

<hr class="featurette-quizhr">

<div class = "qheader">
20) In what year was the integrated circuits invented?</div>
<div class = "qselections">
<input type = "radio" value = "a" name = "question20"> a) 1974<br>
<input type = "radio" value = "b" name = "question20"> b) 1964<br>
<input type = "radio" value = "c" name = "question20"> c) 1967<br>
<input type = "radio" value = "d" name = "question20"> d) none of the above<br>
</div>

<hr class="featurette-divider">

<div class="qheader">
21)  Transistors were miniaturized and placed on silicon chips, called:</div>
<div class="qselections">
<input type="radio" value="a" name="question21"> a) microchips<br>
<input type="radio" value="b" name="question21"> b) vacuum tubes<br>
<input type="radio" value="c" name="question21"> c) semiconductors<br>
<input type="radio" value="d" name="question21"> d) all<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
22)When was the integrated circuits invented?</div>
<div class="qselections">
<input type="radio" value="a" name="question22"> a) 1964<br>
<input type="radio" value="b" name="question22"> b) 1850<br>
<input type="radio" value="c" name="question22"> c) 1945<br>
<input type="radio" value="d" name="question22"> d) 1865<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
23)Which one of the following is the components that can be coupled to the computer at the moment</div>
<div class="qselections">
<input type="radio" value="a" name="question23"> a) keyboard<br>
<input type="radio" value="b" name="question23"> b) monitor<br>
<input type="radio" value="c" name="question23"> c) memory<br>
<input type="radio" value="d" name="question23"> d) none of the above<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
24) In what way was the Transistors is better than the vacuum tubes?</div>
<div class="qselections">
<input type="radio" value="a" name="question24"> a) It was cheaper than the vacuum tubes<br>
<input type="radio" value="b" name="question24"> b) It was faster than the vacuum tubes<br>
<input type="radio" value="c" name="question24"> c) It was smaller than the vacuum tubes<br>
<input type="radio" value="d" name="question24"> d) All of the above<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
25) What was one of the first improvements of Jacquard in first generation computer?</div>
<div class="qselections">
<input type="radio" value="a" name="question25"> a) to invent the vacuum tubes<br>
<input type="radio" value="b" name="question25"> b) to eliminate the paper stripe<br>
<input type="radio" value="c" name="question25"> c) both<br>
<input type="radio" value="d" name="question25"> d) none<br>
</div>

</form>

<form>
<div align="center">
<input type="button" value="Get Score!" name="B1" onClick="gradeit()"> 
<input type="button" value="Reset" name="B2" onClick="document.myquiz.reset()"></div>
</form>
            </div>
        </div>
<hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
       
</div>

<script>
    var actualchoices = new Array()
    document.cookie = "ready=yes"
</script>
</body>
</html>
