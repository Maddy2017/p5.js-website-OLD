<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="get-started-page">

    <?php include('../sidebar.php'); ?>
    <?php include('../download/version.php'); ?>

    <!-- content sections -->
    <div class="column-span">

    <section>

      <h2>Get Started</h2>

      <p>This page walks you through setting up a p5.js project and making your first sketch.
      If you are using the p5 editor, you can skip to the <a>Your
      First Sketch</a> section. Processing users may want to check out the 
      <a href="https://github.com/processing/p5.js/wiki/Processing-transition">Processing
      transition tutorial</a>.
      </p>
      <a class="anchor" href="#file-setup"><h3 class = "start-element tutorial-btn" id = "download">Download and File Setup</h3></a>
    <div class="info" id="download">
      <p>
        The easiest way to start is by using the empty example that comes with the
        <a href="../download/">p5.js complete</a> download. 
      </p>
      
      <p>If you look in index.html, you&#8217;ll notice that it links to the file p5.js. If
      you would like to use the minified version (compressed for faster page loading),
      change the link to p5.min.js.</p>

      <pre><code class="language-markup">&lt;script src="../p5.min.js">&lt;/script></code></pre>   
      
      <p>Alternatively, you can link to a p5.js file hosted 
        online. All versions of p5.js are stored in a CDN (&#8220;Content Delivery 
        Network&#8221;). You can see a history of these versions here: <a target="_blank"
        href="http://cdnjs.com/libraries/p5.js" >p5.js CDN</a>. In this case you can 
        change the link to:
      </p>

      <pre><code class="language-markup">&lt;script src="//cdnjs.cloudflare.com/ajax/libs/p5.js/<?php echo $version; ?>/p5.js">&lt;/script></code></pre>
    </div>

      <a name="environment" class="anchor"><h3 class = "start-element tutorial-btn" id = "environment">Environment</h3></a>
      <div class="info" id = "environment">
      <p>
        You can use the <a href="http://en.wikipedia.org/wiki/Source_code_editor" 
        target="_blank">code editor</a> of your choice. Instructions for getting set up 
        with <a href="http://www.sublimetext.com/2" target="_blank"> Sublime Text 2</a> are  
        included below, other good editor options include <a href='http://brackets.io/' target=_blank>Brackets</a>, 
        <a href='https://atom.io/' target=_blank>Atom</a>, and <a href='http://limetext.org/' target=_blank>Lime Text</a>. 
        (An official p5 editor is in development, you can test out the
        beta version <a href="../download/#editor">here</a>.)
      </p>

      <p>
        Open Sublime. Go to the File menu and choose Open... and choose the folder 
        that your html and js files are located in. On the left sidebar, you should now
        see the folder name at the top, with a list of the files contained in the 
        folder directly below.
      </p>
      
      <p>Click on your sketch.js file and it will open on the right 
        where you can edit it.
        <img src="../img/get-started/sublime2.png" />
      </p>
      
      <p>Open the index.html file in your browser by double clicking on it in your file manager or type: 
          <code>file:///the/file/path/to/your/html</code> 
        in the address bar to view your sketch.
      </p>
      </div>

      <a name="your-first-sketch" class="anchor"><h3 class = "start-element tutorial-btn" id = "sketch">Your First Sketch</h3></a>
      <div class = "info" id = "sketch">
      <p>
        In your editor, type the following:
      </p>

      <pre><code class="language-javascript">function setup() {

}

function draw() {
  ellipse(50, 50, 80, 80);
}</code></pre>  

      <p>
        This line of code means &#8220;draw an ellipse, with the center 50 pixels over from the
        left and 50 pixels down from the top, with a width and height of 80 pixels.&#8221;
      </p>
      <p>
        Save your sketch and refresh your page view in your browser. If you&#8217;ve typed 
        everything correctly, you&#8217;ll see this appear in the display window: 
      </p>
      <img src="../img/get-started/first-sketch.png" />

      <p>
        If you didn&#8217;t type it correctly, you might not see anything. If this happens, 
        make sure that you&#8217;ve copied the example code exactly: the numbers should be 
        contained within parentheses and have commas between each of them, and the line 
        should end with a semicolon.
      </p>

      <p>
        One of the most difficult things about getting started with programming is that 
        you have to be very specific about the syntax. The browser isn&#8217;t always smart 
        enough to know what you mean, and can be quite fussy about the placement of 
        punctuation. You&#8217;ll get used to it with a little practice. Depending on the 
        browser you are using, you can also see errors by looking at the JavaScript 
        &#8220;console&#8221;. In chrome, for example, this is under View > Developer > JavaScript 
        Console.
      </p>

      <p>
        Next, we&#8217;ll skip ahead to a sketch that&#8217;s a little more exciting. Delete the text
         from the last example, and try this:
      </p>

      <pre><code class="language-javascript">function setup() {
  createCanvas(640, 480);
}

function draw() {
  if (mouseIsPressed) {
    fill(0);
  } else {
    fill(255);
  }
  ellipse(mouseX, mouseY, 80, 80);
}</code></pre>  

      <p>
        This program creates a window that is 640 pixels wide and 480 pixels high, and 
        then starts drawing white circles at the position of the mouse. When a mouse 
        button is pressed, the circle color changes to black. We&#8217;ll explain more about 
        the elements of this program in detail later. For now, run the code, move the 
        mouse, and click to experience it.
      </p>

      <img src="../img/get-started/first-sketch2.png" />
    </div>
      <h3 class = "start-element tutorial-btn" id = "next">What Next?</h3>
      <div class = 'info' id = 'next'>
        <ul>
          <li>Read the 
          <a href="https://github.com/processing/p5.js/wiki/Processing-transition">
          Processing transition tutorial</a> to learn how to convert from Processing
          to p5.js, and the main differences between them.</li>

        <li>View the <a href="../reference/">reference</a> for full documentation.</li>

        <li>Check out the <a href="../tutorials/">tutorials</a> page and
          <a href="../examples">examples</a> page for more.</li>  
        </ul>
      </div>


      <p style="font-size: 1em; color:#AFAFAF">Parts of this tutorial were adapted from the book, <a href="https://www.amazon.com/Getting-Started-p5-js-Interactive-JavaScript/dp/1457186772"
      >Getting Started with p5.js</a>, by Lauren McCarthy, Casey Reas, 
      and Ben Fry, O&#8217;Reilly / Make 2015. Copyright &copy; 2015 Lauren McCarthy, Casey Reas and Ben Fry. All rights reserved.</p>
    </section>

  
    <?php include('../footer.php'); ?>
    <!-- outside of column for footer to go across both -->

    <p class="clearfix"> &nbsp; </p>

    </div><!-- end id="container"  -->

    <object type="image/svg+xml" data="../img/thick-asterisk-alone.svg" id="asterisk-design-element">
         *<!-- to do: add fallback image in CSS -->
    </object>


    <?php include('../end.php'); ?>
  </body>
</html>
