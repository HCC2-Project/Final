<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'header.php';
echo'
        <div class="container marketing">

            <h2>History of Computers Quizzes</h2>

            <form name="quiz" class = "body">
                <div class ="qheader">
                    1. Who was known as the Father of Computers?</div>
                <ul class="qselections">
                    <li><input type="radio" name="q1" value="Blasie Pascal">Blasie Pascal</li>
                    <li><input type="radio" name="q1" value="Charles Babbage">Charles Babbage</li>
                    <li><input type="radio" name="q1" value="Joseph Jacquard">Joseph Jacquard</li>
                    <li><input type="radio" name="q1" value="Herman Hollerith">Herman Hollerith</li>
                </ul>

                <div class ="qheader">
                    2. The Second Generation of computers used this to control operations:</div>
                <ul class="qselections">
                    <li><input type="radio" name="q2" value="microchips">microchips</li>
                    <li><input type="radio" name="q2" value="transistors">transistors</li>
                    <li><input type="radio" name="q2" value="integrated circuits">integrated circuits</li>
                    <li><input type="radio" name="q2" value="vacuum tubes">vacuum tubes</li>
                </ul>

                <div class ="qheader">
                    3. Joseph Jacquard used to control he operations of his loom?</div>
                <ul class="qselections">
                    <li><input type="radio" name="q3" value="Vacuum tubes">Vacuum tubes</li>
                    <li><input type="radio" name="q3" value="transistors">transistors</li>
                    <li><input type="radio" name="q3" value="electricity">electricity</li>
                    <li><input type="radio" name="q3" value="punched cards">punched cards</li>
                </ul>

                <div class ="qheader">
                    4. The Fourth Generation of computers used this to control operations:</div>
                <ul class="qselections">
                    <li><input type="radio" name="q4" value="microchips">microchips</li>
                    <li><input type="radio" name="q4" value="integrated circuits">integrated circuits</li>
                    <li><input type="radio" name="q4" value="transistors">transistors</li>
                    <li><input type="radio" name="q4" value="vacuum tubes">vacuum tubes</li>
                </ul>

                <div class ="qheader">
                    5. The arithmetic/logic unit of the computer:</div>
                <ul class="qselections">
                    <li><input type="radio" name="q5" value="can add numbers">can add numbers</li>
                    <li><input type="radio" name="q5" value="can compare numbers">can compare numbers</li>
                    <li><input type="radio" name="q5" value="is part of the central processing unit">is part of the central processing unit</li>
                    <li><input type="radio" name="q5" value="all of the above">all of the above</li>
                </ul>

                <div class ="qheader">
                    6. Which of the following is the correct order of the processing cycle
                    of a computer?</div>
                <ul class="qselections">
                    <li><input type="radio" name="q6" value="processing,, input, memory, output">processing,, input, memory, output</li>
                    <li><input type="radio" name="q6" value="output, input, memory, processing">output, input, memory, processing</li>
                    <li><input type="radio" name="q6" value="input, memory , processing, output">input, memory , processing, output</li>
                    <li><input type="radio" name="q6" value="memory, input, output, processing">memory, input, output, processing</li>
                </ul>

                <div class ="qheader">
                    7.  What device is BOTH an input and output device?</div>
                <ul class="qselections">
                    <li><input type="radio" name="q7" value="printer">printer</li>
                    <li><input type="radio" name="q7" value="keyboard">keyboard</li>
                    <li><input type="radio" name="q7" value="monitor">monitor</li>
                    <li><input type="radio" name="q7" value="disk">disk</li>
                </ul>

                <div class ="qheader">
                    8. Which software firm is the second largest in the world, after
                    Microsoft?</div>
                <ul class="qselections">
                    <li><input type="radio" name="q8" value="Oracle">Oracle</li>
                    <li><input type="radio" name="q8" value="Netscape">Netscape</li>
                    <li><input type="radio" name="q8" value="transistors">transistors</li>
                    <li><input type="radio" name="q8" value="transistors">transistors</li>
                </ul>

                <div class ="qheader">
                    9. As of January 2003, how much is Microsoft Chairman Bill Gatess net
                    worth?</div>
                <ul class="qselections">
                    <li><input type="radio" name="q9" value="10 million US">10 million US</li>
                    <li><input type="radio" name="q9" value="20 billion US">20 billion US</li>
                    <li><input type="radio" name="q9" value="35 billion US">35 billion US</li>
                    <li><input type="radio" name="q9" value="50 billion US">50 billion US</li>
                </ul>

                <div class ="qheader">
                    10. The first electronic computer was called</div>
                <ul class="qselections">
                    <li><input type="radio" name="q10" value="Univac">Univac</li>
                    <li><input type="radio" name="q10" value="ENIAC">ENIAC</li>
                    <li><input type="radio" name="q10" value="Apple lle">Apple lle</li>
                    <li><input type="radio" name="q10" value="none of the above">none of the above</li>
                </ul>

                <input type="button" value="Get score" onClick="getScore(this.form)">
                <input type="reset" value="Reset">

                <p> Score = <strong><input class="bgclr1" type="text" size="5" name="percentage" disabled></strong><br><br>
                    Correct answers:<br>
                    <textarea class="bgclr" name="solutions" wrap="virtual" rows="4" cols="30" disabled>
                    </textarea>

            </form>


            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>

        </div><!-- /.container -->';
?>

    </body>
</html>