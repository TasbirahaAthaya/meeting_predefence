<?php
session_start();
include 'db.php';
$a[1]="h1";
$a[2]="h2";
$a[3]="h3";
$t1="01:00:00";
$t2="02:00:00";
$f=0;
$c=0;
$dur=$t2-$t1;
//echo $dur;
$j="08:00:00";
for($i=1;$j<="15:00:00";$i++)
{
    $s[0][$i]=$j;
    //echo $s[0][$i];
  //  echo " +++";
    $j=$j+$dur;
    $c++;
}
//echo $c;
for ($i = 1; $i <4; $i++)
{
for($j=1;$j<=$c;$j++)
{
    $s[$i][$j]="0";
}
}


for ($i = 1; $i <4; $i++) {
    $j=0;

    $qry = "SELECT m_id FROM attendees where p_id='$a[$i]' ";
    $result = mysqli_query($mysqli, $qry);
    while ($row = mysqli_fetch_assoc($result)) {
        if($row["m_id"])
        {
            /*echo "^^^^";
            echo $row["m_id"];
            echo "^^^^";*/
            $m=$row["m_id"];
            $qry1 = "SELECT stime,etime FROM meeting where M_id='$m' ";
            $result1 = mysqli_query($mysqli, $qry1);
            while ($row1 = mysqli_fetch_assoc($result1)) {
                if($t1>="01:00:00" && $t1<="03:00:00") {
                    $t1 = $t1 + "12:00:00";
                  //  echo $t1;
                }
                if($t2>="01:00:00" && $t2<="03:00:00") {
                    $t2 = $t2 + "12:00:00";
                }
                if($row1["stime"]>="01:00:00" && $row1["stime"]<="03:00:00") {
                    $row1["stime"] = $row1["stime"] + "12:00:00";
                }
                if($row1["etime"]>="01:00:00" && $row1["etime"]<="03:00:00") {
                    $row1["etime"] = $row1["etime"] + "12:00:00";
                }
              //  echo $row1["stime"];
                for($j=1;$j<=$c;$j++)
                {
                    /*echo  "<br>";
                    echo $row1["stime"];
                    echo  "<br>";
                    echo $row1["etime"];
                    echo "<br><br>";
                    echo $s[0][$j];
                    echo"pp*";*/
                   // echo $j;
                    if($s[0][$j]=="08:00:00")
                    {
                        $s[0][$j]=8;
                    }
                    if(($s[0][$j]==$row1["stime"] || $s[0][$j]==$row1["etime"]))
                    {
                        $s[$i][$j]="1";
                        /*echo $s[0][$j];
                        echo "<br><br>--";
                        echo $s[$i][$j];*/
                        /*echo"pp";
                        echo $s[0][$j+"1"];*/
                    }

                }

                if(($t1>=$row1["stime"] && $t1<=$row1["etime"])||($t2>=$row1["stime"] && $t2<=$row1["etime"]))
                {
                  //  echo "conflict ";
                    $f=1;
                }

          //      break;
            }
        //    break;
        }
      //  break;
    }
    //break;
}
if($f==0)
{
    echo "no conflict";
}
//echo "<br>";
//echo $s[0][1];
for($i=1;$i<4;$i++)

{
    for($j=1;$j<=$c;$j++)
{
    echo $s[$i][$j];
    echo " ";
}
echo "<br>";
}
if($f==1) {
    for ($i = 1; $i < 4; ) {
        for ($j = 1; $j <= $c;) {
            if($s[$i][$j]=="0")
            {
                $i++;
                $p=$j;
            }
            else
                $j++;
            if($i==4 && $p==$j)
            {
                echo $j;
                break;
            }

        }

    }
}
?>