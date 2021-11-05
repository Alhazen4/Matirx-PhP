<html>
<head>
<title>Perkalian Matriks 3x3</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<h2>Perkalian Matriks 3x3 Menggunakan PHP</h2>
<a href="file.txt">Download Source Code</a>
<form method="post" action=>
	<div class="row">
		<div class="col-xs-6">
			<h2>Matrix 1</h2>
			<input type="number" name="i111" value="1" class="col-xs-4" />
			<input type="number" name="i112" value="2" class="col-xs-4"/>
			<input type="number" name="i113" value="3" class="col-xs-4"/>
			<br>
			<input type="number" name="i121" value="4" class="col-xs-4"/>
			<input type="number" name="i122" value="5" class="col-xs-4"/>
			<input type="number" name="i123" value="6" class="col-xs-4"/>
			<br>
			<input type="number" name="i131" value="7" class="col-xs-4"/>
			<input type="number" name="i132" value="8" class="col-xs-4"/>
			<input type="number" name="i133" value="9" class="col-xs-4"/>
		</div>
		<div class="col-xs-6">
			<h2>Matrix 2</h2>
			<input type="number" name="i211" value="1" class="col-xs-4"/>
			<input type="number" name="i212" value="2" class="col-xs-4"/>
			<input type="number" name="i213" value="3" class="col-xs-4"/>
			<br>
			<input type="number" name="i221" value="4" class="col-xs-4"/>
			<input type="number" name="i222" value="5" class="col-xs-4"/>
			<input type="number" name="i223" value="6" class="col-xs-4"/>
			<br>
			<input type="number" name="i231" value="7" class="col-xs-4"/>
			<input type="number" name="i232" value="8" class="col-xs-4"/>
			<input type="number" name="i233" value="9" class="col-xs-4"/>
		</div>
	</div>
	<br>
	<input type="submit" name="submit" value="kalimatrix"/>
    <input type="submit" name="submit" value="tambah"/>
    <input type="submit" name="submit" value="Ngurang"/>
</form>
</body>
</html>

<?php
	if(!isset($_POST['submit']))
		die();

	function fillarray($i){
		$matrix_array = array();
		for($row=0;$row<3;$row++){
			$matrix_array[$row]=array();
			for($col=0;$col<3;$col++){
				$matrix_array[$row][$col]=$_POST['i'.$i.($row+1).($col+1)];
			}
		}

		return $matrix_array;
	}

	function kalimatrix($mat1,$mat2){
		$m3=array();
		for ($i=0; $i < count($mat1); $i++) {
			$m3[$i]=array();
			for ($j=0; $j < count($mat2); $j++) {
				$temp=0;
				for ($x=0; $x < count($mat1); $x++) {
					$temp += $mat1[$i][$x]*$mat2[$x][$j];
				}
				$m3[$i][$j]=$temp;
			}
		}
		return $m3;

        echo '
		<div class="row">
			<div class="col-xs-6">
			<h2>Hasil Perkalian Matrix</h2>
		';
		for($x=0;$x<3;$x++){
			for($y=0;$y<3;$y++){
				echo '<input type="number" name="i133" value="'.$m3[$x][$y].'" class="col-xs-4" disabled/>';
			}
			echo "<br>";
		}

		echo '</div></div>';
	}

    function tambah($mat1,$mat2){
        $m4=array();
        for($row=0; $row < count($mat1); $row++){
            for($col=0; $col < count($mat2); $col++){
                $m4[$row][$col] = $mat1[$row][$col] + $mat2[$row][$col]; 
            }
        }
        return $m4;

        echo '
		<div class="row">
			<div class="col-xs-6">
			<h2>Hasil Pertambahan Matrix</h2>
		';
		for($x=0;$x<3;$x++){
			for($y=0;$y<3;$y++){
				echo '<input type="number" name="i133" value="'.$m4[$x][$y].'" class="col-xs-4" disabled/>';
			}
			echo "<br>";
		}

		echo '</div></div>';
    }

	function printmatrix($a){
		echo '
		<div class="row">
			<div class="col-xs-6">
			<h2>Hasil Perkalian Matrix</h2>
		';
		for($x=0;$x<3;$x++){
			for($y=0;$y<3;$y++){
				echo '<input type="number" name="i133" value="'.$a[$x][$y].'" class="col-xs-4" disabled/>';
			}
			echo "<br>";
		}

		echo '</div></div>';
	}
  
	$m1 = fillarray(1);
	$m2 = fillarray(2);

	$m3 = kalimatrix($m1, $m2);
    $m4 = tambah($m1, $m2);

	printmatrix($m3);
    printmatrix($m4);
?>
