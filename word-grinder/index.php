<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Grinder!!!!</title>
<?php
	include ("../php213/global.inc.php");
	$DEBUG = 1;
	function goToBathroom($stuff, $rows){
		$loopCount = 0;
		print "<table><tr>";
		foreach($stuff as $bones=>$grissle){
			if($loopCount % $rows == 0) print "</tr><tr>";
			print "<td>$grissle-$bones</td>";
			$loopCount++;
		}
		print "</tr></table>";
	}
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
	i = 0;
	$(document).ready(function(e) {
		$('#windowSize').val(screen.width);
		if($(window).width() < 900){
			 $('#litterBox').css({
				'width':'480px',
				'left':'-50px'
			 });
		}
		loadingMessage = ["Nomm", "mUnch", "GrUmBlE", "Munch", "MuNCh", "nOmm", "GrUmbLe", "mUncH", "NomM", "gRumBlE"];
		$('#feed').click(function(){
			loading();
		});   
	});
	function loading(){
		setTimeout(function(){
				var rand = Math.random();
				rand *= loadingMessage.length;
				rand = Math.floor(rand);
				$('#sound').html(loadingMessage[rand]);
				i++;
				if(i < loadingMessage.length){ loading(); }
				else{
					$('#sound').html("");
					$('#kitchen').submit();
				}
			}, 300)
	}
</script>
<link rel="stylesheet" href="WordGrinder.css" type="text/css" />
</head>

<body>
    <div id="appContainer">
        <img src="img/domoHead.png" id="headLabel"/>
        
        <div id="monster">
        	<div id="eatingSounds"><h1 id="sound"></h1></div>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post" id="kitchen">
                <input type="text" id="windowSize" name="window_size" hidden="hidden" />
                <br />
                <textarea id="textInput" name="eat"></textarea>
                <br />
                <label id="loading"></label>
                <br />
                <div id="buttons">
                 <input type="button" id="feed" value="FEED HIM!"/><input type="reset"/>
                </div>
            </form>
        </div><!--END monster-->
        <img src="img/inputLabel.png" id="textInputLabel" />
        <div id="litterBox">
       		<input type="button" value="Clean Litter" id="cleanLitter" onclick="window.location.href='http://sabre.southhills.edu/~jk4tlic/WordGrinder/index.php'"/>
            <div id="crap">
				<?php
                    //take in the text
                    if(!empty($_POST)){
						$ROW_COUNT = 6;
						if($_POST['window_size'] > 900){ $ROW_COUNT = 6; }
						else if($_POST['window_size'] < 900){ $ROW_COUNT = 4; }
                        //strip out punctuation and digits
                        $string = preg_replace('/[^a-z\']+/i', ' ', $_POST['eat']); 
                        //Collapse successive spaces into a single space
                        $string = preg_replace('/\s+/', ' ',$string);
                        //change all uppercase to lowercase
                        $string = strtolower(trim($string));
                        //explode the string on spaces 
                        $excrament = explode(' ', $string);
                        //sort the array
                        sort($excrament);
                        /*
                        ** METHOD 1
                        */
                            //print out the method number in the header of the table
                            print '<h3>Method 1</h3>';
                            $method1 = new ArrayObject();
                            //compare each word to the last word to find duplicates
							$count = 1;
							$print = 0;
							print "<table><tr>";	//start the table 
                            for($i = 1; $i < count($excrament); $i++){
								
                                    if($excrament[$i] == $excrament[$i-1]){	//check to see if the current one is the same as the last one
										$count++;					//if it is increase the word count
                                    }else{													//else it will print out the results and reset count, and increase print count to check when to end the row.
										if($print % $ROW_COUNT == 0) print "</tr><tr>";	
										print "<td>$count-{$excrament[$i-1]}</td>";
										$count = 1;
										$print++;
                                    };
                            }
							if($print % $ROW_COUNT == 0) print "</tr><tr>";
							print "<td>$count-{$excrament[count($excrament) - 1]}</td></tr></table>";
                        
						
                        /*
                        ** METHOD 2
                        */
                            //print out the method number in the header of the table
                            print '<h3>Method 2</h3>';
                            //use an associated array to do comparisons
                            $method2;
                            foreach($excrament as $bone=>$grissle){
                                if(isset($method2[$grissle])) {
                                     $method2[$grissle]++;
                                }else{
                                    $method2[$grissle] = 1;
                                }
                            }
                            goToBathroom($method2, $ROW_COUNT);
                            //print out the table in 6 cols in each row (i.e.  5-a  4-i   10-the  )
							
							/*ANSWER TO QUESTIONS*
								In method 1 sorting is essentials to make sure you get all of the duplicates, if you don't it wouldn't work. 
								In method 2 you wouldn't need to sort the array since you use the word as an index and check it with isset to see if you should up the count or not.
								
								The difference for method 1 would result in data like (1-a 1-the 1-a) because the a's needed to be sorted to group them.						
							*/
                    }
                ?>
          	</div><!--END crap-->
        </div><!--END litterBox-->
    </div><!--END AppContainer-->
</body>
</html>