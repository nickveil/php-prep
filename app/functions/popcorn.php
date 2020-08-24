<h4 class="mb-3"># 2 PopCorn</h4>

    <p>Write a function that does the following:

        <ul>
            <li>display the numbers from 1 to n, where n is the integer the function takes as its parameter</li>
            <li>displays Pop instead of the number for multiples of 3</li>
            <li>displays Corn instead of the number for multiples of 5</li>
            <li>displays PopCorn for numbers that are multiples of both 3 and 5</li>
        </ul>
    </p>
    <div class="card mb-3 p-5">
        <div class="row no-gutters">
            <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="enterCount">Enter Count</label>
                    <input type="word" class="form-control" name="enterCount" id="enterCount" aria-describedby="inputHelp" method="get">
                    <small id="inputHelp" class="form-text text-muted">Enter the total count to be processed.</small>
                </div>
                <button type="submit" onclick="<?php $result = $_GET['enterCount'];?>" class="btn btn-primary">Submit</button>
            </form>
            <div class="row ml-1 mt-5">
                <?=inputChecker($result);?>
            </div>
            </div>
            <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title"><code>popCorn();</code></h5>
                <pre class="scrollable bg-gradient-dark"><code>function popcorn ($count){

        for ($i=1; $i&lt;=$count; $i++){
        
            if ($i%3 == 0 && $i%5==0){
                echo "&lt;div class='col-3'&gt;".$i.". PopCorn&lt;/div&gt;" ;
            }elseif($i%3 == 0){
                echo "&lt;div class='col-3'&gt;".$i.". Pop&lt;/div&gt;";
            }elseif ($i%5 == 0){
                echo "&lt;div class='col-3'&gt;".$i.". Corn&lt;/div&gt;";
            } else {
                echo "<&lt;div class='col-3'&gt;".$i.". ".$i. "&lt;/div&gt;";
            }
        }
       
    }</code></pre>
            </div>
            </div>
        </div>
    </div>




<?php 

    function inputChecker ($count){
       if($count!=null || is_int($count)){
        echo "Please enter an integer.";
       } else {
        popcorn($count);
       }
        
    }
    

    function popcorn ($count){
        
        for ($i=1; $i<=$count; $i++){
        
            if ($i%3 == 0 && $i%5==0){
                echo "<div class='col-3'>".$i.". PopCorn</div>" ;
            }elseif($i%3 == 0){
                echo "<div class='col-3'>".$i.". Pop</div>";
            }elseif ($i%5 == 0){
                echo "<div class='col-3'>".$i.". Corn</div>";
            } else {
                echo "<div class='col-3'>".$i.". ".$i. "</div>";
            }
        }
    }

?>