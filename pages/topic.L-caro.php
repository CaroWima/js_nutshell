<?php 
  require_once $_SERVER['HOME'].'/projects/js_nutshell/config.php';
  require_once $_SERVER['HOME'].'/projects/js_nutshell/inc/header.inc.php';

  // Used to add related links to the table content 
  $rel_links = [
    'topic.A.name.php',
    'topic.A.name.php'
  ];

?>


    <!-- Teaser -->
    <div class="teaser">
      <h1>Let</h1>

      <p> <i>Let</i> is a a variable declaration method.</p>
    </div>

    <!-- article -->
    <div class="article">
      <h2>Description</h2>

      <p>
        Originally <i>var</i> was the only JS keyword to declare variables, which over time caused issues, as <i>var</i> was only function-scoped. To mitigate that issue, <i>let</i> and <i>const</i> were created to be block-scoped. To declare the difference between function- and block-scoped:
      
      </p>

      <h3>Function-scoped vs. Block-scoped</h3>

      <p>
      function-scoped: Available anywhere within the function it is used in.
      <br>
      block-scoped: only available within the block it is declared in, for instance a loop.
      <br>
      A dditionally, being block-scoped, makes <i>let</i> non-redefinable, meaning unlike <i>var</i> it cannot change declarations. This protects your code from any accidental redefining within variables, which could potentially break your code.
      </p>
    </div>

    <!-- Code Area -->
    <div class="codeArea">
      <h2>Example 1</h2>

      <p>
        1. Run the code below.
        2. As you can see, the <i>var</i> example has worked erfectly fine, giiving us the value of "true".
        however, as the <i>let</i> variable can only be used within the block it is defined, we cannot place the console.log outside of the function and thus, the value reads "false".

        3.Reset the codeblock and place the console.log within the if function for the <i>let</i> example.
        now run the code again.

        4. you can also place the console.log _before_ the function and see what happens.

        PS: while <i>let</i> is very useful as a block-scoped keyword, many professionals suggest to use <i>const before let</i> and in turn only use <i>var</i> in very specific situations. 
      </p>

      <div class="codeArea flex-container codeExample">
              <div class="col-6 code">
                <pre>
                  <code class = "language-css">
/*var Example*/

if (true) {
  var varExample = "This works."
}

console.log(varExample)
______________

/*let Example*/

if (true) {
  let letExample = "This works."
}

console.log(letExample);  
                  </code>
                </pre>
              </div>
              
            <div class="col-6 output">
              <h4>Output:</h4>
              
              <div id="outputbmi"></div>
             
              <button class="btn btn-run" onclick="run(this)">Run</button>
              <button class="btn btn-run" onclick="reset(this)">Reset</button>
            </div>
      </div>

      
    </div>

    <?php include $_SERVER['HOME'].'/projects/js_nutshell/inc/footer.inc.php'; ?>