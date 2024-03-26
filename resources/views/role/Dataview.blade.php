<div>

<h1 class="my-class">Hello, World!</h1>
   
<form action="{{ route('newUser.method') }}" method="POST">
    @csrf

<?php foreach ($roles as $role) {
    echo '<tr>';
    echo '<h1>'.$role->name.'</h1>';
    echo '<td>'.$role->content.'</td>';    
    echo "</tr>";
    
    }
?>
</table>
<div class='submit1'><button type="submit" class='s_b'>Create New</button></div>
</form>
<!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
