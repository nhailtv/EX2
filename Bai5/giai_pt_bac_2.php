<?php
//pt bac 1
function giai_pt_bac_1($a, $b)
{
    if ($a == 0) {
        if ($b == 0) {
            $x = "Phương trình có vô số nghiệm";
        } else {
            $x = "Phương trình vô nghiệm";
        }
    } else {
        $t = -$b / $a;
        $t = round($t, 2);
        $x = "Nghiệm: x = " . $t;
    }
    return $x;
}

//pt bac 2
function giai_pt_bac_2($a, $b, $c)
{
    if ($a == 0)
        $x = giai_pt_bac_1($b, $c);
    else {
        $delta = pow($b,2) - 4*$a*$c;
        if ($delta < 0)
            $x = "Phương trình vô nghiệm";
        if ($delta == 0)
            $x = "Phương trình có nghiệm kép x1 = x2 = " . -$b / (2*$a);
        else
        {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            $x = "Phương trình có 2 nghiệm phân biệt: x1 = " . round($x1, 2) . " ; x2 = " . round($x2, 2);
        } 
    }
    return $x;
}

$a = filter_input(INPUT_POST, "a");
$b = filter_input(INPUT_POST, "b");
$c = filter_input(INPUT_POST, "c");

$x = giai_pt_bac_2($a, $b, $c);

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>
<style>
        table {
            border-collapse: collapse;
        }

        table,
        td {
            border: 1px solid black;
        }
    </style>
<body>
    <form action="giai_pt_bac_2.php" method="post">
        <table width="806" >
            <tr>
                <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
            </tr>
            <tr>
                <td width="83">Phương trình </td>
                <td width="236">
                    <input name="a" type="text" />
                    X^2 +
                </td>
                <td width="218"><label for="textfield3"></label>
                    <input type="text" name="b" id="textfield3" />
                    X+
                </td>
                <td width="241"><label for="textfield"></label>
                    <input type="text" name="c" id="textfield" />
                    =0
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="textfield2">
                        <?php echo $x; ?>
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao"
                        value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>

</html>