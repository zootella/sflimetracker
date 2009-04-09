<tr class="progress-iframe" style="display: none;">
    <td colspan="2">
        <iframe height="120" width="100%" name="<?php echo $iframe;?>"> </iframe>
    </td>
</tr>
<tr>
	<th><?php echo $form['created_at']->renderLabel() ?>:</th>
	<td>
		<div class="form-field">
			<?php echo $form['created_at']->renderError() ?>
			<?php echo $form['created_at'] ?>
		</div>
		<div class="value">
			<?php echo $form['created_at']->getValue(); ?>
			<a href="#" class="edit-button">edit</a>
		</div>
	</td>
</tr>
<tr>
	<th><?php echo $form['title']->renderLabel() ?>:</th>
	<td>
		<div class="form-field">
			<?php echo $form['title']->renderError() ?>
			<?php echo $form['title'] ?>
		</div>
		<div class="value">
			<?php echo $form['title']->getValue(); ?>
			<a href="#" class="edit-button">edit</a>
		</div>
	</td>
</tr>
<tr>
	<th><?php echo $form['slug']->renderLabel() ?>:</th>
	<td>
		<div class="form-field">
			<?php echo $form['slug']->renderError() ?>
			<?php echo $form['slug'] ?>
		</div>
		<div class="value">
			<?php echo $form['slug']->getValue(); ?>
			<a href="#" class="edit-button">edit</a>
		</div>
	</td>
</tr>
<tr>
	<th><?php echo $form['length']->renderLabel() ?>:</th>
	<td>
		<div class="form-field">
			<?php echo $form['length']->renderError() ?>
			<?php echo $form['length'] ?>
		</div>
		<div class="value">
			<?php echo $form->getObject()->getFormattedLength(); ?>
			<a href="#" class="edit-button">edit</a>
		</div>
	</td>
</tr>
<tr>
	<th><?php echo $form['description']->renderLabel() ?>:</th>
	<td>
		<div class="form-field">
			<?php echo $form['description']->renderError() ?>
			<?php echo $form['description'] ?>
		</div>
		<div class="value">
			<?php echo $form['description']->getValue(); ?>
			<a href="#" class="edit-button">edit</a>
		</div>
	</td>
</tr>

  <?php if ($form->hasGlobalErrors()): ?>
    <tr>
      <td colspan="">
        <ul class="error_list">
          <?php foreach ($form->getGlobalErrors() as $name => $error): ?>
            <li><?php echo $name.': '.$error ?></li>
          <?php endforeach; ?>
        </ul>
      </td>
    </tr>
  <?php endif; ?>

