<h4 class="mb-3"># 1 Palindrome</h4>

    <p> A palindrome is a word, sentence or other type of character sequence which reads the same backward as forward. 
        For example, “racecar” and “Anna” are palindromes. “Table” and “John” aren’t palindromes, because they 
        don’t read the same from left to right and from right to left.</p>

    <p><em>Creating an algorithm without using <code> echo strrev ( $string ); </code> php builtin.</em></p>

    <div class="card mb-3 p-5">
        <div class="row no-gutters">
            <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="enterWord">Enter Word</label>
                    <input type="word" class="form-control" name="enterWord" id="enterWord" aria-describedby="inputHelp" method="get">
                    <small id="inputHelp" class="form-text text-muted">Enter a word to check if it is a palindrome.</small>
                </div>
                <button type="submit" onclick="<?php $result = inputCheck($_GET['enterWord']);?>" class="btn btn-primary">Check</button>
            </form>
            <div class="row ml-1 mt-5">
                <?=$result;?>
            </div>
            </div>
            <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title"><code>palindrome();</code></h5>
                <pre class="scrollable code-bg"><code>
    function palindrome($word){
        <var>$wordSmall</var> = strtolower($word);
        <var>$lastLetterPos</var> =  (strlen($wordSmall)-1);

        for ($i=0; $i< strlen($wordSmall)/2; $i++){     // strlen()/2 used to stop evaluating when all pair evalutated
            if($wordSmall[$i] == $wordSmall[$lastLetterPos]){
                $lastLetterPos -=1;
            } else {
                return "&lt;p&gt;" . $word . " is not a palindrome. &lt;/p&gt;";
            }
        }
        return "&lt;p&gt;" . $word . " &lt;strong&gt;IS &lt;/strong&gt;  a palindrome. &lt;/p&gt;";
    }
                        </code></pre>
                
            </div>
            </div>
        </div>
    </div>




<?php 
    function inputCheck($word){
        if ($word != null){
            return palindrome($word);
        }else if ($word === ""){
            return "Please enter a word.";
        }
    }

    function palindrome($word){
        echo $word;
        $wordSmall = strtolower($word);
        $lastLetterPos =  (strlen($wordSmall)-1);

        for ($i=0; $i< strlen($wordSmall)/2; $i++){     // strlen()/2 used to stop evaluating when all pair evalutated
            if($wordSmall[$i] == $wordSmall[$lastLetterPos]){
                $lastLetterPos -=1;
            } else {
                return "<p>" . $word . " is not a palindrome. </p>";
            }
        }
        return "<p>" . $word . " <strong>IS</strong>  a palindrome. </p>";
    }

?>