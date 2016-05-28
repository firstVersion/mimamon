<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Company Status'), ['controller' => 'CompanyStatus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company Status'), ['controller' => 'CompanyStatus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Requests'), ['controller' => 'Requests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Request'), ['controller' => 'Requests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Status'), ['controller' => 'UserStatus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Status'), ['controller' => 'UserStatus', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated Date') ?></th>
            <td><?= h($user->updated_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created Date') ?></th>
            <td><?= h($user->created_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Company Status') ?></h4>
        <?php if (!empty($user->company_status)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Company Id') ?></th>
                <th><?= __('Usertag Id') ?></th>
                <th><?= __('Checked') ?></th>
                <th><?= __('Updated Date') ?></th>
                <th><?= __('Created Date') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->company_status as $companyStatus): ?>
            <tr>
                <td><?= h($companyStatus->id) ?></td>
                <td><?= h($companyStatus->user_id) ?></td>
                <td><?= h($companyStatus->company_id) ?></td>
                <td><?= h($companyStatus->usertag_id) ?></td>
                <td><?= h($companyStatus->checked) ?></td>
                <td><?= h($companyStatus->updated_date) ?></td>
                <td><?= h($companyStatus->created_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CompanyStatus', 'action' => 'view', $companyStatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CompanyStatus', 'action' => 'edit', $companyStatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CompanyStatus', 'action' => 'delete', $companyStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companyStatus->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Requests') ?></h4>
        <?php if (!empty($user->requests)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Company Id') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Updated Date') ?></th>
                <th><?= __('Created Date') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->requests as $requests): ?>
            <tr>
                <td><?= h($requests->id) ?></td>
                <td><?= h($requests->user_id) ?></td>
                <td><?= h($requests->company_id) ?></td>
                <td><?= h($requests->status) ?></td>
                <td><?= h($requests->updated_date) ?></td>
                <td><?= h($requests->created_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Requests', 'action' => 'view', $requests->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Requests', 'action' => 'edit', $requests->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Requests', 'action' => 'delete', $requests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requests->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Status') ?></h4>
        <?php if (!empty($user->user_status)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Company Id') ?></th>
                <th><?= __('Usertag Id') ?></th>
                <th><?= __('Checked') ?></th>
                <th><?= __('Updated Date') ?></th>
                <th><?= __('Created Date') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_status as $userStatus): ?>
            <tr>
                <td><?= h($userStatus->id) ?></td>
                <td><?= h($userStatus->user_id) ?></td>
                <td><?= h($userStatus->company_id) ?></td>
                <td><?= h($userStatus->usertag_id) ?></td>
                <td><?= h($userStatus->checked) ?></td>
                <td><?= h($userStatus->updated_date) ?></td>
                <td><?= h($userStatus->created_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserStatus', 'action' => 'view', $userStatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserStatus', 'action' => 'edit', $userStatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserStatus', 'action' => 'delete', $userStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userStatus->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
