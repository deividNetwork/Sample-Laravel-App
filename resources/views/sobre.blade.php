@extends('app')

@section('title')
    <?php echo $response['title']?>
@stop

@section('content')
    <div class="container">
        <div class="content">
            <table width="650">
                <thead align="left">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Phrase</th>
                </thead>
                <tbody align="left">
                    <td><?php echo $response['me']['name'] ?></td>
                    <td><?php echo $response['me']['email'] ?></td>
                    <td><?php echo $response['me']['role'] ?></td>
                    <td><?php echo $response['me']['phrase'] ?></td>
                </tbody>
            </table>
        </div>
    </div>
@stop