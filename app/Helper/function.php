<?php
if (!function_exists('notifyError')) {
    function notifyError($errors, $name)
    {
        if ($errors->has($name)) {
            echo '<div class="alert alert-danger" role="alert">';
            echo $errors->first($name);
            echo '</div>';
        }
    }
}
