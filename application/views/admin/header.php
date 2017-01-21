<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Yayasan Indonesia Sehat</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- TINYMCE SETTINGS -->
    <script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/tinymce.dev.js"></script>
    <script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
    <script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
    <script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
    <script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor importcss colorpicker textpattern"
        ],
        external_plugins: {
            //"moxiemanager": "/moxiemanager-php/plugin.js"
        },
        content_css: "css/development.css",
        add_unload_trigger: false,

        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table",

        image_advtab: true,

        style_formats: [
            {title: 'Bold text', format: 'h1'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        template_replace_values : {
            username : "Jack Black"
        },

        template_preview_replace_values : {
            username : "Preview user name"
        },

        link_class_list: [
            {title: 'Example 1', value: 'example1'},
            {title: 'Example 2', value: 'example2'}
        ],

        image_class_list: [
            {title: 'Example 1', value: 'example1'},
            {title: 'Example 2', value: 'example2'}
        ],

        templates: [
            {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
            {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
        ],

        setup: function(ed) {
            /*ed.on(
                'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
                'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
                'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
                console.log(e.type, e);
            });*/
        },

        spellchecker_callback: function(method, data, success) {
            if (method == "spellcheck") {
                var words = data.match(this.getWordCharPattern());
                var suggestions = {};

                for (var i = 0; i < words.length; i++) {
                    suggestions[words[i]] = ["First", "second"];
                }

                success({words: suggestions, dictionary: true});
            }

            if (method == "addToDictionary") {
                success();
            }
        }
    });
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>index.php/admin">Yayasan Indonesia Sehat</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url() ?>index.php/admin/welcome/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
