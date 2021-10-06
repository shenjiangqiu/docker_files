<?php
shell_exec("touch /tmp/testfile");
header('Location: https://app.thesjq.com/index.html?success=true');
?>