<?php echo $form['episode_id'] ?>
<?php echo $form['feed_id'] ?>
<?php echo $form['id'] ?>
<?php echo $form['_csrf_token'] ?>
<tr>
    <td colspan="2">
        <iframe height="120" width="100%" name="<?php echo $iframe;?>"> </iframe>
    </td>
</tr>
<tr>
	<th><?php echo $form['web_url']->renderLabel() ?>:</th>
	<td>
	<?php echo $form['web_url']->renderError() ?>
	<?php echo $form['web_url'] ?>
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
