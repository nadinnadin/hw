<?php

namespace Framework\View;

/**
 * Class PhpView
 * @package Framework\View
 */
class PhpView implements ViewInterface
{
    /** {@inheritDoc} */
    public function generate(string $template, array $data = null) : string
    {
        if (!empty($data)) {
            extract($data);
        }

        ob_start();

        include sprintf("%s/app/view/%s", BASE_PATH, $template);

        $output = ob_get_contents();

        ob_end_clean();

        return $output;
    }
}
