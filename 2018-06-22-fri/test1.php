<?php
##James

// The forms configuration array
$config = [
    'forms' => [
        'simple_login' => [
            'name' => 'login',
            'id' => 'login',
            'action' => 'example.php',
            'method' => 'post',
            'layout' => 'vertical',
            'elements' => [
                1 => [
                    'label' => 'Username:',
                    'type' => 'text',
                    'name' => 'username',
                    'class' => '',
                    'id' => '',
                    'size' => 10
                ],
                2 => [
                    'label' => 'Password:',
                    'type' => 'text',
                    'name' => 'password',
                    'class' => '',
                    'id' => '',
                    'size' => 25
                ],
                3 => [
                    'type' => 'submit',
                    'class' => 'button',
                    'value' => 'Sign In'
                ],
            ],
        ],
    ],
];

// The form entry function that builds an HTML form from configuration
function getForm($config, $name)
{
    $form = getStartTag($config['forms'][$name]);
    $form .= getElements($config, $name);
    $form .= '</form>';
    return $form;
}

// The function that builds the start tag
function getStartTag($config)
{
    $tag = '<form ';
    foreach ($config as $key => $value) {
        if ($key === 'elements') continue;
        $tag .= " $key=\"$value\"";
    }
    return $tag .= '>';
}

// The function that adds form elements
function getElements($config, $name)
{
    $html = null;
    $form = $config['forms'][$name];

    // Iterate over form elements, building each element
    foreach ($form['elements'] as $key => $value) {
        $html .= isset($value['label']) ? "<label>{$value['label']}</label>" : null;
        $divclass = isset($value['divclass']) ? "class=\"{$value['divclass']}\"":null;
        switch ($value['type']) {
            case 'text':
                $html .= "<div $divclass><input type=\"text\" class=\"{$value['class']}\" name=\"{$value['name']}\" size=\"{$value['size']}\"/></div>";
                break;
            case 'submit':
                $html .= "<div $divclass><input type=\"{$value['type']}\" class=\"{$value['class']}\" value=\"{$value['value']}\"/></div>";
                break;
        }
    }
    return $html;
}

echo getForm($config, 'simple_login');


