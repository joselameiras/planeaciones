<?php
//SplStack Mode is LIFO (Last In First Out)
  
$q = new SplQueue();
$q->push(1);
$q->push(2);
$q->push(3);
$q->pop();
$q->push(4);
$q->push(5);
$q->push(6);
$q->push(7);

$q->rewind();
while($q->valid()){
    echo $q->current(),"\n";
    $q->next();
}
?>


 <script>
        function convierteletra(letra) {
            return letra.charCodeAt(0);
        }
        var nombrecompleto = ['Jose ', 'Lameiras ', 'Pleites '];

        for (i = 0; i < nombrecompleto.length; i++) {
            for (e = 0; e < nombrecompleto[i].length; e++) {
                console.log(convierteletra(nombrecompleto[i][e]));
            }
        }




    </script>