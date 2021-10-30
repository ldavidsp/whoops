<?php
/**
 * Layout template file for Whoops's pretty error output.
 */
?>
<!DOCTYPE html><?php echo $preface; ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex,nofollow"/>
  <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <title><?php echo $tpl->escape($page_title) ?></title>

  <style><?php echo $stylesheet ?></style>
  <style><?php echo $prismCss ?></style>
</head>
<body>

<div class="Whoops container">
  <div class="stack-container">

    <?php $tpl->render($panel_left_outer) ?>

    <?php $tpl->render($panel_details_outer) ?>

  </div>
</div>
<script><?php echo $zepto ?></script>
<script type="text/javascript">
  const framesContainer = document.querySelectorAll('.frames-container > .frame');
  const framesCode = document.querySelectorAll('.frame-code-container > .frame-code');

  framesContainer.forEach((frame, key) => {
    const frameId = frame.getAttribute('id').split('-').pop();
    frame.addEventListener('click', () => {
      removeFrameCodeActive();
      const frameCode = document.getElementById(`frame-code-${frameId}`);
      frameCode.classList.add('active');
      frame.classList.add('active');
    });
  });

  /**
   * Remove Frame Active.
   */
  const removeFrameCodeActive = () => {
    document.querySelectorAll('.frame').forEach(value => {
      if (value.classList.contains('active')) {
        value.classList.remove('active');
      }
    });

    /**
     *  Remove Frame Code Active.
     */
    document.querySelectorAll('.frame-code').forEach(value => {
      if (value.classList.contains('active')) {
        value.classList.remove('active');
      }
    });
  };
</script>
</body>
</html>
