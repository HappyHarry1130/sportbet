<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }
        td, th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
            }

        tr:nth-child(even) {
            background-color: #dddddd;
            }
        input{width:100%;height:100%;font-size:40px;}
        button{width:80;height:25px;font-size:20px;padding: auto;}
        .submit1{text-align:center;margin-top:30px}
        button.s_b{width:180px;height:auto;font-size:30px}
    </style>
    <link rel="stylesheet" type="text/css" href="D:/style.css">
</head>
<body>
<h1 class="my-class">Hello, World!</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>FreelancerID</th>
        <th>UpworkID</th>
        <th>Modify</th>
    </tr>
    
<form action="{{ route('newUser.method') }}" method="POST">
    @csrf
    <tr>
        <td><input name='name'></input></td>
        <td><input name='Email'></input></td>
        <td><input name='password'></input></td>
        <td><input name='freelancer'></input></td>
        <td><input name='upwork'></input></td>
        <td><button>Del</button><button>Update</button></td>
    </tr>
<?php foreach ($users as $user) {
    echo '<tr>';
    echo '<td>'.$user->name.'</td>';
    echo '<td>'.$user->email.'</td>';
    echo '<td>'.$user->password.'</td>';
    echo '<td>'.$user->FreelancerId.'</td>';
    echo '<td>'.$user->UpworkId.'</td>';
    
    echo "</tr>";
    
    }
?>
</table>
<div class='submit1'><button type="submit" class='s_b'>Create New</button></div>
</form>
</body>
</html>

