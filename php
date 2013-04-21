1.write PHP inside <?php ?> tags.
2.<?php echo "I'll work!"; ?>
3.   <p><?php echo "My first line of PHP!"; ?></p>
5.ECHO
You can think of echo as a PHP command: it tells PHP to echo back the information that follows. If you type
<?php echo "Hooray!"; ?>
PHP will dutifully print out "Hooray!"
6.Unlike HTML and CSS, PHP can do math for you! 



7.PHP 的脚本块以 <?php 开始，以 ?> 结束。您可以把 PHP 的脚本块放置在文档中的任何位置。
当然，在支持简写的服务器上，您可以使用 <? 和 ?> 来开始和结束脚本块。
8.PHP 中的每个代码行都必须以分号结束。分号是一种分隔符，用于把指令集区分开来。
PHP嵌套在HTML内
<html>
<body>

<?php
echo "Hello World";
?>

</body>
</html>
9.在 PHP 中，我们使用 // 来编写单行注释，或者使用 /* 和 */ 来编写大的注释块。
10.PHP 中的所有变量都是以 $ 符号开始的
<?php
$txt = "Hello World!";
$number = 16;
?>
11.变量命名规则：
变量名必须以字母或下划线 "_" 开头。
变量名只能包含字母数字字符以及下划线。
变量名不能包含空格。如果变量名由多个单词组成，那么应该使用下划线进行分隔（比如 $my_string），或者以大写字母开头（比如 $myString）
12.echo ===》输出
13.并置运算符 .  
=》连接字符串
14.
strlen() 计算字符串长度
strpos() 函数用于在字符串内检索一段字符串或一个字符。
<?php
echo strpos("Hello world!","world");
?> 
15.PHP运算符
算数运算符
运算符  说明	例子	结果
+	Addition	x=2
x+2	4
-	Subtraction	x=2
5-x	3
*	Multiplication	x=4
x*5	20
/	Division	15/5
5/2	3
2.5
%	Modulus (division remainder)	5%2
10%8
10%2	1
2
0
++	Increment	x=5
x++	x=6
--	Decrement	x=5
x--	x=4
赋值运算符
运算符	说明	例子
=	x=y	x=y
+=	x+=y	x=x+y
-=	x-=y	x=x-y
*=	x*=y	x=x*y
/=	x/=y	x=x/y
.=	x.=y	x=x.y
%=	x%=y	x=x%y
比较运算符
运算符	说明	例子
==	is equal to	5==8 returns false
!=	is not equal	5!=8 returns true
>	is greater than	5>8 returns false
<	is less than	5<8 returns true
>=	is greater than or equal to	5>=8 returns false
<=	is less than or equal to	5<=8 returns true
逻辑运算符
运算符	说明	例子
&&	and	 x=6
y=3
(x < 10 && y > 1) returns true
||	or	 x=6
y=3
(x==5 || y==5) returns false
!	not	 x=6
y=3
!(x==y) returns true
16.条件语句
If...Else 语句
如果您希望在某个条件成立时执行一些代码，在条件不成立时执行另一些代码，请使用 if....else 语句。
语法
if (condition)
  code to be executed if condition is true;
else
  code to be executed if condition is false; 
#
<html>
<body>

<?php
$d=date("D");
if ($d=="Fri")
  echo "Have a nice weekend!"; 
else
  echo "Have a nice day!"; 
?>

</body>
</html>

如果希望在多个条件之一成立时执行代码，请使用 elseif 语句：
语法
if (condition)
  code to be executed if condition is true;
elseif (condition)
  code to be executed if condition is true;
else
  code to be executed if condition is false; 
#
<html>
<body>

<?php
$d=date("D");
if ($d=="Fri")
  echo "Have a nice weekend!"; 
elseif ($d=="Sun")
  echo "Have a nice Sunday!"; 
else
  echo "Have a nice day!"; 
?>

</body>
</html>

17.switch
有选择地执行若干代码块之一
语法
switch (expression)
{
case label1:
  code to be executed if expression = label1;
  break;  
case label2:
  code to be executed if expression = label2;
  break;
default:
  code to be executed
  if expression is different 
  from both label1 and label2;
}

实例
工作原理：
对表达式（通常是变量）进行一次计算
把表达式的值与结构中 case 的值进行比较
如果存在匹配，则执行与 case 关联的代码
代码执行后，break 语句阻止代码跳入下一个 case 中继续执行
如果没有 case 为真，则使用 default 语句
<?php
switch ($x)
{
case 1:
  echo "Number 1";
  break;
case 2:
  echo "Number 2";
  break;
case 3:
  echo "Number 3";
  break;
default:
  echo "No number between 1 and 3";
}
?>

</body>
</html>

18.数值数组
例子 1
在这个例子中，会自动分配 ID 键：
$names = array("Peter","Quagmire","Joe");
例子 2
在这个例子中，我们人工分配的 ID 键：
$names[0] = "Peter";
$names[1] = "Quagmire";
$names[2] = "Joe";
可以在脚本中使用这些 ID 键：
<?php

$names[0] = "Peter";
$names[1] = "Quagmire";
$names[2] = "Joe";

echo $names[1] . " and " . $names[2] . " are ". $names[0] . "'s neighbors";
?>
以上代码的输出：
Quagmire and Joe are Peter's neighbors

#关联数组
关联数组，它的每个 ID 键都关联一个值。
在存储有关具体命名的值的数据时，使用数值数组不是最好的做法。
通过关联数组，我们可以把值作为键，并向它们赋值。
例子 1
在本例中，我们使用一个数组把年龄分配给不同的人：
$ages = array("Peter"=>32, "Quagmire"=>30, "Joe"=>34);
例子 2
本例与例子 1 相同，不过展示了另一种创建数组的方法：
$ages['Peter'] = "32";
$ages['Quagmire'] = "30";
$ages['Joe'] = "34";
可以在脚本中使用 ID 键：
<?php

$ages['Peter'] = "32";
$ages['Quagmire'] = "30";
$ages['Joe'] = "34";

echo "Peter is " . $ages['Peter'] . " years old.";
?>
以上脚本的输出：
Peter is 32 years old.
多维数组
在多维数组中，主数组中的每个元素也是一个数组。在子数组中的每个元素也可以是数组，以此类推。
例子 1
在本例中，我们创建了一个带有自动分配的 ID 键的多维数组：
$families = array
(
  "Griffin"=>array
  (
  "Peter",
  "Lois",
  "Megan"
  ),
  "Quagmire"=>array
  (
  "Glenn"
  ),
  "Brown"=>array
  (
  "Cleveland",
  "Loretta",
  "Junior"
  )
);
如果输出这个数组的话，应该类似这样：
Array
(
[Griffin] => Array
  (
  [0] => Peter
  [1] => Lois
  [2] => Megan
  )
[Quagmire] => Array
  (
  [0] => Glenn
  )
[Brown] => Array
  (
  [0] => Cleveland
  [1] => Loretta
  [2] => Junior
  )
)
例子 2
让我们试着显示上面的数组中的一个单一的值：
echo "Is " . $families['Griffin'][2] . 
" a part of the Griffin family?"; 
以上代码的输出：
Is Megan a part of the Griffin family?

#多维数组
在多维数组中，主数组中的每个元素也是一个数组。在子数组中的每个元素也可以是数组，以此类推。
例子 1
在本例中，我们创建了一个带有自动分配的 ID 键的多维数组：
$families = array
(
  "Griffin"=>array
  (
  "Peter",
  "Lois",
  "Megan"
  ),
  "Quagmire"=>array
  (
  "Glenn"
  ),
  "Brown"=>array
  (
  "Cleveland",
  "Loretta",
  "Junior"
  )
);
如果输出这个数组的话，应该类似这样：
Array
(
[Griffin] => Array
  (
  [0] => Peter
  [1] => Lois
  [2] => Megan
  )
[Quagmire] => Array
  (
  [0] => Glenn
  )
[Brown] => Array
  (
  [0] => Cleveland
  [1] => Loretta
  [2] => Junior
  )
)
例子 2
让我们试着显示上面的数组中的一个单一的值：
echo "Is " . $families['Griffin'][2] . 
" a part of the Griffin family?"; 
以上代码的输出：
Is Megan a part of the Griffin family?

19.循环
while 只要指定的条件成立，则循环执行代码块
do...while.. 首先执行一次代码块，然后在指定的条件成立时重复这个循环
for  循环执行代码块指定的次数
foreach 根据数组中每个元素来循环代码块
#while
只要指定的条件成立，while 语句将重复执行代码块。
语法
while (condition)
code to be executed;
例子
下面的例子示范了一个循环，只要变量 i 小于或等于 5，代码就会一直循环执行下去。循环每循环一次，变量就会递增 1：
<html>
<body>

<?php 
$i=1;
while($i<=5)
  {
  echo "The number is " . $i . "<br />";
  $i++;
  }
?>

</body>
</html>

#do...while
do...while 语句
do...while 语句会至少执行一次代码 - 然后，只要条件成立，就会重复进行循环。
语法
do
{
code to be executed;
}
while (condition); 
例子
下面的例子将对 i 的值进行一次累加，然后，只要 i 小于 5 的条件成立，就会继续累加下去：
<html>
<body>

<?php 
$i=0;
do
  {
  $i++;
  echo "The number is " . $i . "<br />";
  }
while ($i<5);
?>

</body>
</html>

#for
语法
for (initialization; condition; increment)
{
  code to be executed;
}
注释：for 语句有三个参数。第一个参数初始化变量，第二个参数保存条件，第三个参数包含执行循环所需的增量。如果 initialization 或 increment 参数中包括了多个变量，需要用逗号进行分隔。而条件必须计算为 true 或者 false。
例子
下面的例子会把文本 "Hello World!" 显示 5 次：
<html>
<body>

<?php
for ($i=1; $i<=5; $i++)
{
  echo "Hello World!<br />";
}
?>

</body>
</html>



20.
#php中++i 与 i++ 的区别
a、++i 的用法（以 a=++i ，i=2 为例） 
先将 i 值加 1 （也就是 i=i+1 ），然后赋给变量 a （也就是 a=i ）， 
则最终 a 值等于 3 , i 值等于 3 。 
所以 a=++i 相当于 i=i+1 ，a=i 
b、i++ 的用法（以 a=i++ ，i=2 为例） 
先将 i 值赋给变量 a （也就是 a=i ）,然后 i 值加 1 （也就是 i=i+1 ）， 
则最终 a 值等于 2 ，i 值等于 3 。 
所以 a=i++ 相当于 a=i , i=i+1 
c、++i 与 i++ 
a=++i 相当于 i++ , a=i 
a=i++ 相当于 a=i , i++ 
d、++i 与 i++ 单独使用时，相当于 i=i+1 

21.
<br/>是html语言里的换行符;
在php中可以嵌套html标签输出;

22.运算符
#算数运算符
+ - * /  % ++ --
Php里的取余运算首先把运算符两边的变量转化为整形，在参与运算。
<?php
$a=10;
$b=$a--;
$c=++$b;
$d=$c++ + ++$c;
$e=$d-- - --$d;
Echo $e;
?>
除数和取余的数不能为零
取余案例：
<?php
$year=2010;
If(($year%4==0 && $year%100!=0)||($year%400==0))
{echo “这个年份是闰年”;}
Else{echo “这个年份不是闰年”;}
?>

#字符运算符
字符串运算符号就是一个点”.”这里是连接的意思
<?php
$a=‘aaaaaaaaa’;
$b=‘rrrrrrrrr’
Echo $a.’<br/>’;
Echo $b;
?>

#赋值运算符
=  += -= *= /= .=  %=
<?php
$a=10;
$a+=10; //$a=$a+10
$a-=10;  //$a=$a-10;
$a*=10; //$a=$a*10;
$a/=10;  //$a=$a/10
$a%=10; //$a=$a%10;
$a.=‘10’;  // $a=$a.’10’

#比较运算符
< > <= >=  ==  ===  !=  !==
<?php
$a=100;
$b=‘100’;
If($a==$b)
{echo “\a等于\b”;}
Else
{echo “\a不等于\b”;}
?>

#全等于===
<?php
$a=100;
$b=‘100’;
If($a===$b)
{echo “\a等于\b”;}
Else
{echo “\a不等于\b”;}
?>

#逻辑运算符
and 或&&   逻辑与
or   或 ||     逻辑或
not或 ！       逻辑非
例子：
 $username="admin";
  $password="123456";
 $email="";

  if($username=="admin" && $password="123456"){
  	echo "用户名和密码输入是正确的<br>";
  }

  if($username=="" || $password=="" || $email==""){
  	echo "所有的值一个都不能为空<br>";
  }

  if((isset($email) && !empty($email)) || (isset($phone) && !empty($phone))){
  	echo "有一种联系方式";
  }

  
#位运算符
在php里用的很少，所以我们稍微提下就行了。
&按位与
|  按位或
^按位异或
 ~按位非
<<左移
>>右移

#其他运算符号
?  :  
’’
@
=>
->

22.typical example  ===>echo
<html>
<body>
<h1><?php echo "I'm learning PHP!";?></h1>
</body>
</html>

23.doing calculating
	<body>
        <p><?php echo 17*123;?></p>   
	</body>

24.赋值计算
<body>
        <p><?php $total=1+1;
        echo $total;?></p>
    </body>
25.control flow
<body>
    <p>
      <?php
        $teabags = 3;
        
        if ($teabags > 0) {
          echo "There are tea bags! I'll have a cup!";
        } else {
          echo "No more tea! I guess I won't have a cup.";
        }
      ?>
    </p>
  </body>
26.
$age = 17;

if ($age > 16) {
  echo "You can drive!";
}
27.start another if ==>elseif
<?php
  // Let's assume we have
  // two variables, $number
  // and $guess, already defined
  if ($guess < $number) {
    echo "Your guess is too low!";
  } elseif ($guess > $number) {
    echo "Your guess is too high!";
  } else {
    echo "You guessed right!";
  }
?>
28. "=="
 elseif ($items==1) {
            print "Sorry, no discount!";
        }
29. switch & default
<?php
    switch (2) {
        case 0:
            echo 'The value is 0';
            break;
        case 1:
            echo 'The value is 1';
            break;
        case 2:
            echo 'The value is 2';
            break;
        default:
            echo 'The value isn\'t 0, 1 or 2';
    }
30.
# 正则表达式：http://www.jb51.net/tools/zhengze.html

31.
Multiple Cases. Falling Through!====>
You sometimes want to make multiple expressions, all of which have the same result. Consider the following if statement:

if ($i == 1 ||
    $i == 2 ||
    $i == 3) {
 echo '$i is somewhere between 1 and 3.';
}
With a switch statement, you can do this by adding cases right after another without a break. This is called falling through. The following code works exactly like the above if statement:

case 1:
case 2:
case 3:
    echo '$i is somewhere between 1 and 3.';
    break;
31.
switch ($i) { 

}
But we can also make it this way:

switch ($i):

endswitch;
32.
creat a array===>
<?php
      $friends=array("a","b",'c');
      ?>
33.
//array print ,start from 0
<?php
 $array = array("first", "middle", "last");
 echo $array[0];
 // prints "first"   alse could be isteaded by print $array {2};  
?>
34.
// Modifying Array Elements
<?php
  array("red", "blue", "yellow");
?>
can be thought of as

<?php
  array(0 => "red",
  1 => "blue",
  2 => "yellow");
?>
35.
//modify array
 <p>
      <?php
        $languages = array("HTML/CSS",
        "JavaScript", "PHP", "Python", "Ruby");
        $languages[2]="xsp";
        echo $languages[2];
        // Write the code to modify
        // the $languages array!
        
      ?>
    </p>
36.
// delete array ===>unset

<?php
  $array = ("red", "blue", "green");
  unset($array[3]);
?>
You can even delete the whole array:

<?php
  unset($array);
?>
37.
// creat a loop
  <?php
      for ($leap = 2004; $leap < 2050; $leap = $leap + 4) {
        echo "<p>$leap</p>";
      }
    ?>
38.
A for loop starts with the for keyword. This tells PHP to get ready to loop!
Next comes a set of parentheses (()). Inside the parentheses, we tell PHP three things, separated by semicolons (;): where to start the loop; where to end the loop; and what to do to get to the next iteration of the loop (for instance, count up by one).
After the part in parentheses, the part in curly braces ({}) tells PHP what code to run for each iteration of the loop.
So the above example says: "Start looping with $i at 0, stop the loop before $i gets to 10, count up by 1 each time, and for each iteration, echo the current value of $i."

($i++ is shorthand for $i = $i + 1. You'll see this a lot!)

39.
// infinite loop
$i+1
40.
//foreach
 <?php
        $yardlines = array("The 50... ", "the 40... ",
        "the 30... ", "the 20... ", "the 10... ");
        // Write your foreach loop below this line
        foreach($yardlines as $i)
        {
            echo $i;
        }
        
        // Write your foreach loop above this line
        echo "touchdown!";
      ?>
41.
rand() 函数返回随机整数。
rand(min,max)  
42.



