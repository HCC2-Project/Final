<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'header.php';
echo'
<style>
.qheader{
font:bold 14px Arial;
}
.qselections{
font:normal 13px Arial;
line-height: 300%;
}
</style>
<div class="container marketing">

<h2>WelCome to History of Computers Quizzes</h2>

<form method="POST" name="myquiz">


<div class="qheader">

<hr class="featurette-divider">
1)  Who was known as the Father of Computers?</div>
<div class="qselections">
<input type="radio" value="a" name="question1"> a)Blasie Pascal<br>
<input type="radio" value="b" name="question1"> b)Joseph Jacquard<br>
<input type="radio" value="c" name="question1"> c)Charles Babbage<br>
<input type="radio" value="d" name="question1"> d)Herman Hollerith<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
2)The Second Generation of computers used this to control operations:</div>
<div class="qselections">
<input type="radio" value="a" name="question2"> a)transistors<br>
<input type="radio" value="b" name="question2"> b)microchips<br>
<input type="radio" value="c" name="question2"> c)integrated circuits<br>
<input type="radio" value="d" name="question2"> d)vacuum tubes<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
3)Joseph Jacquard used to control he operations of his loom?</div>
<div class="qselections">
<input type="radio" value="a" name="question3"> a) Vacuum tubes<br>
<input type="radio" value="b" name="question3"> b) electricity<br>
<input type="radio" value="c" name="question3"> c) transistors<br>
<input type="radio" value="d" name="question3"> d) punched cards<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
4) The Fourth Generation of computers used this to control operations:</div>
<div class="qselections">
<input type="radio" value="a" name="question4"> a) integrated circuits<br>
<input type="radio" value="b" name="question4"> b) transistors<br>
<input type="radio" value="c" name="question4"> c) microchips<br>
<input type="radio" value="d" name="question4"> d) vacuum tubes<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
5) The arithmetic/logic unit of the computer:</div>
<div class="qselections">
<input type="radio" value="a" name="question5"> a) can add numbers<br>
<input type="radio" value="b" name="question5"> b) can compare numbers<br>
<input type="radio" value="c" name="question5"> c) is part of the central processing unit<br>
<input type="radio" value="d" name="question5"> d) all of the above<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
6) Which of the following is the correct order of the processing cycle of a computer?</div>
<div class="qselections">
<input type="radio" value="a" name="question6"> a) processing,, input, memory, output<br>
<input type="radio" value="b" name="question6"> b) output, input, memory, processing<br>
<input type="radio" value="c" name="question6"> c) input, memory , processing, output<br>
<input type="radio" value="d" name="question6"> d) memory, input, output, processing<br>
</div>

<hr class="featurette-quizhr">
 
<div class="qheader">
7) What device is BOTH an input and output device?</div>
<div class="qselections">
<input type="radio" value="a" name="question7"> a) printer<br>
<input type="radio" value="b" name="question7"> b) disk<br>
<input type="radio" value="c" name="question7"> c) monitor<br>
<input type="radio" value="d" name="question7"> d) keyboard<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
8)Which software firm is the second largest in the world, after Microsoft?</div>
<div class="qselections">
<input type="radio" value="a" name="question8"> a) Netscape<br>
<input type="radio" value="b" name="question8"> b) Oracle<br>
<input type="radio" value="c" name="question8"> c) Lotus<br>
<input type="radio" value="d" name="question8"> d) Norton<br>
</div>

<hr class="featurette-quizhr">

<div class="qheader">
9) As of January 2003, how much is Microsoft Chairman Bill Gates\'s net worth?</div>
<div class = "qselections">
<input type = "radio" value = "a" name = "question9"> a) 10 million US<br>
<input type = "radio" value = "b" name = "question9"> b) 20 billion US<br>
<input type = "radio" value = "c" name = "question9"> c) 35 billion US<br>
<input type = "radio" value = "d" name = "question9"> d) 50 billion US<br>
</div>

<hr class="featurette-quizhr">

<div class = "qheader">
10) The first electronic computer was called?</div>
<div class = "qselections">
<input type = "radio" value = "a" name = "question10"> a) Univac<br>
<input type = "radio" value = "b" name = "question10"> b) ENIAC<br>
<input type = "radio" value = "c" name = "question10"> c) Apple lle<br>
<input type = "radio" value = "d" name = "question10"> d) none of the above<br>
</div>

</form>

<form>
<div align = "center">
<input type = "button" value = "Grade Me!" name = "B1" onClick = "gradeit()">
<input type = "button" value = "Reset" name = "B2" onClick = "document.myquiz.reset()"></div>
</form>


            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->


            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
        </div>
    </div>';

?>
<script>
    var actualchoices = new Array()
    document.cookie = "ready=yes"
</script>
</body>
</html>