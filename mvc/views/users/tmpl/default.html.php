<?php $users = $this->users ?>

<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $( document ).ready(function() {
        $('.delete').click(function(element) {
            $.ajax({
                url: '/mvc/?id=' + $(this).data('id'),
                type: 'DELETE',
                success: function(result) {

                    window.location.replace('/mvc');
                }
            });
        })
    });
</script>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>username</th>
        <th>email</th>
        <th>password</th>
        <th>delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?php echo $user['id'] ?></td>
            <td>
                <a href="?view=user&id=<?php echo $user['id'] ?>">
                    <?php echo $user['name'] ?>
                </a>
            </td>
            <td><?php echo $user['username'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo $user['password'] ?></td>
            <td title="Warning this will permanently delete this record">
                <a href="#" class="delete" data-id="<?php echo $user['id'] ?>">
                    [ DELETE ]
                </a>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
<br /><br />
<a href="/mvc?view=user">[Create new]</a>
