<?php
header("content-type:text/html;charset=utf-8");

mysql_connect("127.0.0.1","root","root");
mysql_select_db("sj");
mysql_query("set names utf8");

$sql="select * from goods";
$res=mysql_query($sql);

?>
<center>
    <table border="1">
        <?php
        $j = 0;
        while($arr=mysql_fetch_assoc($res)){
            ?>
            <td align="center">
                <table border="1">
                    <tr>
                        <td>
                            <img height="30" width="30" src="<?php echo $arr['goodsphoto']?>"/>
                        </td>
                    </tr>
                </table>
                <?php echo $arr['goodsname'];?><br>
                <input type="checkbox" name="check_a" value="<?php echo $arr['id']?>">加入对比
            </td>
            <?php
            $j++;
            if($j%4==0){
                echo"<tr></tr>";
            }
        }
        ?>
    </table>
    <input type="button" value="对比" onclick="sub()">
    </form>
</center>
<hr>
<div id="list">

</div>
<script src="list.js">

</script>

