<?php 
    $data=$oldname;
    echo "<a href=$data>".$data.'</a>';
    echo '<br>'
?>
<head>
    <style>
        form{text-align:center;}
        input{width: 50%; text-align:center;  font-size:40px};
        .liv{width:20%; height:50px; font-size:60px};
    </style>
</head>

<form action="{{ route('controller.method') }}" method="POST">
    @csrf
    <input type="text" name="name" value=<?php echo $oldname?>><br><br><br><br>
    <input type="text" name="email"><br><br><br><br>
    <input type="text" name="password"><br><br><br><br>
    <input type="submit" class='liv'></input>
</form>