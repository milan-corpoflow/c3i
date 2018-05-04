<?php
/**
 * @var $this HintView
 */

?>
<div class="container">
    <div class="row">
        <div class="col col-lg-12">
            <div class="card mt-5">
                <div class="card-header text-white bg-info text-center">
                    <?php

                    # Welcome
                    echo $this->Html->h2('Forms', ['class' => 'm-0']);

                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-12">
            <div class="card p-4">
                <?php

                echo $this->Form->create();

                echo $this->Form->control('email', [
                    'label' => 'E-mail address',
                    'placeholder' => 'Enter e-mail',
                    'help' => 'We\'ll never share your e-mail with anyone else.',
                ]);

                echo $this->Form->control('password', [
                    'type' => 'password',
                    'placeholder' => 'Password',
                ]);

                ?>
            </div>
        </div>
    </div>
</div>
