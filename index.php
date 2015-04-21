<?php 
/*
     * @author Robin Nixon
     * @Date 10/03/2015
       @Source http://lpmj.net/4thedition/ 
     * 
     */
// Example 26-4: index.php
  require_once 'header.php';

  echo'<div class="container marketing">
      <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-circle" src="Images/cloud.jpg" style="width: 140px; height: 140px;">
                    <h3>First Generation</h3>
                    <p> In this generation mainly batch processing operating system were used. Punched cards, paper tape, and magnetic tape were used as input and output devices. This generation...</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <img class="img-circle" src="Images/cloud.jpg" style="width: 140px; height: 140px;">
                    <h3>Second Generation</h3>
                    <p>The transition from first generation to second generation of computers was not abrupt. There was all round development in technology, designs and programming languages. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <img class="img-circle" src="Images/cloud.jpg" style="width: 140px; height: 140px;">
                    <h3>Third Generation</h3>
                    <p>In this era, there were several innovations in various fields of computer technology. These include Integrated Circuits (ICs), Semiconductor Memories, Microprogramming. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First Generation (Vacuum Tubes)</h2>
                    <p class="lead">The computers of first generation used vacuum tubes as the basic components for memory and circuitry for CPU (Central Processing Unit). These tubes, like electric bulbs, produced a lot of heat and were prone to frequent fusing of the installations, therefore, were very expensive and could be afforded only by very large organisations. </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" src="Images/UNIVAC_computer.jpg" style="width: 500px; height: 400px;">
                </div>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-5">
                   <img class="featurette-image img-responsive" src="Images/transistor-computer.jpg" style="width: 500px; height: 400px;">
                </div>
                <div class="col-md-7">
                    <h2 class="featurette-heading">Second Generation (Transistors)</h2>
                    <p class="lead">Transistors replaced vacuum tubes and ushered in the second generation of computers. 
                        The transistor was invented in 1947 but did not see widespread use in computers until the late 1950s. 
                        The transistor was far superior to the vacuum tube, allowing computers to become smaller, faster, cheaper, 
                        more energy-efficient and more reliable than their first-generation predecessors.</p>
                </div>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Third Generation (Integrated)</h2>
                    <p class="lead">The development of the integrated circuit was the hallmark of the third generation of computers. 
                        Transistors were miniaturized and placed on silicon chips, called semiconductors, 
                        which drastically increased the speed and efficiency of computers.</p>
              </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" src="Images/Integrated-Circuit.jpg" style="width: 500px; height: 400px;">
                </div>
            </div>

            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->


            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>2015 Students-NCI, &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
    </div>';
?>

   
  </body>
</html>
