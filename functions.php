<!-- Важный файл в котором записываем функции WordPress -->
<?php
/* В один хук добавляем несколько функции */
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_styles() {
    wp_enqueue_style('childhood-style', get_stylesheet_uri()); // Подключаем стили (первый аргумент - название файла, второй аргумент - путь к файлу)
/*     wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/styles/main.min.css'); // Подключение доп стиля
    wp_enqueue_style('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'); // Подключение animate css с внешнего сервера */
    
};

function childhood_scripts() {
    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
};

?>