<?php

use App\Model\Entity\Message;
use App\View\AppView;

/**
 * @var AppView $this
 * @var Message $message
 */
?>
<div class="row">
    <div class="column-responsive">
        <div class="messages form content">
            <?= $this->Form->create($message) ?>
                <fieldset>
                    <legend><?= __('Send message') ?></legend>
                    <?php
                        echo $this->Form->control('name');
                        echo $this->Form->control('email');
                        echo $this->Form->control('subject');
                        echo $this->Form->control('content');
                        echo $this->Form->control('agreement_1');
                        echo $this->Form->control('agreement_2');
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
