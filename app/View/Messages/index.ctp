<!-- File: /app/View/messages/index.ctp -->

<h1>Blog messages</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $messagesarray, printing out message info -->

    <?php foreach ($messages as $message): ?>
    <tr>
        <td><?php echo $message['Message']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($message['Message']['title'],
array('controller' => 'Messages', 'action' => 'view', $message['Message']['id'])); ?>
        </td>
        <td><?php echo $message['Message']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($message); ?>
</table>