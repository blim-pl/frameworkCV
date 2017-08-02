<?php

namespace BlimCms\Providers;

use BlimCms\Providers\ServiceProvider;

class ViewProvider extends ServiceProvider
{
    public function provide(array $options = [])
    {
        return $this;
    }

    public function render($fileName, array $data = [])
    {
        if (is_file($this->config['dir'] . $fileName)) {
            ob_start();

            require $this->config['dir'] . $fileName;

            $content = ob_get_clean();
        } else {

        }

        return $content;
    }
}
