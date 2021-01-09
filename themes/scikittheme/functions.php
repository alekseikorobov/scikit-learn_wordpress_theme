<?php
    require get_template_directory() . '/views/view1.php';

    /*init actions and filters*/
    add_action ('init','register_post_types');
    add_action( 'init', 'register_taxonomies' );
    add_action('wp_enqueue_scripts','style_theme');
    add_action('wp_footer','scripts_theme');
    add_action( 'after_setup_theme', 'theme_register_nav_menu' );
    add_filter( 'nav_menu_css_class', 'filter_add_my_class_to_nav_menu', 10, 2 );
    add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 1 );    
    add_action( 'widgets_init', 'register_my_widgets' );
    add_action( 'pre_get_posts', 'wpse10691_alter_query' ); //сортировка постов перед выводом
    add_filter('widget_title', 'widgettitle_off');  //фильтр для того чтобы убрать заголовок из виджета

    /*http://wordsmall.ru/sajtostroenie/kak-ubrat-lishnie-tegi-br-i-p-v-wordpress.html*/
    remove_filter( 'the_content', 'wpautop' );// для контента
    remove_filter( 'the_excerpt', 'wpautop' );// для анонсов
    remove_filter( 'comment_text', 'wpautop' );// для комментарий


    function register_post_types() {
        register_post_type( 'example', [
            'label'  => null,
            'labels' => [
                'name'               => 'Example', // основное название для типа записи
                'singular_name'      => 'Example', // название для одной записи этого типа
                'add_new'            => 'Add Example', // для добавления новой записи
                'add_new_item'       => 'Adding Example', // заголовка у вновь создаваемой записи в админ-панели.
                'edit_item'          => 'Edit Example', // для редактирования типа записи
                'new_item'           => 'New Example', // текст новой записи
                'view_item'          => 'View Example', // для просмотра записи этого типа.
                'search_items'       => 'Search Example', // для поиска по этим типам записи
                'not_found'          => 'Not found Example', // если в результате поиска ничего не было найдено
                'not_found_in_trash' => 'Not found in Trash Example', // если не было найдено в корзине
                'parent_item_colon'  => '', // для родителей (у древовидных типов)
                'menu_name'          => 'Example', // название меню
            ],
            'description'         => '',
            'public'              => true,
            // 'publicly_queryable'  => null, // зависит от public
            // 'exclude_from_search' => null, // зависит от public
            // 'show_ui'             => null, // зависит от public
            // 'show_in_nav_menus'   => null, // зависит от public
            'show_in_menu'        => true, // показывать ли в меню адмнки
            // 'show_in_admin_bar'   => null, // зависит от show_in_menu
            'show_in_rest'        => null, // добавить в REST API. C WP 4.7
            'rest_base'           => null, // $post_type. C WP 4.7
            'menu_position'       => 4,//4-9 — под «Записи»
            'menu_icon'           => 'dashicons-edit-page',
            //'capability_type'   => 'post',
            //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
            //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
            'hierarchical'        => false,
            'supports'            => [ 'title', 'editor','thumbnail','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => ['example'],
            'has_archive'         => false,
            'rewrite'             => true,
            'query_var'           => true,
        ] );
    }
    
    function register_taxonomies(){

        // список параметров: wp-kama.ru/function/get_taxonomy_labels
        register_taxonomy( 'category_example', [ 'example' ], [ 
            'label'                 => '', // определяется параметром $labels->name
            'labels'                => [
                'name'              => 'Category Example',
                'singular_name'     => 'Category Example',
                'search_items'      => 'Search Category Examplies',
                'all_items'         => 'All Category Examplies',
                'view_item '        => 'View Category Example',
                'parent_item'       => 'Parent Category Example',
                'parent_item_colon' => 'Parent Category Example:',
                'edit_item'         => 'Edit Category Example',
                'update_item'       => 'Update Category Example',
                'add_new_item'      => 'Add New Category Example',
                'new_item_name'     => 'New Category Example Name',
                'menu_name'         => 'Category Example',
            ],
            'description'           => '', // описание таксономии
            'public'                => true,
            // 'publicly_queryable'    => null, // равен аргументу public
            // 'show_in_nav_menus'     => true, // равен аргументу public
            // 'show_ui'               => true, // равен аргументу public
            // 'show_in_menu'          => true, // равен аргументу show_ui
            // 'show_tagcloud'         => true, // равен аргументу show_ui
            // 'show_in_quick_edit'    => null, // равен аргументу show_ui
            'hierarchical'          => true,
            'rewrite'               => true,
            //'query_var'             => $taxonomy, // название параметра запроса
            //'capabilities'          => array(),
            //'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
            //'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
            //'show_in_rest'          => null, // добавить в REST API
            //'rest_base'             => null, // $taxonomy
            // '_builtin'              => false,
            //'update_count_callback' => '_update_post_term_count',
        ] );
    }


    function widgettitle_off( $title ) {
        if (empty($title)) return '';
        if ($title[0] == '!') return '';
        return $title;
    }
        
    
    /*
        сортировка постов перед выводом
        https://wordpress.stackexchange.com/questions/49940/how-to-order-posts-by-modified-date-without-using-query-posts
    */
    function wpse10691_alter_query( $query )
    {
        //if ( $query->is_main_query() && ( $query->is_home() || $query->is_search() || $query->is_archive() )  )
        //{
            $query->set( 'orderby', 'create' );
            $query->set( 'order', 'asc' );
        //}
    }

    function theme_register_nav_menu() {
        register_nav_menu( 'primary', 'Primary Menu' );
        add_post_type_support( 'page', 'excerpt' );
        add_post_type_support( 'post', 'post_excerpt' );
    }


    function style_theme(){
        wp_enqueue_style('style',get_stylesheet_uri());

        wp_enqueue_style('bootstrap','https://scikit-learn.org/stable/_static/css/vendor/bootstrap.min.css');
        wp_enqueue_style('gallery','https://scikit-learn.org/stable/_static/gallery.css');

        wp_enqueue_style('gallery','https://scikit-learn.org/stable/_static/gallery.css');
        wp_enqueue_style('gallery-binder','https://scikit-learn.org/stable/_static/gallery-binder.css');
        wp_enqueue_style('gallery-dataframe','https://scikit-learn.org/stable/_static/gallery-dataframe.css');
        wp_enqueue_style('theme','https://scikit-learn.org/stable/_static/css/theme.css');
        
      
    }
    function scripts_theme(){
        wp_enqueue_script('documentation_options','https://scikit-learn.org/stable/_static/documentation_options.js');
        wp_enqueue_script('jquery');//,'https://scikit-learn.org/stable/_static/jquery.js');
        wp_enqueue_script('bootstrap','https://scikit-learn.org/stable/_static/js/vendor/bootstrap.min.js',['jquery']);
        wp_enqueue_script('versionwarning','https://scikit-learn.org/versionwarning.js');        
    }


    
    function filter_add_my_class_to_nav_menu($classes, $item){
        // if( is_single() && $item->title == "Blog" ){
        //     $classes[] = "special-class";
        // }
        $classes = ['nav-item'];
        return $classes;
    }
    function filter_nav_menu_link_attributes($atts){
        $atts['class'] = 'sk-nav-link nav-link';
        return $atts;
    }

    function register_my_widgets(){

        register_sidebar( array(
            'name'          => 'Left sk sidebar toc',
            'id'            => "sk-sidebar-toc",
            // ,'description'   => '',
            // 'class'         => '',
             'before_widget' => '<div id="%1$s"  class="sk-sidebar-toc %2$s">',
             'after_widget'  => "</div>\n",
            // 'before_title'  => '<h2 class="widgettitle">',
            // 'after_title'   => "</h2>\n",
            // 'before_sidebar' => '', // WP 5.6
            // 'after_sidebar'  => '', // WP 5.6
        ) );
        register_sidebar( array(
            'name'          => 'Left sk sidebar toc example',
            'id'            => "sk-sidebar-toc-example",
            // ,'description'   => '',
            // 'class'         => '',
             'before_widget' => '<div id="%1$s"  class="sk-sidebar-toc %2$s">',
             'after_widget'  => "</div>\n",
            // 'before_title'  => '<h2 class="widgettitle">',
            // 'after_title'   => "</h2>\n",
            // 'before_sidebar' => '', // WP 5.6
            // 'after_sidebar'  => '', // WP 5.6
        ) );
        
    }