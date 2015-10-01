<?php $this->Html->addCrumb(__('Events')); ?>
<?php $this->Html->addCrumb(__('View')); ?>
<?php $this->Html->addCrumb($event['Event']['id']); ?>
<div class="toolbar toolbar-default">
    <div class="container-fluid">
        <?php echo $this->Html->link(__('Edit'),
            ['plugin' => 'calendar', 'action' => 'edit', $event['Event']['id']],
            ['class' => 'btn btn-default btn-sm', 'icon' => ['class' => 'fa fa-pencil fa-fw']]); ?>
        <?php echo $this->Html->link(__('Events'), ['plugin' => 'calendar', 'action' => 'index'],
            ['class' => 'btn btn-default btn-sm', 'icon' => ['class' => 'fa fa-table fa-fw']]); ?>
        <?php echo $this->Html->link(__('Calendar'), ['plugin' => 'calendar', 'controller' => 'calendar'],
            ['class' => 'btn btn-default btn-sm', 'icon' => ['class' => 'fa fa-calendar fa-fw']]); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <h5><?php echo __('Event'); ?></h5>
        <dl class="dl-horizontal">
            <dt><?php echo __('Title'); ?></dt>
            <dd><?php echo $event['Event']['title']; ?>&nbsp;</dd>
            <dt><?php echo __('Details'); ?></dt>
            <dd><?php echo $event['Event']['details']; ?>&nbsp;</dd>
            <dt><?php echo __('Status'); ?></dt>
            <dd><?php echo $event['EventStatus']['status']; ?>&nbsp;</dd>
            <dt><?php echo __('Type'); ?></dt>
            <dd><?php echo $event['EventType']['type']; ?>&nbsp;</dd>
            <dt><?php echo __('Start'); ?></dt>
            <dd><?php echo $event['Event']['start']; ?>&nbsp;</dd>
            <dt><?php echo __('End'); ?></dt>
            <dd>
                <?php
                if ($event['Event']['all_day'] != 1) {
                    echo $event['Event']['end'];
                } else {
                    echo "N/A";
                }
                ?>&nbsp;
            </dd>
            <dt><?php echo __('All Day'); ?></dt>
            <dd><?php echo $this->Html->status($event['Event']['all_day']) ?>&nbsp;</dd>
            <dt><?php echo __('Created'); ?></dt>
            <dd><?php echo $event['Event']['created']; ?>&nbsp;</dd>
            <dt><?php echo __('Modified'); ?></dt>
            <dd><?php echo $event['Event']['updated']; ?>&nbsp;</dd>
        </dl>
    </div>
</div>
