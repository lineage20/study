<?php
/**
 * @desc created by sublime text3
 * @author jxl <[57953279@qq.com>]>
 * @since 2017/05/06 23:06
 */
$host="localhost";
$user='root';
$pass='';
$link=mysql_connect($host,$user,$pass) or die('数据库连接失败');
mysql_select_db('csm');
mysql_query('set names "utf8"');


$pageSize=10;//每页5条
$bothNum=4;//当前页左右各显示4个页码
$cur_page=isset($_GET['cur_page'])?$_GET['cur_page']:1;//当前页数

$sql="select * from orders";
$res=mysql_query($sql);
$total=mysql_num_rows($res);//总记录数
$pageNum=ceil($total/$pageSize);//总页数

$start=($cur_page-1)*$pageSize;
$sql="select * from orders limit $start,$pageSize";
$res=mysql_query($sql);
while ($row=mysql_fetch_array($res)) {
    echo $row['id'].'---'.$row['order_number'].'---'.$row['order_status'];
    echo '<hr/>';
}

//上一页
$pagestr="";
if($cur_page==1){
    $pagestr.='<span>上一页</span>';
}else{
    $lastPage=$cur_page-1;
    $pagestr.="<a href='index.php?cur_page=$lastPage'>上一页</a>"."  ";
}
// 想象分页如下，目前第 10 页，它两边最多只有 4 (bothnum) 个数字
// 1 ...  6 7 8 9 *10* 11 12 13 14 15 ... 100
// echo $pagestr;
// 首页
if($cur_page-$bothNum>1){
    $pagestr.="<a href='index.php?cur_page=1'>首页</a>";
    $pagestr.="<span>...</span>";
}
//当前页的左边
for($i=$bothNum;$i>=1;$i--){
    if(($cur_page - $i) < 1 ) { // 当前页左边花最多 bothnum 个数字
         continue;
     }
    $lastPage=$cur_page-$i;
    $pagestr.="<a href='index.php?cur_page=$lastPage'>$lastPage</a>"."  ";
}
//当前页
$pagestr.="<span>$cur_page</span>"."  ";
//当前页右边
for($i=1;$i<=$bothNum;$i++){
    if(($cur_page + $i) > $pageNum) { // 当前页右边最多 bothnum 个数字
        break;
    }
    $lastPage=$cur_page+$i;
    $pagestr.="<a href='index.php?cur_page=$lastPage'>$lastPage</a>"."  ";

}

//尾页
if(($cur_page+$bothNum)<$pageNum){
    $pagestr.="<span>...</span>"."  ";
    $pagestr .= '<a href="?cur_page='.$pageNum.'">尾页</a>'."  ";
}
//下一页
 if($cur_page == $pageNum) {
       $pagestr .= '<span>下一页</span>';
   } else {
          $nextPage=$cur_page+1;
       $pagestr .= "<a href='index.php?cur_page={$nextPage}'>下一页</a>";
   }
echo $pagestr;
echo "<hr/>";
echo '当前页数为：'.$cur_page.'，总页数为：'.$pageNum;

