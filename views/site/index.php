<?php

use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $values app\models\Table[] */

$this->title = 'Table page';
?>
<div class="site-index">

    <div class="body-content">
        <?php $form = ActiveForm::begin([
            'enableAjaxValidation' => false,
            'validateOnSubmit' => false,
            'validateOnBlur' => false,
            'validateOnType' => false,
            'validateOnChange' => true,
        ]); ?>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <?php for ($i = 0; $i < 100; $i++) : ?>
                        <th><?= $i + 1 ?></th>
                    <?php endfor; ?>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 100; $i++) : ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <?php for ($j = 0; $j < 100; $j++) : ?>
                            <?php
                            $index = $i * 100 + $j + 1;
                            ?>
                            <td>
                                <?= $form->field($values[$index], '[' . $index . ']value', [
                                    'template' => '{input}',
                                ])->textInput([
                                    'class' => 'form-control input-width'
                                ]) ?>
                            </td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>

        <input type="submit" value="Save">

        <?php ActiveForm::end(); ?>
    </div>
</div>
