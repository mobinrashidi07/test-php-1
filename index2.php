<?php
$array=[3,6,2,0];
if ($array[0]<$array[0]) {
    echo "true <br>";
}else{echo "false <br>";
}

if ($array[0]<$array[1]) {
    echo "true <br>";
}else{echo "false <br>";
}

if ($array[0]<$array[2]) {
    echo "true <br>";
}else{echo "false <br>";
}
echo "<br> <br> <br>";

if ($array[1]<$array[0]) {
    echo "true <br>";
}else{echo "false <br>";
}

if ($array[1]<$array[1]) {
    echo "true <br>";
}else{echo "false <br>";
}

if ($array[2]<$array[1]) {
    echo "true <br>";
}else{echo "false <br>";
}

echo "<br> <br> <br>";

if ($array[2]<$array[0]) {
    echo "true <br>";
}else{echo "false <br>";
}

if ($array[2]<$array[1]) {
    echo "true <br>";
}else{echo "false <br>";
}

if ($array[2]<$array[2]) {
    echo "true <br>";
}else{echo "false <br>";
}
echo "<br> <br>";
echo "$array[2] < $array[0] < $array[1] <br>";

echo "min = $array[2] <br>";
echo "max = $array[1] <br>";




