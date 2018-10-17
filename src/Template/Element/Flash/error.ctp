<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<script>
    Materialize.toast('<?= $message ?>', 3000, 'red')
</script>
